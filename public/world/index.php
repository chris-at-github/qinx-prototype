<?php $partial->render('Header'); ?>

<div class="container">
	<div class="container--header">World Map</div>

	<div class="row world-map">
		<div class="col-sm-10">
			<div id="world-map--container" class="placeholder">
				<span class="placeholder--title">World Map</span>
			</div>
		</div>
		<div class="col-sm-6">
			<a href="<?php echo \A4\Helper\UriHelper::get('colony'); ?>" class="placeholder world-map--tile">
				<span class="placeholder--title">Colony #01</span>
			</a>
			<a href="#" class="placeholder world-map--tile">
				<span class="placeholder--title">Resource #01</span>
			</a>
			<a href="#" class="placeholder world-map--tile">
				<span class="placeholder--title">Resource #02</span>
			</a>
		</div>
	</div>
</div>

<div class="container">
	<div class="container--header">World</div>

	<div class="row">
		<div class="col-sm-4">
			<div class="placeholder">
				<div class="placeholder--title">Units</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="placeholder">
				<div class="placeholder--title">Trade</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="placeholder">
				<div class="placeholder--title">Diplomacy</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="placeholder">
				<div class="placeholder--title">Players</div>
			</div>
		</div>
	</div>
</div>

<?php $partial->render('Footer'); ?>