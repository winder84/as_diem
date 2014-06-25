<?php // Vars: $product
foreach ($product->Specification as $spec) {
	$SpecArray[] = $spec;
}

echo _open('div.productShowDiv');
	echo _open('div.productShowHead');
		echo _open('div.productShowImg');
			echo _media($product->Image)->size(300, 300)->method('fit');
			if (!empty($product->cost)) {
				echo _tag('p.productShowCost', 'Цена: ' . number_format($product->cost, 0, '.', ' ') . ' руб.');
			}
		echo _close('div');
		echo _open('div.productShowTD');
			echo _tag('div.productShowTitle', $product);
			echo _tag('div.productShowPrevdesc', $product->prevdescription);
		echo _close('div');
	echo _close('div');
	echo _tag('div.productHorDelimer');
	echo _open('div.productShowBody');
		echo _tag('p.productShowDescription', $product->description);
	echo _close('div');

	if(!empty($SpecArray)) {
		echo _tag('div.productHorDelimer');
		echo _tag('p.specTableTitle', 'Характеристики');
		echo _open('table.specTable');
		foreach ($SpecArray as $spec) {
			echo _open('tr');
			echo _tag('td', $spec);
			echo _tag('td', $spec->Specificationlink[0]->value . ' ' . $spec->measure);
			echo _close('tr');
		}
		echo _close('table');
	}
echo _close('div');