<?php include 'partials/start.php';?>
<?php // DO NOT TOUCH ANYTHING ABOVE THIS ; ?>


<h1 class="mb-8 text-5xl text-teal-dark font-sans">Buttons</h1>

<section class="mb-8">
  <h2 class="border-b text-teal">3D Button</h2>
  <?php include 'components/buttons/c-buttons.php';?>

  <h3>Sample Code</h3>
  <pre><code class="html"><?php echo htmlspecialchars(file_get_contents('components/buttons/c-buttons.php'), ENT_QUOTES); ?></code></pre>
</section>

<section class="mb-8">
  <h2 class="border-b text-teal">Ghost Button</h2>
  <?php include 'components/buttons/c-ghostbtn.php';?>

  <h3>Sample Code</h3>
  <pre><code class="html"><?php echo htmlspecialchars(file_get_contents('components/buttons/c-ghostbtn.php'), ENT_QUOTES); ?></code></pre>
</section>


<?php // DO NOT TOUCH ANYTHING BELOW THIS ; ?>
<?php include 'partials/end.php';?>
