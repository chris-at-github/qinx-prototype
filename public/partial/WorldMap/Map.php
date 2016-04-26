<div class="world-map">
	<div class="world-map--tile-container">
		<?php for($y = 0; $y <= 3; $y++) { ?>
			<div class="world-map--tiles">
				<?php for($x = 0; $x <= 8; $x++) { ?>
					<div class="world-map--tile">

						<?php if($y === 2 && $x === 3) { ?>
							<?php \A4\Factory::get(\A4\Helper\LinkHelper::class)->render('colony', 'Colony #01', ['class' => 'world-map--tile-action']) ?>
						<?php } ?>

					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</div>