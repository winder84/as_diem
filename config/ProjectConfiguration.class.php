<?php

require_once '/home/s/stokkmvru/diem50/dmCorePlugin/lib/core/dm.php';
dm::start();

class ProjectConfiguration extends dmProjectConfiguration
{

  public function setup()
  {
    parent::setup();
    
    $this->enablePlugins(array(
      // add plugins you want to enable here
	  'dmCkEditorPlugin'
    ));

    $this->setWebDir(sfConfig::get('sf_root_dir').'/public_html');
  }
  
}