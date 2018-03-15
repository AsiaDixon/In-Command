<?php include 'partials/start.php';?>
<?php // DO NOT TOUCH ANYTHING ABOVE THIS ; ?>


<h1 class="mb-8 text-5xl text-teal-dark font-sans">Global Navigation</h1>

<section class="mb-8">
  <h2 class="border-b text-teal">Horizontal Nav</h2>
  <?php include 'components/globenav/c-globe.php';?>

  <h3>Sample Code</h3>
  <pre><code class="html"><?php echo htmlspecialchars(file_get_contents('components/globenav/c-globe.php'), ENT_QUOTES); ?></code></pre>
</section>




<?php // DO NOT TOUCH ANYTHING BELOW THIS ; ?>
<?php include 'partials/end.php';?>