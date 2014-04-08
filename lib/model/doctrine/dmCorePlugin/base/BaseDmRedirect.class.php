<?php

/**
 * BaseDmRedirect
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $source
 * @property string $dest
 * 
 * @method string     getSource() Returns the current record's "source" value
 * @method string     getDest()   Returns the current record's "dest" value
 * @method DmRedirect setSource() Sets the current record's "source" value
 * @method DmRedirect setDest()   Sets the current record's "dest" value
 * 
 * @package    tambuel-sochi
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7294 2010-03-02 17:59:20Z jwage $
 */
abstract class BaseDmRedirect extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dm_redirect');
        $this->hasColumn('source', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'notnull' => true,
             'length' => '255',
             ));
        $this->hasColumn('dest', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '255',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}