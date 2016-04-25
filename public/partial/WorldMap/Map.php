<div class="world-map">
	<?php for($y = 0; $y <= 3; $y++) {?>
		<div class="world-map--tiles">
			<?php for($x = 0; $x <= 4; $x++) {?>
				<div class="world-map--tile">

					<?php if($y === 2 && $x === 3) { ?>
						<a href="#" class="world-map--tile-action">Colony #01</a>
						<a href="#" class="world-map--tile-action">Unit #01</a>
						<a href="#" class="world-map--tile-action">Unit #02</a>
						<a href="#" class="world-map--tile-action">Resource #01</a>
						<a href="#" class="world-map--tile-action">Resource #03</a>
						<a href="#" class="world-map--tile-action">Resource #17</a>
					<?php } ?>

				</div>
			<?php } ?>
		</div>
	<?php } ?>
</div>