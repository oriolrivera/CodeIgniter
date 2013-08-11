<h1>Crud gestor personas</h1>
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
            <a href="">Editar</a> || <a href="">Eliminar</a>
        </td>
    </tr>
        <?php
   }
   ?>
   </tbody>
</table>