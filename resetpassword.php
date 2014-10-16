<? include("include/session.php"); ?>
<!DOCTYPE html>
<html>
<head>
<script language="JavaScript">
  function valida(forma)
  {
    if (forma.email.value == "") {
       alert("Escriba su email");
       forma.email.focus();
       return false;
    }

	return true;
  }
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$global_url = "/ftpllorente/ipad";
?>
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">-->
<link rel="apple-touch-icon" href="<?=$global_url;?>/js/home-screen/images/touch-icon-iphone.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?=$global_url;?>/js/home-screen/images/touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?=$global_url;?>/js/home-screen/images/touch-icon-iphone4.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?=$global_url;?>/js/home-screen/images/touch-icon-ipad2.png">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<script type="text/javascript">
var addToHomeConfig = {
	autostart: false
};
</script>

<link rel="stylesheet" href="<?=$global_url;?>/js/home-screen/style/add2home.css">
<script type="application/javascript" src="<?=$global_url;?>/js/home-screen/add2home.js" charset="utf-8"></script>

<script type="text/javascript">

function loaded () {
	if ( window.location.hash.match('ATHS') ) return;

	addToHome.show();
	window.location.hash = '#ATHS';
}

window.addEventListener('load', loaded, false);

</script>
	
<link rel="stylesheet" href="<?=$global_url;?>/assets/css/master.css" />
<noscript>
<link rel="stylesheet" href="<?=$global_url;?>/assets/css/mobile.min.css" />
</noscript>
<script>
// Edit to suit your needs.
var ADAPT_CONFIG = {
  // Where is your CSS?
  path: '<?=$global_url;?>/assets/css/',

  // false = Only run once, when page first loads.
  // true = Change on window resize and page tilt.
  dynamic: true,

  // First range entry is the minimum.
  // Last range entry is the maximum.
  // Separate ranges by "to" keyword.
  range: [
    '0px    to 760px  = mobile.min.css',
    '760px  to 980px  = 960.min.css',
    '980px  to 1280px = 960.min.css',
    '1280px to 1600px = 1200.min.css',
    '1600px to 1940px = 1560.min.css',
    '1940px to 2540px = 1920.min.css',
    '2540px           = 2520.min.css'
  ]
};
</script>
<link rel="stylesheet" type="text/css" href="<?=$global_url;?>/css/global.css">
<!--CSS Mobile-->
<link rel="stylesheet" type="text/css" media="all and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" href="<?=$global_url;?>/css/ipad.css">
<link rel="stylesheet" type="text/css" media="all and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" href="<?=$global_url;?>/css/ipad-horizontal.css">
<!--Fin CSS Mobile-->
<!--Adaptive Image-->
<link rel="stylesheet" type="text/css" href="<?=$global_url;?>/js/adaptive-image/styles.css"/>
<script type="text/javascript" src="<?=$global_url;?>/js/adaptive-image/lib/klass.min.js"></script>
<script tyoe="text/javascript" src="<?=$global_url;?>/assets/js/adapt.min.js"></script>
	<title>Embajadores</title>
</head>
</head>
<body>
<?php
if(isset($_SESSION['forgotpass'])){
   /* Registration was successful */
   if($_SESSION['forgotpass']){
      echo "<p>Se ha reiniciado tu password correctamente, usuario: <b>".$_SESSION['reguname']."</b>. </p>";
      echo "<p>En este momento enviamos un mail con tu nueva clave de acceso.<br><br>";
	  echo "<p><a href=\"http://www.cedesko.com.mx/index.html\">Ir al menú principal</a> |<a href=\"http://www.cedesko.com/app/login.php\">Entrar a la actividad en línea.</a></p>";
	  
   unset($_SESSION['forgotpass']);
   unset($_SESSION['reguname']);
   }
   /* Registration failed */
   elseif( isset($_SESSION['errorforgotpass'])){
      echo "<p>¡Error!</p>";
      echo "<p>No fue posible reiniciar el password para el usuario: <b>".$_SESSION['reguname']."</b>, por favor considera el siguiente punto: </p>";
      echo "<p>Revisa que el nivel de seguridad de tu navegador esté posicionado en Medio-Alto. Herramientas -> Opciones de Internet -> Seguridad.</p>";
	  echo "<p>Si el problema persiste por favor notifica a tu área de soporte técnico.</p>";
	  echo "<p><a href=\"http://www.cedesko.com/app/resetpassword.php\">Intentar de nuevo.</a></p>";
	  

   }
   unset($_SESSION['errorforgotpass']);
   unset($_SESSION['reguname']);
} else { 

if($form->num_errors > 0){
   echo "<div><font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s).</font></div>";
} ?>
<div class="container_12">
	<div class="grid_4 prefix_4 suffix_4">
		<div class="header" style="margin-top: 20px;">
			<img src="images/login-logo-home.png" class="adaptive-image" />
		</div>
		
		<div id="content">
<form id="login-form" action="process.php" method="post" class="reset">
		<fieldset>
		      <label for="login"><img src="images/login-user.png" class="adaptive-image" /></label>
			<input type="text" id='email' name="email" value="Escribe tu Email" onFocus="if (this.value=='Escribe tu Email') this.value='';"/>
			<div class="clear"></div>


			<br />
            <input type="hidden" name="subforgot" value="restpassr81568s031052013">
	      <input type="submit" class="button-login" name="Submit" value='Enviar' onclick="javascript: return valida(this.form)"/>
		</fieldset>
	</form>
</div>
	</div>
	
	<div class="footer">
		<img src="images/login-footer.png" class="adaptive-image" />
	</div>

</div>
<?php }?>    
</body>
</html>
