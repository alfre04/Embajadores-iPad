<?php
$q=$_GET["subcat"];

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Centro de Estrategia y Desarrollo del Sistema Coca-Cola</title>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php if ($_GET["subcat"] == NULL) { ?>
<div style="padding-left:15px;">
<strong style="color:#F00">Debe seleccionar una empresa del sistema.</strong>
</div>
<?php } else { 

switch ($_GET["subcat"]) {
case 1:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@coca-cola.com">
				<input type="text" style="width:10em;" value="@coca-cola.com" disabled="disabled">';
	break;

case 2:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@brn.com.mx">
				<input type="text" style="width:10em;" value="@brn.com.mx" disabled="disabled">';
	break;


case 3:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@brn.com.mx">
				<input type="text" style="width:10em;" value="@brn.com.mx" disabled="disabled">';
	break;
	
case 4:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@rica.com.mx">
				<input type="text" style="width:10em;" value="@rica.com.mx" disabled="disabled">';
	break;	

case 5:
	$dominio = '<input type="hidden" name="dominio" style="width:7em;" value="@jvalle.com.mx">
				<input type="text" style="width:10em;" value="@jvalle.com.mx" disabled="disabled">';
	break;

case 6:
	$dominio = '<select name="dominio">
            	<option selected="selected" value="@arcacontal.com">@arcacontal.com</option>
				<option value="@emblosaltos.com">@emblosaltos.com</option>
                <option value="@embaguascalientes.com">@embaguascalientes.com</option>
				</select>';
	break;
	
case 7:
	$dominio = '<select name="dominio">
            	<option selected="selected" value="@kof.com.mx">@kof.com.mx</option>
				<option value="@cimsacv.com.mx">@cimsacv.com.mx</option>
                <option value="@foque.com.mx">@foque.com.mx</option>
				<option value="@grupotampico.com">@grupotampico.com</option>
				</select>';
	break;
	
case 8:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@bepensa.com">
				<input type="text" style="width:10em;" value="@bepensa.com" disabled="disabled">';
	break;
	
case 9:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@gocsa.com.mx">
				<input type="text" style="width:10em;" value="@gocsa.com.mx" disabled="disabled">';
	break;
	
case 10:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@elnayar.com">
				<input type="text" style="width:10em;" value="@elnayar.com" disabled="disabled">';
	break;
	
case 11:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@ieqsa.com.mx">
				<input type="text" style="width:10em;" value="@ieqsa.com.mx" disabled="disabled">';
	break;
	
case 12:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@yoli.com.mx">
				<input type="text" style="width:10em;" value="@yoli.com.mx" disabled="disabled">';
	break;
	
case 15:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@coca-cola.com">
				<input type="text" style="width:10em;" value="@coca-cola.com" disabled="disabled">';
	break;
	
case 16:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@foque.com.mx">
				<input type="text" style="width:10em;" value="@foque.com.mx" disabled="disabled">';
	break;
	
case 17:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@cdf.com.mx">
				<input type="text" style="width:10em;" value="@cdf.com.mx" disabled="disabled">';
	break;
	
case 18:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@cimsacv.com.mx">
				<input type="text" style="width:10em;" value="@cimsacv.com.mx" disabled="disabled">';
	break;
	
case 19:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@grupotampico.com">
				<input type="text" style="width:10em;" value="@grupotampico.com" disabled="disabled">';
	break;
	
case 20:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@medrenlogic.com.mx">
				<input type="text" style="width:10em;" value="@medrenlogic.com.mx" disabled="disabled">';
	break;

case 21:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@imer-mex.com.mx">
				<input type="text" style="width:10em;" value="@imer-mex.com.mx" disabled="disabled">';
	break;
	
case 22:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@petstar.mx">
				<input type="text" style="width:10em;" value="@petstar.mx" disabled="disabled">';
	break;
	
case 23:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@coca-cola.com">
				<input type="text" style="width:10em;" value="@coca-cola.com" disabled="disabled">';
	break;
	
case 24:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@coca-cola.com">
				<input type="text" style="width:10em;" value="@coca-cola.com" disabled="disabled">';
	break;
case 25:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@promesanet.com.mx">
				<input type="text" style="width:10em;" value="@promesanet.com.mx" disabled="disabled">';
	break;
case 26:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@ascoca.com.mx">
				<input type="text" style="width:10em;" value="@ascoca.com.mx" disabled="disabled">';
	break;
case 27:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@mikiosko.mx">
				<input type="text" style="width:10em;" value="@mikiosko.mx" disabled="disabled">';
	break;
case 28:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@cedesko.com">
				<input type="text" style="width:10em;" value="@cedesko.com" disabled="disabled">';
	break;
	
case 29:
	$dominio = '<input type="hidden" name="dominio" style="width:10em;" value="@llorenteycuenca.com">
				<input type="text" style="width:10em;" value="@llorenteycuenca.com" disabled="disabled">';
	break;	
}
?>

<label>*Email: </label><br>

<input type="text" name="usermail" value="" style="width:7em;"><?php echo $dominio;  ?><br>
Escriba sólo su email el dominio será cargado por el sistema.

<?php 

} ?>
</body>
</html>