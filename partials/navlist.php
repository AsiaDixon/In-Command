<?php


$nav_list = [
	'alerts',
	'badges',
	'breadcrumbs',
	'buttons',
	'cards',
	'footers',
	'forms',
	'globenav',
	'herounits',
	'lists',
	'mediaobjects',
	'navigationlist',
	'pagination',
	'tables'
];

sort($nav_list);

function makeNav($the_navs) {

	echo '<nav :class="{ hidden: showMenu }" class="md:block sticky bg-grey-lighter w-full">';
       echo '<ul class="verticalAlign list-reset text-2xl">';
			foreach($the_navs as $nav) {
				echo '<li><a class="nav-link" href="'.$nav.'.php">'.ucfirst($nav).'</a></li>';
			}
		echo '</ul>';
	echo '</nav>';
}