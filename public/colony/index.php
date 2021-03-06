<?php $partial->render('Header'); ?>

	<div class="body--header colony--header">
		<div class="body--header-title">
			<nav class="colony--pager pager">
				<ul>
					<li class="colony--pager-previous pager--previous"><a href="#01"><span class="icon icon-chevron-left"></span></a>
					</li>
					<li class="colony--pager-current pager--current">Colony #01</li>
					<li class="colony--pager-next pager--next"><a href="#01"><span class="icon icon-chevron-right"></span></a>
					</li>
				</ul>
			</nav>
		</div>
	</div>

	<div class="body--container">
		<div class="row">
			<div class="col-sm-12">

				<div class="placeholder">
					<div class="placeholder--title">Worker</div>
				</div>

			</div>
			<div class="col-sm-12">
				<div class="container">
					<header class="container--header">Resources</header>

					<div class="row">
						<div class="col-sm-8">
							<div class="resource">
								<div class="resource--unit">789</div>
								<div class="resource--header">
									<div class="resource--header-name">WoodResource</div>
									<div class="resource--header-namespace">\A4\Resource\WoodResource</div>
								</div>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="resource">
								<div class="resource--unit">156</div>
								<div class="resource--header">
									<div class="resource--header-name">StoneResource</div>
									<div class="resource--header-namespace">\A4\Resource\StoneResource</div>
								</div>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="resource">
								<div class="resource--unit">341</div>
								<div class="resource--header">
									<div class="resource--header-name">WaterResource</div>
									<div class="resource--header-namespace">\A4\Resource\WaterResource</div>
								</div>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="resource">
								<div class="resource--unit">19</div>
								<div class="resource--header">
									<div class="resource--header-name">LeafResource</div>
									<div class="resource--header-namespace">\A4\Resource\LeafResource</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-sm-12">

				<div class="container">
					<header class="container--header">Buildings</header>

					<?php

						/* @var \A4\Map\Map $oMap */
						$oMap = \A4\Factory::get(\A4\Map\Map::class)
							->setSize(12, 5)
							->initializeTiles();

						/* @var \A4\Map\TileObject $oTileObject */
						$oTileObject = \A4\Factory::get(\A4\Map\TileObject::class)
							->setName('EntryBuilding')
							->setNamespace('\A4\Building\EntryBuilding');
						$oMap->getTile('617abeba7b98ba3ddb992d1cfea91617')->addObject($oTileObject);

						$oMap->render();
					?>
				</div>
			</div>
		</div>
	</div>

<?php $partial->render('Footer'); ?>