<!DOCTYPE html>
<html lang="<?php echo $idm; ?>">
<head>
	<meta charset="UTF-8">
	<title><?php printf($title[$idm]); ?></title>
	<meta name="description" content="<?php echo htmlentities($meta_description[$idm]); ?>">
	<meta name="keywords" content="<?php echo htmlentities($meta_keywords[$idm]); ?>">
  	<meta name="author" content="<?php echo htmlentities($meta_author); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="robots" content="index,follow" />
  	<meta name="google-site-verification" content="ddEVgA18PXjcawOCkg9g8XtVhpfzQh9m8snrcqpRStI" />
  	<link rel="stylesheet" href="css/reset.css">	
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="sitemap" type="application/xml" title="Sitemap" href="sitemap.xml" />
	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-60172424-1', 'auto');
	  ga('send', 'pageview');
	</script>		
</head>
<body>
	<header>
		<h1>
			<a href="/">
				<img src="img/banner_<?php echo $idm; ?>.png" alt="<?php echo htmlentities($web_site_name); ?>" />
			</a>
		</h1>
		<nav>
			<ul id="main-menu">
			<?php foreach ($nav[$idm] as $item) { ?>
				<li<?php if($item['href'] == $slug) {echo ' class="Selected"'; }?>>
					<a href="<?php echo $item['href']; ?>"><?php echo $item['name']; ?></a>
				</li>
			<?php } ?>	
			</ul>
			<ul id="idm-menu">
			<?php foreach ($languages as $k => $v) { ?>
				<li<?php if($k == $idm) {echo ' class="Selected"'; }?>>
					<a href="<?php echo $k; ?>"><?php echo $v; ?></a>
				</li>
			<?php } ?>
			</ul>
		</nav>
	</header>
	<section id="content">
	