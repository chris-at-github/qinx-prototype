<?php $partial->render('Header'); ?>

<div class="row">
	<div class="col-sm-10">
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
	</div>
	<div class="col-sm-6">
		<div class="container tabs">

			<nav class="tabs--navigation">
				<ul>
					<li class="active">
						<a href="#units" data-toggle="tab">Units</a>
					</li>
					<li>
						<a href="#trade" data-toggle="tab">Trade</a>
					</li>
					<li>
						<a href="#expeditions" data-toggle="tab">Expeditions</a>
					</li>
					<li>
						<a href="#players" data-toggle="tab">Players</a>
					</li>
				</ul>
			</nav>

			<div class="tabs--content">
				<div class="tabs--item active" id="units">
					<div class="placeholder">
						<div class="placeholder--title">Units</div>
					</div>
				</div>
				<div class="tabs--item" id="trade">
					<div class="placeholder">
						<div class="placeholder--title">Trade</div>
					</div>
				</div>
				<div class="tabs--item" id="expeditions">
					<div class="placeholder">
						<div class="placeholder--title">Expeditions</div>
					</div>
				</div>
				<div class="tabs--item" id="players">
					<div class="placeholder">
						<div class="placeholder--title">Players</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $partial->render('Footer'); ?>