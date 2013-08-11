<h1>Trabajando consultas SELECT usando result array</h1>

<ul>
	<?php foreach ($datos as $dato) {
	?>
		<li>Nombre: <?php echo $dato["nombre"] ?></li>
		 <br />
            Correo : <?php echo $dato["correo"]?>
            <br />
            Teléfono : <?php echo $dato["tel"]?>
            <br />
            Fecha : <?php echo $dato["fecha"]?>
		<hr>
	<?php } ?>
</ul>