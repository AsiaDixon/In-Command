<?php include 'partials/start.php';?>
<?php // DO NOT TOUCH ANYTHING ABOVE THIS ; ?>


<h1 class="mb-8 text-5xl text-teal-dark font-sans">Footer</h1>

<section class="mb-8">
  <h2 class="border-b text-teal"></h2>
  <?php include 'components/footers/c-footer.php';?>

  <h3>Sample Code</h3>
  <pre><code class="html"><?php echo htmlspecialchars(file_get_contents('components/footers/c-footer.php'), ENT_QUOTES); ?></code></pre>
</section>




<?php // DO NOT TOUCH ANYTHING BELOW THIS ; ?>
<?php include 'partials/end.php';?>