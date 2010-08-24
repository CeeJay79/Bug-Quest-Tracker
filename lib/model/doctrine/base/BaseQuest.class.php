<?php

/**
 * BaseQuest
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name_id
 * @property string $type
 * @property string $zone_id
 * @property string $race
 * @property integer $status_id
 * @property ClientString $Translate
 * @property ClientString $Zone
 * @property Status $Status
 * @property Doctrine_Collection $Comments
 * 
 * @method string              getNameId()    Returns the current record's "name_id" value
 * @method string              getType()      Returns the current record's "type" value
 * @method string              getZoneId()    Returns the current record's "zone_id" value
 * @method string              getRace()      Returns the current record's "race" value
 * @method integer             getStatusId()  Returns the current record's "status_id" value
 * @method ClientString        getTranslate() Returns the current record's "Translate" value
 * @method ClientString        getZone()      Returns the current record's "Zone" value
 * @method Status              getStatus()    Returns the current record's "Status" value
 * @method Doctrine_Collection getComments()  Returns the current record's "Comments" collection
 * @method Quest               setNameId()    Sets the current record's "name_id" value
 * @method Quest               setType()      Sets the current record's "type" value
 * @method Quest               setZoneId()    Sets the current record's "zone_id" value
 * @method Quest               setRace()      Sets the current record's "race" value
 * @method Quest               setStatusId()  Sets the current record's "status_id" value
 * @method Quest               setTranslate() Sets the current record's "Translate" value
 * @method Quest               setZone()      Sets the current record's "Zone" value
 * @method Quest               setStatus()    Sets the current record's "Status" value
 * @method Quest               setComments()  Sets the current record's "Comments" collection
 * 
 * @package    Bug Quest Tracker
 * @subpackage model
 * @author     Matthieu Mystick Derasse
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseQuest extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('quest');
        $this->hasColumn('name_id', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('type', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('zone_id', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('race', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('status_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ClientString as Translate', array(
             'local' => 'name_id',
             'foreign' => 'name'));

        $this->hasOne('ClientString as Zone', array(
             'local' => 'zone_id',
             'foreign' => 'name'));

        $this->hasOne('Status', array(
             'local' => 'status_id',
             'foreign' => 'id'));

        $this->hasMany('Comments', array(
             'local' => 'id',
             'foreign' => 'quest_id'));
    }
}