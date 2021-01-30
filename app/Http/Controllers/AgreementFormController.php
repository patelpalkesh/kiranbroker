<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Events\BreadDataAdded;
use \PDF;
use Mail;

class AgreementFormController extends  \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    //
    function addOrdinalNumberSuffix($num) {
        if (!in_array(($num % 100),array(11,12,13))){
          switch ($num % 10) {
            // Handle 1st, 2nd, 3rd
            case 1:  return $num.'st';
            case 2:  return $num.'nd';
            case 3:  return $num.'rd';
          }
        }
        return $num.'th';
      }
      function BindSignatureText($request, $homepage){
        $name=$request->first_name." ".$request->last_name;
        $homepage= str_replace("_______ day of _____________, 20______ and shall",$this->addOrdinalNumberSuffix(date('d'))." day of ".date('M').", ".date('Y')." and shall",$homepage);
        $homepage= str_replace("Signature :    _____________________________________","Signature :    ".(($request->sign_initial=="")?'_____________________________________':$request->sign_initial),$homepage);
        $homepage= str_replace("Date: _________________________","Date: ".date('m/d/Y'),$homepage);
        $homepage= str_replace("Name(Print) :  _____________________________________","Name(Print) :  ".((trim($name)=="")?'_____________________________________':$name),$homepage);
        $homepage= str_replace("Address :      _________________________________________________________________________","Address :      ".(($request->address=="")?'_____________________________________':$request->address),$homepage);
        $homepage= str_replace("City :         _______________________________","City :         ".(($request->city=="")?'_____________________________________':$request->city),$homepage);
        $homepage= str_replace("State : __________","State : ".(($request->state=="")?'__________':$request->state),$homepage);
        $homepage= str_replace("Zip : __________________","Zip : ".(($request->zip_code=="")?'__________________':$request->zip_code),$homepage);
        $homepage= str_replace("Phone :        ________________________________________________","Phone :        ".(($request->phone=="")?'________________________________________________':$request->phone),$homepage);
        $homepage= str_replace("Email :        ________________________________________________","Email :        ".(($request->email=="")?"________________________________________________":$request->email),$homepage);


        return $homepage;
    }
    public function get_signature(Request $request){
        $ConfidentialStatement=view('AgreementForm.signature')->render();
        $ConfidentialStatement=$this->BindSignatureText($request,$ConfidentialStatement);
        return ['result'=>true,'ConfidentialStatement'=> $ConfidentialStatement];


    }

    public function store(Request $request)
    {
        $slug = 'agreement-form';

         $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
      //  $this->authorize('add', app($dataType->model_name));

        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->addRows);

        if ($val->fails()) {
            return response()->json(['errors' => $val->messages()]);
        }

        if (!$request->has('_validate')) {
            $data = $this->insertUpdateData($request, $slug, $dataType->addRows, new $dataType->model_name());

            event(new BreadDataAdded($dataType, $data));

            if ($request->ajax()) {
                $this->send_mail($request,$request->confidential_statement);
                return response()->json(['success' => true, 'data' => $data]);
            }

            return 'ok';
        }
    }
    public function send_mail(Request $request){
        $data["email"]=$request->get("email");
        $data["client_name"]=$request->get("first_name").' '.$request->get("last_name");
        $data["subject"]=$request->get("subject");
        $pdfHtml= str_replace("pre>","p>",$request->confidential_statement);
        $pdf=PDF::loadHTML($pdfHtml)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');

        $message=array('');
        Mail::send('emails.client', $data, function($message)use($data,$pdf) {
            $message->to($data["email"], $data["client_name"])
            ->subject("Thank you for signing Confidential Agreement")->attachData($pdf->output(), "invoice.pdf");
            });

        Mail::send('emails.admin', $data, function($message)use($data,$pdf) {
                $message->to($data["email"], $data["client_name"])
                ->subject("Confidential Agreement")
                ->attachData($pdf->output(), "invoice.pdf");
        });
    }

}
