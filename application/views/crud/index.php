<h1>Crud gestor personas</h1>

<?php
	if ($this->session->flashdata('ControllerMessage') != '') {
		?>
		<div class="box-msg">
			<p><?php echo $this->session->flashdata('ControllerMessage'); ?></p>
		</div>
		<?php
	}
 ?>

<div class="agregar">
 	<a href="<?php echo base_url()?>crud/add" class="btn">Agregar</a>
</div>

<table id="mytable" cellpadding="0" cellspacing="0" border="0">
	<thead>
		<tr>
		    <th>ID</th>
		    <th>Nombre</th>
		    <th>Correo</th>
		    <th>Teléfono</th>
		    <th>Fecha</th>
		    <th>Acciones</th>
	   </tr>
   </thead>
   <tbody>
   <?php
   foreach($datos as $dato)
   {
        ?>
    <tr>
        <td><?php echo $dato->id?></td>
        <td><?php echo $dato->nombre?></td>
        <td><?php echo $dato->correo?></td>
        <td><?php echo $dato->tel?></td>
        <td><?php echo $dato->fecha?></td>
        <td>
            <a href="<?php echo base_url(); ?>crud/edit/<?php echo $dato->id?>">Editar</a> || <a href="">Eliminar</a>
        </td>
    </tr>
        <?php
   }
   ?>
   </tbody>
</table>