<div class="error">
    <div>
	    <h1>404</h1>
	    <?php if($idm == 'es') { ?>
		    <h2>Página no encontrada</h2>
		    <div class="error-content">
		    <p>La página solicitada no pudo ser encontrada.</p>
		    <p><a href="/"><span>Volver a la página de inicio</span></a></p>
		<?php } elseif($idm == 'ca') { ?>
			<h2>Article no trobat</h2>
		    <div class="error-content">
		    <p>La pàgina sol·licitada no es troba.</p>
		    <p><a href="/"><span>Tornar a la pàgina d'inici</span></a></p>
		<?php } else { ?> 
			<h2>Article not found</h2>
		    <div class="error-content">
		    <p>The page you requested cannot be found.</p>
		    <p><a href="/"><span>Return to the Homepage</span></a></p>
		<?php } ?>    
    </div>
</div>

