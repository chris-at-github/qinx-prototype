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

	<?php if(isset($bDisplayHeader) === false || $bDisplayHeader === true) { ?>

		<div class="page--header">
			<div class="row">
				<div class="col-sm-12">
					<nav class="navigation navigation-horizontal" id="navigation-main">
						<ul class="clearfix">
							<li <?php if($app->getActivePage() === \A4\Factory::get(A4\Helper\UriHelper::class)->get('world')) { ?>class="active"<?php } ?>>
								<?php \A4\Factory::get(A4\ViewHelper\LinkViewHelper::class)->render('world', 'World'); ?>
							</li>
							<li <?php if($app->getActivePage() === \A4\Factory::get(A4\Helper\UriHelper::class)->get('colony')) { ?>class="active"<?php } ?>>
								<?php \A4\Factory::get(A4\ViewHelper\LinkViewHelper::class)->render('colony', 'Colony'); ?>
							</li>
							<li <?php if($app->getActivePage() === \A4\Factory::get(A4\Helper\UriHelper::class)->get('research')) { ?>class="active"<?php } ?>>
								<?php \A4\Factory::get(A4\ViewHelper\LinkViewHelper::class)->render('research', 'Research'); ?>
							</li>
							<li <?php if($app->getActivePage() === \A4\Factory::get(A4\Helper\UriHelper::class)->get('diplomacy')) { ?>class="active"<?php } ?>>
								<?php \A4\Factory::get(A4\ViewHelper\LinkViewHelper::class)->render('diplomacy', 'Diplomacy'); ?>
							</li>
						</ul>
					</nav>
				</div>

				<div class="col-sm-6 col-sm-right">
					<nav class="navigation navigation-horizontal navigation-right">
						<ul>
							<li class="dropdown" id="commander">
								<div class="dropdown--trigger" data-toggle="dropdown">Commander</div>
								<div class="dropdown--container">
									<div class="placeholder">
										<div class="placeholder--title">Commander</div>
									</div>
								</div>
							</li>
							<li>
								<div class="navigation--item" data-remodal-target="setting">Settings</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

	<?php } ?>