<?php // Vars: $markPager

//echo $markPager->renderNavigationTop();

echo _open('ul.header_categories_menu');
	echo _open('div.mainCategoryTitle');
		echo _media('made_in.jpg')->width(90);
		echo _tag('p', 'Производители');
	echo _close('div');
	echo _open('div.cats');
		foreach ($markPager as $key => $mark)
		{
			if ($key <= 7) {
				echo _open('li');
					echo _link($mark)->text(_media($mark->Image)->size(100, 40));
					echo _tag('p.category_name_link', $mark);
				echo _close('li');
			}
		}
	echo _close('div');
echo _close('ul');

//echo $markPager->renderNavigationBottom();