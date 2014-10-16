<?
/**
 * Process.php
 * 
 * The Process class is meant to simplify the task of processing
 * user submitted forms, redirecting the user to the correct
 * pages if errors are found, or if form is successful, either
 * way. Also handles the logout procedure.
 *
 * Written by: Jpmaster77 a.k.a. The Grandmaster of C++ (GMC)
 * Last Updated: August 19, 2004
 */
include("../include/session.php");

class Process
{
   /* Class constructor */
   function Process(){
      global $session;
      /* User submitted login form */
      if(isset($_POST['sublogin']) || $_POST['sublogin'] == "Gsdr81568s031052013" ){
         $this->procLogin();
      }
      /* User submitted registration form */
      else if(isset($_POST['subjoin'])){
         $this->procRegister();
      }
	  
      /* User submitted forgot password form */
      else if(isset($_POST['subforgot']) || $_POST['subforgot'] == "restpassr81568s031052013" ){
         $this->procForgotPass();
      }
      /* User submitted edit account form */
      else if(isset($_POST['subedit'])){
         $this->procEditAccount();
      }
	  
	   /**
       * The only other reason user should be directed here
       * is if he wants to logout, which means user is
       * logged in currently.
       */
      else if($session->logged_in){
         $this->procLogout();
      }
      /**
       * Should not get here, which means user is viewing this page
       * by mistake and therefore is redirected.
       */
       else{
          header("Location: login.php");
       }
   }

   /**
    * procLogin - Processes the user submitted login form, if errors
    * are found, the user is redirected to correct the information,
    * if not, the user is effectively logged in to the system.
    */
   function procLogin(){
      global $session, $form;
      /* Login attempt */
      $retval = $session->login($_POST['user'], $_POST['pass']);
      
      /* Login successful */
      if($retval){
		  header("Location: index.php");
      }
      /* Login failed */
      else{
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: login.php");
      }
   }
   
   /**
    * procLogout - Simply attempts to log the user out of the system
    * given that there is no logout form to process.
    */
   function procLogout(){
      global $session;
      $retval = $session->logout();
      header("Location: login.php");
   }
   
   /**
    * procForma - Process to insert forms to database
    */
   
   
     
   /**
    * procRegister - Processes the user submitted registration form,
    * if errors are found, the user is redirected to correct the
    * information, if not, the user is effectively registered with
    * the system and an email is (optionally) sent to the newly
    * created user.
    */
   function procRegister(){
      global $session, $form;
      /* Convert username to all lowercase (by option) */
      if(ALL_LOWERCASE){
         $_POST['user'] = strtolower($_POST['user']);
      }
      /* Registration attempt */
      $retval = $session->register($_POST['nombres'], $_POST['empresa_del_sistema'], $email = $_POST['usermail'].$_POST['dominio'], $_POST['puesto'],  $_POST['fecha_alta'], $_POST['user'], $_POST['pass'] );
      
      /* Registration Successful */
      if($retval == 0){
         $_SESSION['reguname'] = $email;
         $_SESSION['regsuccess'] = true;
         header("Location: ".$session->referrer);
      }
      /* Error found with form */
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: ".$session->referrer);
      }
      /* Registration attempt failed */
      else if($retval == 2){
         $_SESSION['reguname'] = $_POST['user'];
         $_SESSION['regsuccess'] = false;
         header("Location: ".$session->referrer);
      }
   }
   
   /**
    * procForgotPass - Validates the given username then if
    * everything is fine, a new password is generated and
    * emailed to the address the user gave on sign up.
    */
   function procForgotPass(){
      global $database, $session, $mailer, $form;
      /* Username error checking */
      $subuser = $_POST['email'];
      $field = "email";  //Use field name for username
      if(!$subuser || strlen($subuser = trim($subuser)) == 0){
         $form->setError($field, "* Escriba el email del usuario<br>");
      }
      else{
         /* Make sure username is in database */
         $subuser = stripslashes($subuser);
         if(!$database->emailTaken($subuser)){
            $form->setError($field, "* Email no existe<br>");
         }
      }
      
      /* Errors exist, have user correct them */
      if($form->num_errors > 0){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
      }
      /* Generate new password and email it to user */
      else{
         /* Generate new password */
         $newpass = $session->generateRandStr(8);
         
         /* Get email of user */
         $usrinf = $database->getUserInfoMail($subuser);
         $username  = $usrinf['username'];
		 $nombres  = $usrinf['nombres'];
         
         /* Attempt to send the email with new password */
         if(EMAIL_SEND_PASS){
            /* Email sent, update database */
            $mailer->sendNewPass($subuser,$username,$newpass, $nombres );
			$database->updateUserField($username, "password", md5($newpass));
            $_SESSION['forgotpass'] = true;
			$_SESSION['reguname'] = $username;
         }
         /* Email failure, do not change password */
         else{
            $_SESSION['errorforgotpass'] = true;
			$_SESSION['reguname'] = $username;
         }
      }
      
      header("Location: ".$session->referrer);
   }
   
   /**
    * procEditAccount - Attempts to edit the user's account
    * information, including the password, which must be verified
    * before a change is made.
    */
   function procEditAccount(){
      global $session, $form;
      /* Account edit attempt */
      $retval = $session->editUser($_POST['unidad_operativa'], $_POST['puesto'], $_POST['firma'] );

      /* Account edit successful */
      if($retval){
         $_SESSION['useredit'] = true;
         header("Location: menu-principal.php");
      }
      /* Error found with form */
      else{
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: contrato-privacidad.php");
      }
   }
};

/* Initialize process */
$process = new Process;

?>