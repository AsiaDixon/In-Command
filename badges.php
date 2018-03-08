<?php include 'partials/start.php';?>
<?php // DO NOT TOUCH ANYTHING ABOVE THIS ; ?>


<h1 class="mb-8 text-5xl text-teal font-sans">Badges</h1>

<section class="mb-8">
  <h2 class="border-b">Rounded Badge</h2>
  <?php include 'components/badges/c-badge.php';?>

  <h3>Sample Code</h3>
  <pre><code class="html"><?php echo htmlspecialchars(file_get_contents('components/badges/c-badge.php'), ENT_QUOTES); ?></code></pre>
</section>

<section class="mb-8">
  <h2 class="border-b"> Ghost Badge</h2>
  <?php include 'components/badges/c-ghostbadge.php';?>

  <h3>Sample Code</h3>
  <pre><code class="html"><?php echo htmlspecialchars(file_get_contents('components/badges/c-ghostbadge.php'), ENT_QUOTES); ?></code></pre>
</section>


<?php // DO NOT TOUCH ANYTHING BELOW THIS ; ?>
<?php include 'partials/end.php';?>