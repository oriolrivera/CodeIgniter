<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $this->layout->getTitle(); ?></title>
		<meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>">
		<meta name="keywords" content="<?php echo $this->layout->getKeywords(); ?>" />
		<link rel="stylesheet" href="<?php echo base_url()?>public/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url()?>public/css/menu.css">
		     <!--*************auxiliares*****************-->

			<?php echo $this->layout->css; ?>

			<?php echo $this->layout->js; ?>

			<!--**********fin auxiliares*****************-->

	</head>
	<body>
		<div class="menu">
			<ul class="mi-menu">
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li><a href="<?php echo base_url(); ?>formulario">Formulario</a></li>
				<li><a href="<?php echo base_url(); ?>formulario/add">Valida Formualario</a></li>

					<li>
						<a href="#">Base de datos</a>
						<ul>
							<li><a href="">prueba</a></li>
							<li><a href="">prueba</a></li>
							<li><a href="">prueba</a></li>
						</ul>
					</li>

			</ul>
		</div>

		<?php echo $content_for_layout; ?>

	</body>
</html>