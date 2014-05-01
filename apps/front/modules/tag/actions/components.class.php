<?php
/**
 * Тэг components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 * 
 * 
 */
class tagComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->tagPager = $this->getPager($query);
  }

  public function executeListByTags()
  {
    $query = $this->getListQuery();
    
    $this->tagPager = $this->getPager($query);
  }


}
