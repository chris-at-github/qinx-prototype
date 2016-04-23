<!doctype html>
<html class="no-js" lang="de" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>A4</title>

	<!-- meta -->
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<!-- /meta -->

	<!-- favicon -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="/css/screen.css" media="screen, projection, print"/>
	<!-- /css -->

</head>
<body>

	<div id="header">
		<div class="row">
			<div class="col-sm-10">
				<nav class="navigation" id="navigation-main">
					<ul class="clearfix">
						<li <?php if($app->getActivePage() === \A4\Factory::get(A4\Helper\UriHelper::class)->get('world')) { ?>class="active"<?php } ?>>
							<?php \A4\Factory::get(A4\Helper\LinkHelper::class)->render('world', 'World'); ?>
						</li>
						<li <?php if($app->getActivePage() === \A4\Factory::get(A4\Helper\UriHelper::class)->get('colony')) { ?>class="active"<?php } ?>>
							<?php \A4\Factory::get(A4\Helper\LinkHelper::class)->render('colony', 'Colony'); ?>
						</li>
						<li <?php if($app->getActivePage() === \A4\Factory::get(A4\Helper\UriHelper::class)->get('research')) { ?>class="active"<?php } ?>>
							<?php \A4\Factory::get(A4\Helper\LinkHelper::class)->render('research', 'Research'); ?>
						</li>
						<li <?php if($app->getActivePage() === \A4\Factory::get(A4\Helper\UriHelper::class)->get('diplomacy')) { ?>class="active"<?php } ?>>
							<?php \A4\Factory::get(A4\Helper\LinkHelper::class)->render('diplomacy', 'Diplomacy'); ?>
						</li>
					</ul>
				</nav>
			</div>

			<div class="col-sm-4 col-sm-right">
				<div class="dropdown" id="commander">
					<div class="dropdown--trigger" data-toggle="dropdown">Commander</div>
					<div class="dropdown--container">
						<div class="placeholder">
							<div class="placeholder--title">Commander</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="container">
	<div class="container--header">Header</div>

	<div class="row">
		<div class="col-sm-4">
			<div class="placeholder">
				<div class="placeholder--title">Settings</div>
			</div>
		</div>
	</div>
</div>