<?php

	/* @var \A4\Event\EventDispatcher $oEventDispatcher */
	$oEventDispatcher = \A4\Factory::get(\A4\Event\EventDispatcher::class);
	$oEventDispatcher
		->addEvent(\A4\Event\BeforeTurnEvent::class)
		->addEvent(\A4\Event\AfterTurnEvent::class);

?>
<?php $partial->render('Header', ['bDisplayHeader' => false]); ?>

	<div class="body--container">

		<div class="row">
			<div class="col-sm-8">
				<div class="container">
					<form action="<?php \A4\Factory::get(A4\Helper\UriHelper::class)->get('event'); ?>" method="get">

						<div class="form-item">
							<label class="form-label" for="event">Events</label>
							<select class="form-field" id="event" name="event">
								<option value="">-</option>
								<?php foreach($oEventDispatcher->getEvents() as $sEvent) { ?>
									<option value="<?php echo $sEvent; ?>"><?php echo \A4\Helper\ClassHelper::toString($sEvent); ?> [<?php echo $sEvent; ?>]</option>
								<?php } ?>
							</select>
						</div>

						<div class="form-actions">
							<button class="button button-submit" name="fire">Fire</button>
						</div>

					</form>
				</div>
			</div>
		</div>

	</div>

<?php $partial->render('Footer', ['bDisplayFooter' => false]); ?>