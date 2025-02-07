<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Episode', 'doctrine');

/**
 * BaseEpisode
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $item_id
 * @property integer $season
 * @property integer $episode
 * @property string $title
 * @property string $route
 * @property integer $sort
 * @property integer $nb_views
 * @property integer $is_active
 * @property integer $is_featured
 * @property integer $created_aid
 * @property integer $updated_aid
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * 
 * @method integer   getId()          Returns the current record's "id" value
 * @method integer   getItemId()      Returns the current record's "item_id" value
 * @method integer   getSeason()      Returns the current record's "season" value
 * @method integer   getEpisode()     Returns the current record's "episode" value
 * @method string    getTitle()       Returns the current record's "title" value
 * @method string    getRoute()       Returns the current record's "route" value
 * @method integer   getSort()        Returns the current record's "sort" value
 * @method integer   getNbViews()     Returns the current record's "nb_views" value
 * @method integer   getIsActive()    Returns the current record's "is_active" value
 * @method integer   getIsFeatured()  Returns the current record's "is_featured" value
 * @method integer   getCreatedAid()  Returns the current record's "created_aid" value
 * @method integer   getUpdatedAid()  Returns the current record's "updated_aid" value
 * @method timestamp getCreatedAt()   Returns the current record's "created_at" value
 * @method timestamp getUpdatedAt()   Returns the current record's "updated_at" value
 * @method Episode   setId()          Sets the current record's "id" value
 * @method Episode   setItemId()      Sets the current record's "item_id" value
 * @method Episode   setSeason()      Sets the current record's "season" value
 * @method Episode   setEpisode()     Sets the current record's "episode" value
 * @method Episode   setTitle()       Sets the current record's "title" value
 * @method Episode   setRoute()       Sets the current record's "route" value
 * @method Episode   setSort()        Sets the current record's "sort" value
 * @method Episode   setNbViews()     Sets the current record's "nb_views" value
 * @method Episode   setIsActive()    Sets the current record's "is_active" value
 * @method Episode   setIsFeatured()  Sets the current record's "is_featured" value
 * @method Episode   setCreatedAid()  Sets the current record's "created_aid" value
 * @method Episode   setUpdatedAid()  Sets the current record's "updated_aid" value
 * @method Episode   setCreatedAt()   Sets the current record's "created_at" value
 * @method Episode   setUpdatedAt()   Sets the current record's "updated_at" value
 * 
 * @package    imdb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEpisode extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('episode');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('item_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('season', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('episode', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('title', 'string', 500, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 500,
             ));
        $this->hasColumn('route', 'string', 500, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 500,
             ));
        $this->hasColumn('sort', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('nb_views', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('is_active', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('is_featured', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('created_aid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('updated_aid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}