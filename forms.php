<?php include 'partials/start.php';?>
<?php // DO NOT TOUCH ANYTHING ABOVE THIS ; ?>


<h1 class="mb-8 text-5xl text-teal font-sans">Forms</h1>

<section class="mb-8">
  <h2 class="border-b">Login</h2>
  <?php include 'components/forms/c-login.php';?>

  <h3>Sample Code</h3>
  <pre><code class="html"><?php echo htmlspecialchars(file_get_contents('components/forms/c-login.php'), ENT_QUOTES); ?></code></pre>
</section>

<section class="mb-8">
  <h2 class="border-b">Selection</h2>
  <?php include 'components/forms/selection.php';?>

  <h3>Sample Code</h3>
  <pre><code class="html"><?php echo htmlspecialchars(file_get_contents('components/forms/selection.php'), ENT_QUOTES); ?></code></pre>
</section>


<?php // DO NOT TOUCH ANYTHING BELOW THIS ; ?>
<?php include 'partials/end.php';?>