<? include("include/session.php"); ?>
<?php if(isset($_GET['token']) && ($_GET['token']!= 1) ) {

	//Guardamos valores para que no tenga que reescribirlos
	//$email = $_GET['Email'];
	$token = $_GET['token'];
	
	$retval = $session->checkValidUser($token); 
	
	if ($retval == 1)
	
	{
		
		if ($session->activarCuenta($token))
				$RespuestaInsert = "Has logrado activar tu cuenta, ahora puedes entrar al Curso. <a href=\"http://www.cedesko.com.mx/una-sola-voz.php\">Clic para entrar al Sitio de Pro Positivo </a>.";
		else
				$RespuestaInsert = "Error: No se pudo activar tu cuenta, intenta registrarte nuevamente o escr&iacute;benos a: miguelperez@coca-cola.com"; 
	
	}
	else { 
	echo "<script language=Javascript> location.href=\"http://www.cedesko.com.mx/index.html\"; </script>"; 
	} 
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contacto - Centro de Estrategia y Desarrollo del Sistema Coca-Cola</title>
<link rel="stylesheet" type="text/css" href="http://www.cedesko.com.mx/css/style.css" />
<link rel="stylesheet" type="text/css" href="http://www.cedesko.com.mx/css/form.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="http://www.cedesko.com.mx/css/ie6style.css" />
<link rel="stylesheet" type="text/css" href="http://www.cedesko.com.mx/ie6demo.css" />
<script defer type="text/javascript" src="http://www.cedesko.com.mx/js/pngfix.js"></script>
<![endif]-->

<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="http://www.cedesko.com.mx/css/ie7style.css" />
<link rel="stylesheet" type="text/css" href="http://www.cedesko.com.mx/ie7demo.css" />
<![endif]-->

<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="http://www.cedesko.com.mx/css/ie8style.css" />
<![endif]-->


<!--[if lt IE 7]>
<script defer type="text/javascript" src="http://www.cedesko.com.mx/js/pngfix.js"></script>
<![endif]-->



<link rel="stylesheet" type="text/css" href="http://www.cedesko.com.mx/demo.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://www.cedesko.com.mx/script.js"></script>

<script src="js/script.js" type="text/javascript"></script>
<script src="selectsubcategoria.js"></script>

</head>
<body>
<div id="contenedor-pag-interna" class="directorio" style="height:975px;">
<div id="contenedor-dos">
    	<div id="contenedor-superior">
       	  <div id="info-centro">
            <p class="info-centro-nombre">Centro de Estrategia y Desarrollo del Sistema Coca-Cola</p>
            <p class="info-centro-tel">Tel. (55) 52 62 64 80</p>
            </div>
            <div id="menu-principal">
            	
                
                <div id="menuHolder">
<ul id="menuOuter">
	<li class="lv1-li"><!--[if lte IE 6]><a class="lv1-a" href="#url"><table><tr><td><![endif]-->
		<ul id="menuInner">
        
			<li class="lv2-li"><a class="lv2-a" href="http://www.cedesko.com.mx/index.html">Inicio<!--[if gte IE 7]><!--></a><!--<![endif]-->
			<!--[if lte IE 6]><table><tr><td><![endif]-->
			<!--[if lte IE 6]></td></tr></table></a><![endif]-->
			</li>        
			<li class="lv2-li"><a class="lv2-a" href="#url">Qui&eacute;nes Somos<!--[if gte IE 7]><!--></a><!--<![endif]-->
			<!--[if lte IE 6]><table><tr><td><![endif]-->
				<ul>

					<li><a href="http://www.cedesko.com.mx/q-somos.html">Historia</a></li>
					<li><a href="http://www.cedesko.com.mx/q-estrategia.html">Desarrollo y Estrategia</a></li>
					
				</ul>

			<!--[if lte IE 6]></td></tr></table></a><![endif]-->
			</li>
			
			<li class="lv2-li"><a class="lv2-a" href="http://www.cedesko.com.mx/programas.html">Catalogo de Programas<!--[if gte IE 7]><!--></a><!--<![endif]-->
			<!--[if lte IE 6]><table><tr><td><![endif]-->

			<!--[if lte IE 6]></td></tr></table></a><![endif]-->
			</li>
			
		</ul>
	<!--[if lte IE 6]></td></tr></table></a><![endif]-->
	</li>
</ul>
</div>



                <div id="menuHolderRight">
<ul id="menuOuter">
	<li class="lv1-li"><!--[if lte IE 6]><a class="lv1-a" href="#url"><table><tr><td><![endif]-->
		<ul id="menuInner">
        
			<li class="lv2-li"><a class="lv2-a" href="http://www.cedesko.com.mx/noticias.html">Noticias<!--[if gte IE 7]><!--></a><!--<![endif]-->
			<!--[if lte IE 6]><table><tr><td><![endif]-->
			
			<!--[if lte IE 6]></td></tr></table></a><![endif]-->
			</li>        
			<li class="lv2-li"><a class="lv2-a" href="#url">Servicios<!--[if gte IE 7]><!--></a><!--<![endif]-->
			<!--[if lte IE 6]><table><tr><td><![endif]-->
				<ul>

					<li><a href="http://www.cedesko.com.mx/alianzas.html">Alianzas</a></li>
					<li><a href="http://www.cedesko.com.mx/toptv.html">Coca-Cola Top TV</a></li>
					<li><a href="http://www.cedesko.com.mx/sistemas-calidad.html">Sistemas de Calidad</a></li>
					<li><a href="http://www.cedesko.com.mx/conferencia-ph.html">Conferencia Peter Hirshberg</a></li>
					<li><a href="http://www.cedesko.com.mx/consultores.html">Consultores</a></li>
					<li><a href="http://www.cedesko.com.mx/tutoriales.html">Tutoriales Sumtotal-Cedesko</a></li>
				</ul>

			<!--[if lte IE 6]></td></tr></table></a><![endif]-->
			</li>
			<li class="lv2-li"><a class="lv2-a" href="http://www.cedesko.com.mx/comites.html">Comites<!--[if gte IE 7]><!--></a><!--<![endif]-->
			<!--[if lte IE 6]><table><tr><td><![endif]-->
				<ul>
					<li><a href="http://www.cedesko.com.mx/comites.html">Comités en el Sistema Coca-Cola</a></li>
					<li><a href="http://www.cedesko.com.mx/cadena-suministro-bienvenida.html">Comité Cadena de Suministro</a></li>
					<li><a href="http://www.cedesko.com.mx/comite-proteccion-patrimonial-bienvenida.html">Comité de Protección Patrimonial</a></li>
					<li><a href="http://www.cedesko.com.mx/comite-recursos-humanos-bienvenida.html">Comité Recursos Humanos</a></li>
				</ul>

			<!--[if lte IE 6]></td></tr></table></a><![endif]-->
			</li>
			
            <li class="current"><a class="lv2-a" href="http://www.cedesko.com.mx/contacto.html">Contacto<!--[if gte IE 7]><!--></a><!--<![endif]-->
			<!--[if lte IE 6]><table><tr><td><![endif]-->
				<ul>
					<li><a href="http://www.cedesko.com.mx/directorio.html">Directorio</a></li>
					<li><a href="http://www.cedesko.com.mx/contacto.html">Comentarios</a></li>
				</ul>
			<!--[if lte IE 6]></td></tr></table></a><![endif]-->
			</li>
			
		</ul>
	<!--[if lte IE 6]></td></tr></table></a><![endif]-->
	</li>
</ul>
</div>

            </div>
            <div id="slide-pag-interna">
            
                <p>ACTIVACION DE CUENTA</p>
            
          </div>
        </div>
        
        
        <div id="contenedor-centro"><!--inicio contenedor-centro-->
        	<div id="contenido-principal" class="contacto"><!--inicio contenido-principal-->
           	  <h2>Cuenta Activada</h2><br />
              
            <p>
			<?=$RespuestaInsert ?><?php echo "<script language=Javascript>  setTimeout(\"location.href='http://www.cedesko.com.mx/index.html'\", 8000); </script>"; ?>
            </p>

         <div id="infoContacto">
         	<p>Tel. (55) 52 62 64 80<br />
            Fax. (55) 52 62 64 85</p>
            
            <p><span class="infoContactoBold">Direcci&oacute;n</span><br />
            Av. Ejercito Nacional #404 6to piso<br />
            Col. Chapultepec Morales<br />
            C.P. 11570 M&eacute;xico D.F.</p>

            <p><span class="infoContactoBold">Contacto Directo</span><br />
            Coordinaci&oacute;n de E-learning<br />
            52 62 64 85<br />
            Asistentes de Log&iacute;stica<br />
            52 62 64 85</p><br />

         </div>     
                	
        	</div>
            
            
      	
      <!--final contenido-principal-->
            
            
            <!--final lista-embotelladoras--><!--final contenido-secundario-->
            
            
            
          <div id="contenido-tercero"><!--inicio contenido-tercero-->
            </div><!--final contenido-tercero-->
      </div><!--final contenedor-centro-->
        
        
        <div id="contenedor-inferior"><!--inicio contenedor-inferior-->
        	<div class="footer">
            	<div class="direccion">
                	<p>Av. Ejercito Nacional No. 404 Piso 6<br />
					Chapultepec Morales, Miguel Hidalgo <br />
					11570 Mexico D.F.</p>
                </div>
                <div class="copyright">
                	<p>© 2010 Centro de Desarrollo del Sistema Coca-Cola<br />
					All Rights Reserved</p>
                    <p>Powered by <a href="http://www.medrenlogic.com.mx" target="_blank">Medrenlogic &copy;</a> </p>
                </div>
            </div>
      </div><!--final contenedor-inferior-->
    </div>
</div>



<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16665034-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</body>
</html>

<?php 

}
else { echo "<script language=Javascript> location.href=\"http://www.cedesko.com.mx/index.html\"; </script>"; }

?>