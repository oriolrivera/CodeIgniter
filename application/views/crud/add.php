<h1>Crear persona</h1>

<div class="agregar">
 	<a href="<?php echo base_url()?>crud" class="btn">Volver atras</a>
</div>

<?php
	echo validation_errors();

	$atributos = array('id' => 'form', 'name'=>'form');

	echo form_open_multipart(null,$atributos);
 ?>
	Nombre: <input type="text" name="nom" value="<?php echo set_value("nom") ?>">
	<br><br>
	Correo: <input type="text" name="correo" value="<?php echo set_value("correo") ?>">
	<br><br>
	Teléfono: <input type="text" name="tel" value="<?php echo set_value("tel") ?>">
	<hr>
	<input type="submit" value="Guardar">
<?php
	echo form_close();
 ?>