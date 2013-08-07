<h1>Formularios en Codeigniter</h1>
<?php
$atributos = array( 'id' => 'miformulario','name'=>'form');
//echo form_open(null, $atributos);
echo form_open_multipart(null,$atributos);
?>




Campo Oculto : <?php echo form_hidden('username', 'johndoe');?>
<hr />
Campo input text :
 <?php
 $js = 'onClick="alguna_funcion()"';
$datos = array(
              'name'        => 'nom',
              'id'          => 'nom',
              'maxlength'   => '100',
            );

echo form_input($datos,'',$js);
?>
<hr />
Campo input password :
 <?php
$datos = array(
              'name'        => 'pass',
              'type'        =>'password',
              'id'          => 'pass',
              'maxlength'   => '100',
            );

echo form_input($datos,'');
?>
<hr />
Campo input file :
 <?php
$datos = array(
              'name'        => 'archivo',
              'type'        =>'file',
              'id'          => 'file'
            );

echo form_input($datos,'');
?>
<hr />
Campo textarea :
 <?php
$datos = array(
              'name'        => 'descripcion',
              'type'        =>'textarea',
              'id'          => 'textarea',
              'rows'        =>'5',
              'cols'        =>'30'
            );

echo form_textarea($datos,'');
?>
<hr />
Campo de tipo Select :

<select name="paises">
    <option value="0">Seleccione su país</option>
    <option value="chile">Chile</option>
    <option value="peru">Perú</option>
    <option value="colombia">Colombia</option>
    <option value="venezuela">Venezuela</option>
</select>
<hr />
<input type="submit" value="Enviar" title="Enviar" />
</form>