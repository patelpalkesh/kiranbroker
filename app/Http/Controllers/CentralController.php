<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use Illuminate\Support\Facades\Artisan;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataUpdated;
use Mail;
Use Str;
use Storage;

class CentralController extends \TCG\Voyager\Http\Controllers\Controller
{
    public $slug;

    public function index()
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', $this->slug)->first();
        $model = app($dataType->model_name);
        $query = $model->all();
        return $this->apiResponse(true, "Record Found", $query, 200);
    }
    public function store(Request $request)
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', $this->slug)->first();
        $val = $this->validateBread($request->all(), $dataType->addRows);
        if ($val->fails()) {
            return $this->apiValidatorResponse("Invalid Data", $val->errors());
        }
        $data = $this->insertUpdateData($request, $this->slug, $dataType->addRows, new $dataType->model_name());
        event(new BreadDataAdded($dataType, $data));
        return $this->apiResponse(true, "Record Inserted Successfully", $data, 200);
    }
    public function update(Request $request, $id)
    {

        $dataType = Voyager::model('DataType')->where('slug', '=', $this->slug)->first();
        $model = app($dataType->model_name);
        $data = $model->findOrFail($id);
        $val = $this->validateBread($request->all(), $dataType->editRows, $dataType->name, $id)->validate();
        $this->insertUpdateData($request, $this->slug, $dataType->editRows, $data);
        event(new BreadDataUpdated($dataType, $data));
        return $this->apiResponse(true, "Record Found", $data, 200);
    }

    public function show($id)
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', $this->slug)->first();
        $model = app($dataType->model_name);
        $data = $model->findOrFail($id);
        return $this->apiResponse(true, "Record Found", $data, 200);
    }

    public function apiResponse(bool $success, string $message, $data, int $status)
    {
        return response()->json(['status' => $success, 'message' => $message, 'data' => $data], $status);
    }

    //only used for send Validation error responce
    public function apiValidatorResponse(string $message, $data)
    {
        return response()->json(['status' => false, 'errors' => $data, 'message' => $message], 200);
    }



}
