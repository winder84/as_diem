<?php
/**
 * Оборудование components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 * 
 */
class productComponents extends myFrontModuleComponents
{

  public function executeListByCategory()
  {
    $query = $this->getListQuery();
    
    $this->productPager = $this->getPager($query);
  }

  public function executeListByMark()
  {
    $query = $this->getListQuery();
    
    $this->productPager = $this->getPager($query);
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->product = $this->getRecord($query);
  }

  public function executeListByTags()
  {
    $query = $this->getListQuery();
    
    $this->productPager = $this->getPager($query);
  }


}
