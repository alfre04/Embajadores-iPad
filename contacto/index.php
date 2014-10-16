<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'vvalverde@llorenteycuenca.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include("../inc/header.php");?>
    <style>
	#contactWrapper { width:300px; border:1px solid #cfdede; background:#fdfdfd; padding:30px; }
#contactWrapper h1 { font-size: 11px; margin: -33px 0px 30px; padding: 5px 0px 0px 15px; font-size: 12px; text-transform: uppercase; background: url(../img/title-background.png) no-repeat; width: 138px; height: 22px; color: #fff; font-weight: bold;}
#contactWrapper label { display:block; float:none; font-size:12px; width:auto; font-weight: bold; margin-bottom: 7px; color: #333333;}
#contactWrapper label.error { display:block; float:none; font-size:12px; width:280px; font-weight: normal; margin-bottom: 0px; color: #bb3737; background: #fad6d6; border: 1px solid #bb3737; margin-top: 5px; padding: 5px 7px;}
#contactWrapper label.checked { display:none; background: none; border: 0px; margin-top: 0px; padding: 0px; text-indent: -5000px;}
#contactWrapper em { color: #01b3b3;}
#contactWrapper .stage { margin-bottom: 20px;}
#contactWrapper .requiredNote { margin: 20px 0px 20px; color: #333; font-weight: bold;}
#contactWrapper .success { padding: 10px; background: #f0ffc1; border: 1px solid #819934; margin-bottom: 15px; color: #819934; width:280px;}
#contactWrapper .success p { margin: 0px;}

form#contactform input, form#contactform textarea { border: 1px solid #cfdede; padding:8px 12px; font-size:12px; color:#333; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; -o-border-radius: 3px; width: 274px; background: url(page-background.png) repeat; color: #777777;}
form#contactform textarea {font:12px Arial, Helvetica, sans-serif; padding: 12px;}
form#contactform input:focus, form#contactform textarea:focus { outline: none; border: 1px solid #649d9d;}

#submitButton {display: block;text-indent: -5000px;width: 300px!important;height: 47px;background-image:url(send-button-sprite.png)!important;background-repeat: no-repeat;border: 0px!important;padding: 0px!important;}
#submitButton {background-position: 0 0;}
#submitButton:hover {background-position: 0 -47px;}
#submitButton:active {background-position: 0 -47px;}

</style>
    

<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	// validate signup form on keyup and submit
	var validator = $("#contactform").validate({
		rules: {
			contactname: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			subject: {
				required: true,
				minlength: 2
			},
			message: {
				required: true,
				minlength: 10
			}
		},
		messages: {
			contactname: {
				required: "Favor de introducir tu nombre",
				minlength: jQuery.format("Tu nombre debe ser de al menos 2 caracteres")
			},
			email: {
				required: "Favor de introducir tu email",
				minlength: "Favor de introducir un correo válido"
			},
			subject: {
				required: "Favor de introducir el asunto",
				minlength: jQuery.format("Favor de introducir el asunto")
			},
			message: {
				required: "Favor de introducir el mensaje",
				minlength: jQuery.format("Favor de introducir el mensaje")
			}
		},
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			label.addClass("checked");
		}
	});
});
</script>
</head>
<body class="home">
	<?php include("../inc/section-header-interior.php");?>
    <div class="section section-branding">
      <?php include("inc/branding/branding-contacto.php");?>
    </div>
    <div class="section section-content">
      <?php include("inc/content/contacto.php");?>
    </div>

   <div class="section section-footer">
      <?php include("../inc/footer.php");?>
    </div>
</body>
</html>