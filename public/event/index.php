<?php

	/* @var \A4\Event\EventDispatcher $oEventDispatcher */
	$oEventDispatcher = \A4\Factory::get(\A4\Event\EventDispatcher::class);
	$oEventDispatcher
		->addEvent(\A4\Event\BeforeTurnEvent::class)
		->addEvent(\A4\Event\AfterTurnEvent::class);

	if(\A4\Factory::get(\A4\Request::class)->get('event') === 'fire') {

	}

?>
<?php $partial->render('Header', ['bDisplayHeader' => false]); ?>

	<div class="body--container">

		<div class="row">
			<div class="col-sm-8">
				<div class="container">
					<form action="<?php \A4\Factory::get(A4\Helper\UriHelper::class)->get('event'); ?>" method="get">

						<div class="form-item">
							<label class="form-label" for="event">Event</label>
							<?php
								\A4\Factory::get(\A4\ViewHelper\SelectViewHelper::class)->render(
									'event',
									$oEventDispatcher->getEvents(),
									\A4\Factory::get(\A4\Request::class)->get('event'),
									['class' => 'form-field', 'id' => 'event'],
									function($sKey, $sValue) {
										return [$sValue, \A4\Helper\ObjectHelper::toString($sValue) . ' [' . $sValue . ']'];
									},
									['' => '-']
								);
							?>
						</div>

						<div class="form-actions">
							<button class="button button-submit" name="action" value="fire">Fire</button>
						</div>

					</form>
				</div>
			</div>
		</div>

	</div>

<?php $partial->render('Footer', ['bDisplayFooter' => false]); ?>