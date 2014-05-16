<?php // Vars: $product

echo _open('div.productShowDiv');
	echo _open('div.productShowHead');
		echo _open('div.productShowImg');
			echo _media($product->Image)->width(500);
		echo _close('div');
		echo _open('div.productShowTD');
			echo _tag('p.productShowTitle', $product);
			echo _tag('p.productShowPrevdesc', $product->prevdescription);
		echo _close('div');
	echo _close('div');
	echo _open('div.productShowBody');
		echo _tag('p.productShowDescription', $product->description);
	echo _close('div');
echo _close('div');