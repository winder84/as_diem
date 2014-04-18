<?php // Vars: $categoryPager

echo _open('ul.header_categories_menu');
	foreach ($categoryPager as $key => $category)
	{
		if ($key <= 7) {
			echo _open('li');
			echo _link($category)->text(_media($category->Image)->width(90));
			echo _tag('p.category_name_link', _link($category)->text($category));
			echo _close('li');
		}
	}
echo _close('ul');