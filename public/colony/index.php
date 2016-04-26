<?php $partial->render('Header'); ?>

	<div class="colony--header">
		<nav class="colony--pager pager pager-center">
			<ul>
				<li class="colony--pager-previous pager--previous"><a href="#01"><span class="icon icon-chevron-left"></span></a></li>
				<li class="colony--pager-current pager--current">Colony #01</li>
				<li class="colony--pager-next pager--next"><a href="#01"><span class="icon icon-chevron-right"></span></a></li>
			</ul>
		</nav>
	</div>

<div class="container">
	<header class="container--header">Colony</header>

	<div class="row">
		<div class="col-sm-8">

			<div class="placeholder">
				<div class="placeholder--title">Buildings</div>
			</div>

			<div class="placeholder">
				<div class="placeholder--title">Resources</div>
			</div>

		</div>
		<div class="col-sm-8">

			<div class="placeholder">
				<div class="placeholder--title">Worker</div>
			</div>

		</div>
	</div>
</div>

<?php $partial->render('Footer'); ?>