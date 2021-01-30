<section class=" position-relative padding_half noshadow">
    <div class="container">
        <form id="agreement-form" class="getin_form wow fadeInUp">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>First Name *</label>
                    <input type="text" class="form-control" name="first_name">
                    <input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="task" value="">
                 </div>
                 <div class="col-md-6 form-group">
                    <label>Last Name *</label>
                    <input type="text" class="form-control" name="last_name">
                 </div>
                 <div class="col-md-6 form-group">
                    <label>Email address *</label>
                    <input type="email" class="form-control" name="email">
                 </div>
                 <div class="col-md-6 form-group">
                    <label>Phone *</label>
                    <input type="text" class="form-control" name="phone" onkeypress="return isNumber(event)" oncopy="return false" onpaste="return false">
                 </div>

                 <div class="col-md-12 form-group">
                    <label>Address *</label>
                    <input class="form-control" name="address">
                 </div>
                 <div class="col-md-12 form-group">
                    <label>Address 1</label>
                    <input class="form-control" name="address_1">
                 </div>
                 <div class="col-md-4 form-group">
                    <label>State *</label>
                    <input type="text" class="form-control" name="state">
                 </div>
                 <div class="col-md-4 form-group">
                    <label>City *</label>
                    <input type="text" class="form-control" name="city">
                 </div>
                 <div class="col-md-4 form-group">
                    <label>ZIP Code *</label>
                    <input type="text" class="form-control" name="zip_code" onkeypress="return isNumber(event)" oncopy="return false" onpaste="return false">
                 </div>
                 <div class="col-md-12 form-group" style="display:none">
                    <label>Confidential Statement</label>
                    <textarea name="confidential_statement" rows="4" class="form-control" cols="75" spellcheck="false"></textarea>
                 </div>

                 <div class="col-md-12 form-group">
                    <label>Sign Initial *</label>
                    <input type="text" class="form-control" name="sign_initial">
                 </div>
                 <input type="hidden" name="recaptcha_response" id="recaptchaResponse" value="03AGdBq27om4NmcUyZxZxT3c3skehqgh_q6IO2gIx7MxjPROanx_egAJ9baeExYN2589X0uwkHzvY4jGsFaGP6CDlSi1Z1w0kXjK4NvU2b4_I_jZxkrak3Utit9VqJNuarMsf0U9t9CFSsoGppk3ZMkPYqzKOzsJx9OZybGawuXOTJtQGb7tvNKzeaxdTkQYI4puPjr8r7ZKeL7btRAvY2942sIoqejYBM3ZNmCaDpdcVtjaZtyILUXEa5TOYBo-kqwoaOeBsJFwHn-mSZtSGlar6eLmhfhz1JLIoCJ2EAyn1Rfl1RP_FX1FR_GH7OGbkbeJrOIs2piQWHBq2DPkoo-B65_NfNkYWdfpZQwG4ZKa8E0zNEIEmbszRUh8pU4abc7o8haAwAPaLnvy4Y4cShSbjJKlRcyfnLhZZ-J81wksKiKCrVW7dtvHSnIuC3e0NYGNTdz0ML5LBrKUNGvQeVu2PcAwMlrvztRw">
                 <div class="col-md-12">
                    <div class="checkbox">
                         <div class="form-group">
                             <input type="checkbox" id="TermsConditions" name="terms_conditions" value="1" onclick="CallConfidentialStatement('get')"> <span>I have read and agree to the terms &amp; conditions</span>
                         </div>
                    </div>
                    <button id="frm-submit" type="submit" class="btn btn-success">Subscribe</button>
                 </div>
            </div>
        </form>
    </div>
</section>

<!-- Modal -->
<div id="Confidential-Statement" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Confidential Statement</h4>
        </div>
        <div class="modal-body" id="Confidential-Statement-view" style="text-align: justify;">

        </div>
        <div class="modal-footer">
          <button type="button" id="btn-ok" class="btn btn-info" onclick="CallConfidentialStatement('ok')" >OK</button>
          <button type="button" class="btn btn-danger" onclick="CallConfidentialStatement('cancel')" >Cancel</button>
        </div>
      </div>

    </div>
  </div>
