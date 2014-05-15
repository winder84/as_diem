<?php // Vars: $productPager

echo $productPager->renderNavigationTop();

echo _open('ul.productListUl');

foreach ($productPager as $product)
{
  echo _open('li.element');

	echo _media($product->Image)->size(190, 130);
    echo _link($product);

  echo _close('li');
}

echo _close('ul');

echo $productPager->renderNavigationBottom();