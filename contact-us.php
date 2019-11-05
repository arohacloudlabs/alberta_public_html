<?php 
//error_reporting(E_ALL); ini_set('display_errors', 1); // uncomment this line for debugging
/*?><script src='https://www.google.com/recaptcha/api.js'></script><?php */?>
<?php include "includes/header.php"; 
 



@session_start(); 
?>
<!--breadcrumbs -->
  <div class="breadcrumbs mt-breadcrumb">
    <div class="container">
      <p><span><a href="index.php">Home</a></span> <span><img src="img/arrow-point-to-right.png"></span> <span>Contact Us</span></p>
    </div>
  </div>
<!--breadcrumbs ends-->
<!--Contact us section starts-->
<section class="contact-sec py-7">
  <div class="container">
    <div class="col-md-9 m-auto text-center">
      <h1 class="futuramedium">Contact <span class="futurabold">us</span></h1>
      <p class="pb-3">Get in touch with our team for more information or for a free product demo. Send us an inquiry and our sales team will contact you in less than 12 hrs to book your free product demo at your convenient time.</p>
    </div>
  </div>
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-6">
        <h4>Reach the <b>appropriate team</b></h4>
        <div class="call-no">
          <span><img src="img/call-no.png" alt="Contact no"></span>
          <a href="" data-toggle="modal" data-target="#call-modal"><b>Call us.</b> We are here to help</a>
        </div>
        <!--Phone Modal-->
          <div class="modal fade" id="call-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content text-center">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h2 class="py-3">Call Customer Support</h2>
                  <h3 class=""><a href="tel:888 502 6650">(888) 502 6650</a></h3>
                  <a href="tel:888 502 6650" class="btn btn-block white py-2 my-4 col-md-6 mx-auto call-btn">Call us now</a>
                </div>
              </div>
            </div>
          </div>
          
          <!--Fax Modal-->
          
          <div class="call-no">
          <span><img src="img/fax.png" alt="Contact no"></span>
          <a href="contact-us.php"><b>Fax Number</b> 888 690 8856</a>
        </div>
        
          
            <!--Fax Modal Ends-->
          
        <!--Phone Modal-->
        <div class="call-no">
          <span><img src="img/email-sm.png" alt="Contact no"></span>
          <a href="" data-toggle="modal" data-target="#email-modal"><b>Email us.</b> Let us know your concern</a>
        </div>
        <!--Email Modal-->
          <div class="modal fade" id="email-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content text-center">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h2 class="py-3">Email Customer Support</h2>
                  <h3 class=""><a href="tel:888-502-6650">support@albertapayments.com</a></h3>
                  <a href="mailto:support@albertapayments.com" class="btn btn-block white py-2 my-4 col-md-6 mx-auto call-btn">Email us</a>
                </div>
              </div>
            </div>
          </div>
        <!--Email Modal-->
        <div class="call-no">
          <span><img src="img/media.png" alt="Contact no"></span>
          <a href="" data-toggle="modal" data-target="#media-modal"><b>Media.</b> Send your queries here</a>
        </div>
        <!--Media Modal-->
          <div class="modal fade" id="media-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content text-center">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h2 class="py-3">Media and Press</h2>
                  <h3 class=""><a href="tel:888 502 6650">support@albertapayments.com</a></h3>
                  <a href="mailto:support@albertapayments.com" class="btn btn-block white py-2 my-4 col-md-6 mx-auto call-btn">Email us</a>
                </div>
              </div>
            </div>
          </div>
        <!--Media Modal-->
        <figure class="img-for-dsk">
          <img src="img/send-mail.png" alt="Send Email here >>">
        </figure>
      </div>
      <div class="col-md-6">
      	 <?php if(isset($_GET['type'])){
			if ($_GET['type'] == "err"){
				if($_GET['msg'] == "smting"){
					$msg = "Something went wrong, Unable to send message now"; 	
					$class = "alert  alert-danger";
				}else if ($_GET['msg'] == "capCErr")
				{
					$msg = "The security code entered was incorrect	"; 	
					$class = "alert  alert-danger";
					
				}
			}
			?>
	           	<div class = "<?php echo $class; ?>"><?php echo $msg; ?></div>
            <?php }	?> 
      	<div> 
        
        </div>
        
        <form action="mails.php" method="post" id="registerForm">
          <!-- <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label> -->
          <div class="elemts-check"> 
          	<input type = "text" name = "serverHost" value = "<?php echo $_SERVER['REMOTE_ADDR']; ?>" />

          </div>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend name-bg">
              <div class="input-group-text"><img src="img/name.png" alt="Name"></div>
            </div>
            <input type="text" class="form-control required" id="name" name="name" placeholder="Name" title="Please enter your Name">
          </div>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend company-bg">
              <div class="input-group-text"><img src="img/company.png" alt="Company"></div>
            </div>
            <input type="text" class="form-control required" id="company" name="company" placeholder="Business Name" title="Please enter your business name">
          </div>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend phone-bg">
              <div class="input-group-text"><img src="img/phone.png" alt="Phone"></div>
            </div>
            <input type="text" class="form-control required" id="phone" name="phone" placeholder="Phone" title="Please enter your Phone No">
          </div>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend email-bg">
              <div class="input-group-text"><img src="img/email.png" alt="Email"></div>
            </div>
            <input type="email" class="form-control required" id="email" name="email" placeholder="Email" title="Please enter your Email">
          </div>
          
            <div class="input-group prod-check mb-2 mr-sm-2">
              <div class="prod-bord">
               <legend>Choose a Product</legend>
                <div class="form-check form-check-inline">
                  <input class="form-check-input checking" type="checkbox" name="inlineCheckbox[]" id="check1" value="Payment Processing"  title="Please enter your Email">
                  <p class="form-check-label" for="inlineCheckbox1">Payment Processing</p>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input checking" type="checkbox" name="inlineCheckbox[]" id="check2" value="POS" title="Please enter your Email">
                  <p class="form-check-label" for="inlineCheckbox1">POS</p>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input checking" type="checkbox" name="inlineCheckbox[]" id="check3" value="Kiosks" title="Please enter your Email">
                  <p class="form-check-label" for="inlineCheckbox2">Kiosks</p>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input checking" type="checkbox" name="inlineCheckbox[]" id="check4" value="ATM" title="Please enter your Email">
                  <p class="form-check-label" for="inlineCheckbox3">ATM</p>
                </div>
              </div>
            </div>

          <div class="form-group">
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend req-bg">
              <div class="input-group-text"><img src="img/message.png" alt="Requirements"></div>
            </div>
            <textarea class="form-control required" id="comments" name="comments" rows="3" placeholder="Requirements" title="Please enter your Requirements"></textarea>
          </div>
          </div>
          
           <div class="form-group">
          <div class="input-group mb-2 mr-sm-2">
          <div class="row"> 
         	<div class="col-md-12">
           	 Human verification code
            </div>
            <div class="col-md-12">
           <img src="captcha.php" />
 		          
               </div>
               </div>
          </div>
          </div>
          
          
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend phone-bg">
              <div class="input-group-text"><img src="img/padlock.png" alt="Phone"></div>
            </div>
            <input type="text" name="captcha_code" size="10" maxlength="7" class="form-control required"  title="Please enter security vertification" placeholder = "Enter Human verification code here" />
          </div>
          
          <div class="input-group mb-2 mr-sm-2">
                
          </div>
          
          
         
          
          

          <!--<div class="form-group">
          <div class="input-group mb-2 mr-sm-2">
             <div class="g-recaptcha resol" id="recaptcha" data-sitekey="6LfcaH8UAAAAAFQXH9cb6M35ITyHAmsr0BNV8zoC"></div> 
             
            <span class="msg-error"></span>
          </div>
          </div>-->
          <!-- <button type="submit" class="btn btn-primary contact-btn mb-2">Send us</button> -->
          <input type="button" name="sbt_form" class="btn btn-primary contact-btn mb-2 subaction" placeholder="Send us" value="Submit">
        </form>
      </div>
        <figure class="img-for-mob">
          <img src="img/send-mail.png" alt="Send Email here >>">
        </figure>
      </div>
    </div>
  </div>
</section>
<!--Contact us section ends-->


<?php include "includes/footer.php"; ?>

<script type="text/javascript">
$("#weburl").hide();
/*  $(document).ready(function(){
    $('.subaction').click(function(){
      $("#registerForm").submit(function(){
      //[0] - numer wiersza w tablicy
    if($(this).serializeArray()[0].value != "") 
            {
          //alert('Success');
          // form submit return true
          return true;
        }
 
        else
        {
        // form submit return false
          return false;
        }
      });
      
	  $captcha = $( '#recaptcha' );
      response = grecaptcha.getResponse();

  if (response.length === 0) {
    $( '.msg-error').text( "Please check recaptcha" );
    if( !$captcha.hasClass( "error" ) ){
      $captcha.addClass( "error" );
	  event.preventDefault();
    }
  } else {
    $( '.msg-error' ).text('');
    $captcha.removeClass( "error" );
    // form submit return true
     return true;
  }
  
  });
 });*/ 
</script>
