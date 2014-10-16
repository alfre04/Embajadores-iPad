<div id="content" class="container_12">

  <div id="contactWrapper" class="grid_12">
	
	<div id="text" class="grid_12 alpha ">
<?php if(isset($hasError)) { //If errors are found ?>
			<p class="error">Por favor, comprueba que todos los campos estén completos y prueba de nuevo. Gracias!</p>
		<?php } ?>

		<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
			<div class="success">
				<p><strong>Correo enviado correctamente</strong></p>
				<p>Gracias por usar el formulario de contacto <strong><?php echo $name;?></strong>! Nos pondremos en contacto contigo lo antes posible.</p>
			</div>
		<?php } ?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
			<div class="stage ">
				<label for="name"><strong>Nombre: <em>*</em></strong></label>
				<input type="text" name="contactname" id="contactname" value="" class="required" role="input" aria-required="true" />
			</div>

			<div class="stage ">
				<label for="email"><strong>Email: <em>*</em></strong></label>
				<input type="text" name="email" id="email" value="" class="required email" role="input" aria-required="true" />
			</div>

			<div class="stage ">
				<label for="subject"><strong>Asunto: <em>*</em></strong></label>
				<input type="text" name="subject" id="subject" value="" class="required" role="input" aria-required="true" />
			</div>

			<div class="stage ">
				<label for="message"><strong>Mensaje: <em>*</em></strong></label>
				<textarea rows="8" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
			</div>
								
			<p class="requiredNote"><em>*</em> Campos obligatorios.</p>
			
			<input type="submit" value="Send Message" name="submit" id="submitButton" title="Click here to submit your message!" />
		</form>
<p>&nbsp;</p>
</div>
	
      </div>
    </div>