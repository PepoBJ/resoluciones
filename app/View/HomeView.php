<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<?=$helper->favicon()?>
	<?=$helper->responsive()?>

	<?=$helper->css('ed-grid');?>
	<?=$helper->css('cabezera-footer');?>
	<?=$helper->css('index');?>
	<?=$helper->css('home');?>
</head>
<body>
	<header>
		<?= $this->view('Template/Cabezera');?>
	</header>

	<nav>
		<div class="ed-container" id="menu">
			<div class="ed-item base-20 cross-end main-center centrar-texto">
				<a href="<?=$helper->url('usuario','editar')?>" class="menu__item icon-usuario espacio menu__usuario"><?=explode(' ', $usuario->getNombre())[0]?></a>
			</div>
			<div class="ed-item base-20 cross-end main-center centrar-texto">
				<a href="<?=$helper->url('TipoResolucion','index')?>" class="menu__item menu__tipo__resolucion">Tipo Resolucion</a>
			</div>
			<div class="ed-item base-20 cross-end main-center centrar-texto">
				<a href="<?=$helper->url('Area','index')?>" class="menu__item menu__area">Area</a>
			</div>
			<div class="ed-item base-20 cross-end main-center centrar-texto">
				<a href="<?=$helper->url('Resolucion','index')?>" class="menu__item menu__resolucion">Resoluciones</a>
			</div>
			<div class="ed-item base-20 cross-end main-center centrar-texto">
				<a href="<?=$helper->url('index','logout')?>" class="icon-cerrar espacio menu__item menu__salir">Salir</a>
			</div>
		</div>
	</nav>
	
	<section>
		<div class="ed-container" id="cuerpo">
			<div class="ed-item main-center cross-center">
				<h1>Bienvenido <?= $usuario->getNombre()?>, Al sistema de Seguimiento de Resoluciones</h1>
			</div>
		</div>
	</section>

	<footer>
		<?= $this->view('Template/Footer', $datos_template);?>
	</footer>

</body>
</html>