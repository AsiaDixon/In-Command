<?php


$nav_list = [
	'',
	'alerts',
	'buttons',
	'cards',
	'typography'
];

sort($nav_list);

function makeNav($the_navs) {

	echo '<nav>';
       echo '<ul class="verticalAlign list-reset text-2xl">';
			foreach($the_navs as $nav) {
				echo '<li><a class="nav-link" href="'.$nav.'.php">'.ucfirst($nav).'</a></li>';
			}
		echo '</ul>';
	echo '</nav>';
}