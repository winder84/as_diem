<?php // Vars: $categoryPager

foreach ($categoryPager as $category) {
	if ($category->category_id) {
		$parentCategories[$category->category_id][] = $category;
	}
}

foreach ($parentCategories as $key => $pCat) {
	echo _open('div.pCat#pCat_' . $key);
		echo _open('ul.hiddenDiv');
			foreach ($pCat as $chCat) {
				echo _open('li');
					echo _link($chCat)->text(_media($chCat->Image)->width(90));
					echo _tag('p.category_name_link', _link($chCat)->text($chCat));
				echo _close('li');
			}
		echo _close('ul.hiddenDiv');
	echo _close('div');
}

	foreach ($categoryPager as $key => $category)
	{
		if ($key <= 7) {
			if (!$category->category_id && !empty($parentCategories[$category->id])) {
				echo _open('ul.header_categories_menu');
					echo _open('div.mainCategoryTitle');
						echo _media($category->Image)->width(90);
						echo _tag('p', $category);
					echo _close('div');
					echo _open('div.cats');
						foreach ($parentCategories[$category->id] as $cKey => $childCategory) {
							if ($cKey <= 7) {
								if (array_key_exists($childCategory->id, $parentCategories)) {
									echo _open('li.pCatBtn', array('pcatbtnid' => $childCategory->id));
									echo _media($childCategory->Image)->width(90);
									echo _tag('p.category_name_link', $childCategory);
									echo _close('li');
								} else {
									echo _open('li');
									echo _link($childCategory)->text(_media($childCategory->Image)->width(90));
									echo _tag('p.category_name_link', _link($childCategory)->text($childCategory));
									echo _close('li');
								}
							}
						}
					echo _close('div');
				echo _close('ul');
			} else {

			}
		}
	}
