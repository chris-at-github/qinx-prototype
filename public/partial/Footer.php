	<?php if(isset($bDisplayFooter) === false || $bDisplayFooter === true) { ?>

		<div class="remodal modal modal-large" data-remodal-id="setting">
			<div class="modal--header">
				<button data-remodal-action="close" class="modal--close"></button>
				<header class="modal--title">Settings</header>
			</div>
			<div class="modal--body">
				<div class="placeholder">
					<div class="placeholder--title">Game Setting</div>
				</div>

				<div class="placeholder">
					<div class="placeholder--title">User Setting</div>
				</div>
			</div>
		</div>

		<?php $partial->render('Building/EntryBuilding'); ?>

		<div class="page--footer">
			<div class="row">
				<div class="col-sm-6 col-sm-right">

					<div class="turn clearfix">
						<div class="turn--title">Turn: <strong>17</strong></div>
						<div class="turn--action"><button class="button">Next turn</button></div>
					</div>

				</div>
			</div>
		</div>

	<?php } ?>

	<script type="text/javascript" src="/js/a4.package.js"></script>

</body>
</html>