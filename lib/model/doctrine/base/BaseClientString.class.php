<?php

/**
 * BaseClientString
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $name_fr
 * @property Doctrine_Collection $Questname
 * @property Doctrine_Collection $Questzone
 * 
 * @method string              getName()      Returns the current record's "name" value
 * @method string              getNameFr()    Returns the current record's "name_fr" value
 * @method Doctrine_Collection getQuestname() Returns the current record's "Questname" collection
 * @method Doctrine_Collection getQuestzone() Returns the current record's "Questzone" collection
 * @method ClientString        setName()      Sets the current record's "name" value
 * @method ClientString        setNameFr()    Sets the current record's "name_fr" value
 * @method ClientString        setQuestname() Sets the current record's "Questname" collection
 * @method ClientString        setQuestzone() Sets the current record's "Questzone" collection
 * 
 * @package    Bug Quest Tracker
 * @subpackage model
 * @author     Matthieu Mystick Derasse
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseClientString extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('client_string');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('name_fr', 'string', 500, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 500,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Quest as Questname', array(
             'local' => 'name',
             'foreign' => 'name_id'));

        $this->hasMany('Quest as Questzone', array(
             'local' => 'name',
             'foreign' => 'zone_id'));
    }
}