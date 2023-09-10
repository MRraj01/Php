<?php
include 'libs/load.php';
?>

<?php
  load_template('_head');
?>

<body>
	<?php
  load_template('_header');
?>
	<main>
		<section class="py-5 text-center container">
			<?php
  load_template('_calll');
?>
		</section>
		<?php
load_template('_Game');
?>
	</main>
	<?php
load_template('_footer');
?>
	<script src="/app/assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
<!--hello -->
<!-- first we need to create load php-->