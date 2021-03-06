<?php $partial->render('Header'); ?>

<div class="body--header">
	<header class="body--header-title">World</header>
</div>

<div class="body--container">

	<div class="row">
		<div class="col-sm-14">
			<?php $partial->render('WorldMap/Map'); ?>
		</div>

		<div class="col-sm-10">
			<div class="tabs">

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

</div>

<?php $partial->render('Footer'); ?>