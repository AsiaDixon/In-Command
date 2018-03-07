<?php


$nav_list = [
	'badges',
	'alerts',
	'buttons',
	'cards',
	'typography',
	'navigation',
	'header'
];

sort($nav_list);

function makeNav($the_navs) {

	echo '<nav :class="{ hidden: showMenu }" class="md:block">';
       echo '<ul class="verticalAlign list-reset text-2xl">';
			foreach($the_navs as $nav) {
				echo '<li><a class="nav-link" href="'.$nav.'.php">'.ucfirst($nav).'</a></li>';
			}
		echo '</ul>';
	echo '</nav>';
}