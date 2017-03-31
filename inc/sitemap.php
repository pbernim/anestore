<?php

session_start();

$languages = array('es'=>'ESP', 'ca'=>'CAT', 'en'=>'ENG');

// Auto select browser language
if(!isset($_SESSION["idm"])) {
	$browser_lang =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
	if (in_array($browser_lang, array_keys($languages))) {
		$_SESSION["idm"] = $browser_lang;
	} else {
		$_SESSION["idm"] = 'es';
	}	
}

$web_site_name = "Anestore Group S.L.";
$idm = $_SESSION["idm"];

$meta_description =  array('es'=>'Ane Store importador y distribuidor de papeles y sobres especiales', 
						'ca'=>'Ane Store importador i distribuïdor de papers i sobres especials', 
						'en'=>'Ane Store importer and distributor of specialty papers and envelopes');
$meta_keywords =  array('es'=>'papeles especiales, colorplan, papeles de colores, gf Smith, gofrados, gramajes, fabricación de sobres', 
					'ca'=>'papers especials, colorplan, papers de colors, gf Smith, gofrats, gramatges, fabricació de sobres', 
					'en'=>'specialty papers, Colorplan, colored paper, gf Smith, embossings, weights, manufacture of envelopes');
$meta_author = 'Piero Berni';


$home_page =  array('es'=>'inicio', 'ca'=>'inici', 'en'=>'home');

$nav = array(	
			'es'=>array( 
					array('name'=>'Inicio', 'href'=>'/'),
					array('name'=>'Productos', 'href'=>'productos'),
					array('name'=>'Servicios', 'href'=>'servicios'),
					array('name'=>'Newsletter', 'href'=>'newsletter')
					),
			'ca'=> array( 
					array('name'=>'Inici', 'href'=>'/'),
					array('name'=>'Productes', 'href'=>'productes'),
					array('name'=>'Serveis', 'href'=>'serveis'),
					array('name'=>'Newsletter', 'href'=>'newsletter')
					),
			'en'=> array( 
					array('name'=>'Home', 'href'=>'/'),
					array('name'=>'Products', 'href'=>'products'),
					array('name'=>'Services', 'href'=>'services'),
					array('name'=>'Newsletter', 'href'=>'newsletter')
					)
);

$footer =  array('es'=>'Copyright © 2017 por Anestore. Todos los derechos reservados', 
			'ca'=>'Copyright © 2017 per Anestore. Tots els drets reservats', 
			'en'=>'Copyright © 2017 by Anestore. All rights reserved');

$slug = isset($_GET['p']) ? $_GET['p']: $home_page[$idm];

switch ($slug) {
	
	// Language selector
	case 'es':
	case 'ca':
	case 'en':
		$_SESSION["idm"] = $slug;
		header("Location: /");
		die();
		break;
		
	case 'inicio':
	case 'inici':
	case 'home':
		$title = array('es' => $web_site_name, 'ca'=>$web_site_name, 'en'=>$web_site_name);
		$content = $slug;
		break;

	case 'productos':
	case 'productes':
	case 'products':
		$title = array('es' => 'Anestore - Productos', 'ca'=>'Anestore - Productes', 'en'=>'Anestore - Products');;
		$content = $slug;
		break;

	case 'servicios':
	case 'serveis':
	case 'services':
		$title = array('es' => 'Anestore - Servicios', 'ca'=>'Anestore - Serveis', 'en'=>'Anestore - Services');;
		$content = $slug;
		break;		
	
	case 'newsletter':
		$title = array('es' => 'Anestore - Newsletter', 'ca'=>'Anestore - Newsletter', 'en'=>'Anestore - Newsletter');;
		$content = $slug;
		break;

	default:
		$title = array('es' => 'Anestore - Error 404', 'ca'=>'Anestore - Error 404', 'en'=>'Anestore - Error 404');;
		$content = '404';
		break;
}
