


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('asset/js/jquery-3.4.1.min.js') }}"></script>
<!--Bootstrap Core-->
<script src="{{ asset('asset/js/propper.min.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
<!--to view items on reach-->
<script src="{{ asset('asset/js/jquery.appear.js') }}"></script>
<!--Owl Slider-->
<script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
<!--number counters-->
<script src="{{ asset('asset/js/jquery-countTo.js') }}"></script>
<!--Parallax Background-->
<script src="{{ asset('asset/js/parallaxie.js') }}"></script>
<!--Cubefolio Gallery-->
<script src="{{ asset('asset/js/jquery.cubeportfolio.min.js') }}"></script>
<!--Fancybox js-->
<script src="{{ asset('asset/js/jquery.fancybox.min.js') }}"></script>
<!--tooltip js-->
<script src="{{ asset('asset/js/tooltipster.min.js') }}"></script>
<!--wow js-->
<script src="{{ asset('asset/js/wow.js') }}"></script>
<!--Revolution SLider-->
<script src="{{ asset('asset/js/revolution/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('asset/js/revolution/jquery.themepunch.revolution.min.js') }}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="{{ asset('asset/js/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('asset/js/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('asset/js/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('asset/js/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('asset/js/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('asset/js/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('asset/js/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('asset/js/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('asset/js/revolution/extensions/revolution.extension.video.min.js') }}"></script>
<!--custom functions and script-->
<script src="{{ asset('asset/js/functions.js') }}" type="text/javascript"></script>
<script src="{{ asset('asset/js/typed.js') }}" type="text/javascript"></script>
<script src="{{ asset('asset/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LcL9bUZAAAAAFAO_038eCcWmTbn2kZVLu25h7XE"></script>
<script>
$("#banner-images-slider").owlCarousel({
        items: 1,
        autoplay: 1500,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        slideBy: 1,
        loop: true,
        margin: 0,
        dots: false,
        nav: false,
        responsive: {
            1200: {
                items: 1,
            },
            991: {
                items: 1,
            },
            767: {
                items: 1,
            },
            480: {
                items: 1,
            },
            0: {
                items: 1,
            },
        }
    });
/*Services Box Slider*/
$("#services-slider").owlCarousel({
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 1200,
        loop: true,
        margin:20,
        nav: false,
        navText: false,
        dots: false,
        mouseDrag: true,
        touchDrag: true,
        center: true,
        responsive: {
            0: {
                items: 1
            },
            640: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    });
    //banner type part
    var typednew = new Typed('#typednew', {
        strings: [
        'He is involved in NetIP (Network of Indian Professional) for Carolinas as President where he believe that this organization can help an individual connect with so many other Indian professionals locally and nationally.',
        'He has also served as board of directors on C W Williams organization.',
        'He is also an alumni of LU40 (Leaders under 40).',
        'He likes to play volleyball and is a member of Volleyball group called Organized Chaos who has ties with Breakaway Sports.'
        ],
        typeSpeed: 30,
        backSpeed: 0,
        fadeOut: true,
        loop: true
    });
    document.querySelector('.loop2').addEventListener('click', function() {
        toggleLoop(typednew);
    });
</script>
<script>
    (function(jQuery,W,D)
    {
        var JQUERY4U = {};

        JQUERY4U.UTIL =
        {
            setupFormValidation: function()
            {
                //form validation rules
                jQuery("#agreement-form").validate({
                    rules: {
                        FirstName: "required" ,
                        LastName: "required" ,
                        TermsConditions: "required" ,
                        Phone: {
                            required: true,
                            minlength: 10
                        },
                        Email: {
                            required: true,
                        },City: {
                            required: true,
                        },State : {
                            required: true,
                        },Address: {
                            required: true,
                        }, ZIPCode: {
                            required: true,
                        }, SignInitial: {
                            required: true,
                        },

                    },
                    messages: {
                        FirstName: "First name required." ,
                        LastName:  "Last name required." ,
                        City:  "City required." ,
                        State :  "State  required." ,
                        Address:  "Address required." ,
                        ZIPCode:  "ZIP code required." ,
                        SignInitial:  "Sign initial required." ,
                        TermsConditions:  "Please select terms & conditions." ,
                        Phone: {
                            required: "Phone required.",
                            minlength: "Please provide a valid mobile number"
                        },
                         Email: {
                            required: "Please enter your email.",
                            email: "Please enter a valid email.",
                            remote: "Email already in use!"
                        },

                    },
                    submitHandler: function(form) {

                        submit_form();
                        return false;
                        //form.submit();
                    }
                });


                return false;
            }
        }

    //jQuery("#trid"+i+" .checkeditor").rules('add', { required: true , messages: { required: "Please Select Editor", } });
        //when the dom has loaded setup form validation rules
        jQuery(D).ready(function(jQuery) {
            JQUERY4U.UTIL.setupFormValidation();
        });

    })(jQuery, window, document);


    function submit_form(){
            jQuery(".preloader").show();
            jQuery("#agreement-form input[name='task']").val('agreement_form');
            var data = new FormData(jQuery("#agreement-form")[0]);
            jQuery.ajax({
                type:"POST",
                url:'AgreementForm-Create',
                data:data,
                processData: false,
                contentType: false,
                success: function(data){
                    var data = JSON.parse(data);
                        jQuery(".preloader").hide();
                        if(data.result){
                            jQuery("#msg").html('<div class="alert alert-success">'+data.message+'</div>');
                            document.getElementById("agreement-form").reset();
                        window.location.href='#main';
                        }else{
                            jQuery("#msg").html('<div class="alert alert-danger">'+data.message+'</div>');
                            window.location.href='#main';
                        }

                }
            });
            return false;
    }
    function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }

    function CallConfidentialStatement(para,data){
     var checkBox = document.getElementById("TermsConditions");
      if(para=='get'){
          if (checkBox.checked == true){
            GetTextConfidentialStatement();
            jQuery("#Confidential-Statement").modal();
          }
          checkBox.checked  =false;
          jQuery("#frm-submit").trigger("submit");
            var fields = jQuery('input.error');
            if(fields.length > 1){
                 jQuery('#btn-ok').prop('disabled', true);
            }else{
                jQuery('#btn-ok').removeAttr("disabled");
            }

      }
     if(para=="ok"){
      jQuery("#Confidential-Statement").modal('hide');
      jQuery("#TermsConditions-error").html('');
      checkBox.checked  =true;
     }
     if(para=="cancel"){
      jQuery("#Confidential-Statement").modal('hide');
      checkBox.checked  =false;
      jQuery(".preloader").hide();
     }
    }
    function GetTextConfidentialStatement(){
		jQuery(".preloader").show();
		jQuery("#agreement-form input[name='task']").val('GetModalText');

		var data = new FormData(jQuery("#agreement-form")[0]);
		jQuery.ajax({
            type:"POST",
            url:'get-signature',
            data:data,
			processData: false,
			contentType: false,
            success: function(data){
				//var data = JSON.parse(data);
					jQuery(".preloader").hide();
					if(data.result){
						jQuery("#Confidential-Statement-view").html(data.ConfidentialStatement);
						jQuery("#agreement-form textarea[name='ConfidentialStatement']").val(data.ConfidentialStatement);
						jQuery(".preloader").hide();
					}
            }
        });
		return false;
}

    </script>
 <script>
            grecaptcha.ready(function () {
                grecaptcha.execute('6LcL9bUZAAAAAFAO_038eCcWmTbn2kZVLu25h7XE', { action: 'contact' }).then(function (token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    recaptchaResponse.value = token;
                });
            });
 </script>
