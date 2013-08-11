<h1>Editar persona</h1>

<div class="agregar">
 	<a href="<?php echo base_url()?>crud" class="btn">Volver atras</a>
</div>

<?php
if ( $this->session->flashdata('ControllerMessage') != '' )
    {
?>
<div class="box-msg">
	<p><?php echo $this->session->flashdata('ControllerMessage'); ?></p>
</div>
<?php
}
?>

<?php
	echo validation_errors();

	$atributos = array('id' => 'form', 'name'=>'form');

	echo form_open_multipart(null,$atributos);
 ?>
	Nombre: <input type="text" name="nom" value="<?php echo $datos->nombre ?>">
	<br><br>
	Correo: <input type="text" name="correo" value="<?php echo $datos->correo ?>">
	<br><br>
	Teléfono: <input type="text" name="tel" value="<?php echo $datos->tel ?>">
	<hr>
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<input type="submit" value="Guardar">
<?php
	echo form_close();
 ?>