<?php include 'partials/start.php';?>
<?php // DO NOT TOUCH ANYTHING ABOVE THIS ; ?>


<h1 class="mb-8 text-5xl text-teal-dark font-sans">Alerts</h1>
	<p class="font-light text-sm font-Cantarell" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora neque fugiat est perferendis dolore repellendus suscipit voluptatibus officiis, explicabo maxime! Commodi, tempore alias nulla inventore quia! At nesciunt porro recusandae!</p>
<section class="mb-8">
  <h2 class="border-b text-teal">Modern Alert</h2>
  <?php include 'components/alerts/c-alert.php';?>

  <h3>Sample Code</h3>
  <pre><code class="html"><?php echo htmlspecialchars(file_get_contents('components/alerts/c-alert.php'), ENT_QUOTES); ?></code></pre>
</section>

<section class="mb-8">
  <h2 class="border-b text-teal">Block Alert</h2>
  <?php include 'components/alerts/c-badalert.php';?>

  <h3>Sample Code</h3>
  <pre><code class="html"><?php echo htmlspecialchars(file_get_contents('components/alerts/c-badalert.php'), ENT_QUOTES); ?></code></pre>
</section>


<?php // DO NOT TOUCH ANYTHING BELOW THIS ; ?>
<?php include 'partials/end.php';?>
