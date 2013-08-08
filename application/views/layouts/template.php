<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $this->layout->getTitle(); ?></title>
		<meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>">
		<meta name="keywords" content="<?php echo $this->layout->getKeywords(); ?>" />
		<link rel="stylesheet" href="<?php echo base_url()?>public/css/style.css">
		     <!--*************auxiliares*****************-->

			<?php echo $this->layout->css; ?>

			<?php echo $this->layout->js; ?>

			<!--**********fin auxiliares*****************-->

	</head>
	<body>
		<div class="menu">
			<ul class="nav">
				<a href="<?php echo base_url(); ?>"><li>Home</li></a>
				<a href="<?php echo base_url(); ?>formulario"><li>Formulario</li></a>
				<a href="<?php echo base_url(); ?>formulario/add"><li>Valida Formualario</li></a>
			</ul>
		</div>

		<?php echo $content_for_layout; ?>

	</body>
</html>