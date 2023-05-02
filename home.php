<?php
include 'libs/load.php';



?>

<?load_template('_head');?>

<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<body>
	<?load_template('_header');?>

	<?load_template('_sidebaar');?>
	</header>
	<div class="col-md-5 col-lg-4 order-md-last">
		<h4 class="d-flex justify-content-between align-items-center mb-3">
			<span class="text-primary">Your cart</span>
			<span class="badge bg-primary rounded-pill">3</span>
		</h4>
		<ul class="list-group mb-3">
			<li class="list-group-item d-flex justify-content-between lh-sm">
				<div>
					<h6 class="my-0">Product name</h6>
					<small class="text-body-secondary">Brief description</small>
				</div>
				<span class="text-body-secondary">$12</span>
			</li>
			<li class="list-group-item d-flex justify-content-between lh-sm">
				<div>
					<h6 class="my-0">Second product</h6>
					<small class="text-body-secondary">Brief description</small>
				</div>
				<span class="text-body-secondary">$8</span>
			</li>
			<li class="list-group-item d-flex justify-content-between lh-sm">
				<div>
					<h6 class="my-0">Third item</h6>
					<small class="text-body-secondary">Brief description</small>
				</div>
				<span class="text-body-secondary">$5</span>
			</li>
			<li class="list-group-item d-flex justify-content-between bg-body-tertiary">
				<div class="text-success">
					<h6 class="my-0">Promo code</h6>
					<small>EXAMPLECODE</small>
				</div>
				<span class="text-success">−$5</span>
			</li>
			<li class="list-group-item d-flex justify-content-between">
				<span>Total (USD)</span>
				<strong>$20</strong>
			</li>
		</ul>

		<form class="card p-2">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Promo code">
				<button type="submit" class="btn btn-secondary">Redeem</button>
			</div>
		</form>
	</div>
	<?load_template('_footer');?>
	<script src="/app/assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>