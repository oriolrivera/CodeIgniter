<h1>Validando Formulario en Codeigniter</h1>

<?php
$atributos = array( 'id' => 'miformulario','name'=>'form');
//echo form_open(null, $atributos);
echo form_open_multipart(null,$atributos);
?>
<?php echo validation_errors(); ?>
<hr />
Nombre : <input type="text" name="nom" value="<?php echo set_value("nom")?>" />
<br />
Teléfono : <input type="text" name="tel" value="<?php echo set_value("tel")?>" />
<br />
E-Mail : <input type="text" name="correo" value="<?php echo set_value("correo")?>" />
<br />
Descripción : <textarea name="des" cols="30" rows="5"><?php echo set_value("des")?></textarea>
<br />
Campo de tipo Select :

<select name="paises">
    <option value="0">Seleccione un país</option>
    <option value="chile">Chile</option>
    <option value="peru">Perú</option>
    <option value="colombia">Colombia</option>
    <option value="venezuela">Venezuela</option>
</select>
<hr />
<input type="submit" value="Enviar" title="Enviar" />
</form>