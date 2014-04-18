<?php // Vars: $markPager

echo $markPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($markPager as $mark)
{
  echo _open('li.element');

    echo _link($mark);

  echo _close('li');
}

echo _close('ul');

echo $markPager->renderNavigationBottom();