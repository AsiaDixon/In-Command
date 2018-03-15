<?php include 'partials/start.php';?>
<?php // DO NOT TOUCH ANYTHING ABOVE THIS ; ?>


<h1 class="mb-8 text-5xl text-teal-dark font-sans">Media Objects</h1>

<section class="mb-8">
  <h2 class="border-b text-teal">Stacked Object</h2>
  <?php include 'components/mediaobjects/c-mobject.php';?>

  <h3>Sample Code</h3>
  <pre><code class="html"><?php echo htmlspecialchars(file_get_contents('components/mediaobjects/c-mobjects.php'), ENT_QUOTES); ?></code></pre>
</section>




<?php // DO NOT TOUCH ANYTHING BELOW THIS ; ?>
<?php include 'partials/end.php';?><div class="flex flex-wrap -mx-2">
	<div class="w-1/6 px-2">
		<img src="http://via.placeholder.com/128x128" alt="name of image">
	</div>
	<div class="w-5/6 px-2">
		<h1 class="text"></h1>
	</div>
</div>