<?php

$tituloPagina = 'Administrar';

$contenidoPrincipal = <<<EOS
<main>
	<article>
	<?php
		if (isset($_SESSION["esAdmin"]) && $_SESSION["esAdmin"]) {
	?>
		<h1>Consola de administración</h1>
		<p>Aquí estarían todos los controles de administración</p>
	<?php
		} else {
	?>
		<h1>Acceso denegado!</h1>
		<p>No tienes permisos suficientes para administrar la web.</p>
	<?php
		}
	?>
	</article>
</main>
EOS;

require __DIR__.'/includes/plantillas/plantilla.php';

