<?php // Vars: $productPager

//echo $productPager->renderNavigationTop();
echo _open('ul');

foreach ($productPager as $product)
{
	if ($product->isonslider) {
		echo _open('li.element');

		echo _link($product);

		echo _close('li');
	}
}

echo _close('ul');

//echo $productPager->renderNavigationBottom();