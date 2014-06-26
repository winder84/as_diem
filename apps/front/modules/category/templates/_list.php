<?php // Vars: $categoryPager

echo _open('ul.categoryListMenu');
foreach ($categoryPager as $category) {
	if ($category->is_active) {
		if (!$category->category_id) {
			$categories = $category->Categories->toArray();
			if (!empty($categories)) {
				echo _open('li.categoryParent');
					echo _tag('a.noLink', $category);
					echo _media('redArrowRight.png')->width(30)->method('fit');
				echo _close('li');
				echo _open('ul.categoryChildren');
				foreach ($category->Categories as $categoryChild) {
					if ($categoryChild->is_active) {
						$products = $categoryChild->Products->toArray();
						echo _tag('li', _link($categoryChild));
					}
				}
				echo _close('ul');
			} else {
				echo _tag('li', _link($category));
			}
//		$parentCategories[$category->category_id][] = $category;
		}
	}
}
echo _close('ul');

//
//foreach ($parentCategories as $key => $pCat) {
//	echo _open('div.pCat#pCat_' . $key);
//		echo _open('ul.hiddenDiv');
//			foreach ($pCat as $chCat) {
//				echo _open('li');
//					echo _link($chCat)->text(_media($chCat->Image)->width(90));
//					echo _tag('p.category_name_link', _link($chCat)->text($chCat));
//				echo _close('li');
//			}
//		echo _close('ul.hiddenDiv');
//	echo _close('div');
//}
//
//	foreach ($categoryPager as $key => $category)
//	{
//		if ($key <= 7) {
//			if (!$category->category_id && !empty($parentCategories[$category->id])) {
//				echo _open('ul.header_categories_menu');
//					echo _open('div.mainCategoryTitle');
//						echo _media($category->Image)->width(90);
//						echo _tag('p', $category);
//					echo _close('div');
//					echo _open('div.cats');
//						foreach ($parentCategories[$category->id] as $cKey => $childCategory) {
//							if ($cKey <= 7) {
//								if (array_key_exists($childCategory->id, $parentCategories)) {
//									echo _open('li.pCatBtn', array('pcatbtnid' => $childCategory->id));
//									echo _media($childCategory->Image)->width(90);
//									echo _tag('p.category_name_link', $childCategory);
//									echo _close('li');
//								} else {
//									echo _open('li');
//									echo _link($childCategory)->text(_media($childCategory->Image)->width(90));
//									echo _tag('p.category_name_link', _link($childCategory)->text($childCategory));
//									echo _close('li');
//								}
//							}
//						}
//					echo _close('div');
//				echo _close('ul');
//			} else {
//
//			}
//		}
//	}
