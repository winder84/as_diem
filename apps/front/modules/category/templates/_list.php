<?php // Vars: $categoryPager

foreach ($categoryPager as $category) {
	if ($category->category_id) {
		$parentCategories[$category->category_id][] = $category;
		echo _tag('div.pCat#pCat_' . $category->category_id);
	}
}

	foreach ($categoryPager as $key => $category)
	{
		if ($key <= 7) {
			if (!$category->category_id) {
				echo _open('ul.header_categories_menu');
				echo _tag('p.mainCategoryTitle', $category);
				echo _open('li');
					echo _media($category->Image)->width(90);
					echo _tag('p.category_name_link', $category);
				echo _close('li');
				if (!empty($parentCategories[$category->id])) {
					foreach ($parentCategories[$category->id] as $childCategory) {
						if (array_key_exists($childCategory->id, $parentCategories)) {
							echo _open('li');
							echo _media($childCategory->Image)->width(90);
							echo _tag('p.category_name_link', $childCategory);
							echo _close('li');
						} else {
							echo _open('li');
							echo _link($category)->text(_media($childCategory->Image)->width(90));
							echo _tag('p.category_name_link', _link($childCategory)->text($childCategory));
							echo _close('li');
						}
					}
				}
				echo _close('ul');
			} else {

			}
		}
	}
