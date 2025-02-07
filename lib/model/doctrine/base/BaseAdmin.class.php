<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Admin', 'doctrine');

/**
 * BaseAdmin
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $mod_permissions
 * @property string $cat_permissions
 * @property timestamp $logged_at
 * @property integer $sort
 * @property integer $is_active
 * @property integer $is_featured
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property integer $created_aid
 * @property integer $updated_aid
 * @property Doctrine_Collection $Admin
 * @property Doctrine_Collection $Admin_2
 * @property Doctrine_Collection $Banner
 * @property Doctrine_Collection $Banner_2
 * @property Doctrine_Collection $Bests
 * @property Doctrine_Collection $Bests_2
 * @property Doctrine_Collection $Celebrity
 * @property Doctrine_Collection $Celebrity_2
 * @property Doctrine_Collection $Cinema
 * @property Doctrine_Collection $Cinema_2
 * @property Doctrine_Collection $Feedback
 * @property Doctrine_Collection $Feedback_2
 * @property Doctrine_Collection $Image
 * @property Doctrine_Collection $Image_2
 * @property Doctrine_Collection $Image_3
 * @property Doctrine_Collection $Image_4
 * @property Doctrine_Collection $Item
 * @property Doctrine_Collection $Item_2
 * @property Doctrine_Collection $Link
 * @property Doctrine_Collection $Link_2
 * @property Doctrine_Collection $Link_3
 * @property Doctrine_Collection $Link_4
 * @property Doctrine_Collection $Love
 * @property Doctrine_Collection $Love_2
 * @property Doctrine_Collection $News
 * @property Doctrine_Collection $News_2
 * @property Doctrine_Collection $NewsItem
 * @property Doctrine_Collection $NewsItem_4
 * @property Doctrine_Collection $Page
 * @property Doctrine_Collection $Page_2
 * @property Doctrine_Collection $Poll
 * @property Doctrine_Collection $Poll_2
 * @property Doctrine_Collection $PollOption
 * @property Doctrine_Collection $PollOption_2
 * @property Doctrine_Collection $Rating
 * @property Doctrine_Collection $Rating_2
 * @property Doctrine_Collection $Studio
 * @property Doctrine_Collection $Studio_2
 * @property Doctrine_Collection $Subscriber
 * @property Doctrine_Collection $Subscriber_2
 * @property Doctrine_Collection $User
 * @property Doctrine_Collection $User_2
 * 
 * @method integer             getId()              Returns the current record's "id" value
 * @method string              getEmail()           Returns the current record's "email" value
 * @method string              getPassword()        Returns the current record's "password" value
 * @method string              getModPermissions()  Returns the current record's "mod_permissions" value
 * @method string              getCatPermissions()  Returns the current record's "cat_permissions" value
 * @method timestamp           getLoggedAt()        Returns the current record's "logged_at" value
 * @method integer             getSort()            Returns the current record's "sort" value
 * @method integer             getIsActive()        Returns the current record's "is_active" value
 * @method integer             getIsFeatured()      Returns the current record's "is_featured" value
 * @method timestamp           getCreatedAt()       Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()       Returns the current record's "updated_at" value
 * @method integer             getCreatedAid()      Returns the current record's "created_aid" value
 * @method integer             getUpdatedAid()      Returns the current record's "updated_aid" value
 * @method Doctrine_Collection getAdmin()           Returns the current record's "Admin" collection
 * @method Doctrine_Collection getAdmin2()          Returns the current record's "Admin_2" collection
 * @method Doctrine_Collection getBanner()          Returns the current record's "Banner" collection
 * @method Doctrine_Collection getBanner2()         Returns the current record's "Banner_2" collection
 * @method Doctrine_Collection getBests()           Returns the current record's "Bests" collection
 * @method Doctrine_Collection getBests2()          Returns the current record's "Bests_2" collection
 * @method Doctrine_Collection getCelebrity()       Returns the current record's "Celebrity" collection
 * @method Doctrine_Collection getCelebrity2()      Returns the current record's "Celebrity_2" collection
 * @method Doctrine_Collection getCinema()          Returns the current record's "Cinema" collection
 * @method Doctrine_Collection getCinema2()         Returns the current record's "Cinema_2" collection
 * @method Doctrine_Collection getFeedback()        Returns the current record's "Feedback" collection
 * @method Doctrine_Collection getFeedback2()       Returns the current record's "Feedback_2" collection
 * @method Doctrine_Collection getImage()           Returns the current record's "Image" collection
 * @method Doctrine_Collection getImage2()          Returns the current record's "Image_2" collection
 * @method Doctrine_Collection getImage3()          Returns the current record's "Image_3" collection
 * @method Doctrine_Collection getImage4()          Returns the current record's "Image_4" collection
 * @method Doctrine_Collection getItem()            Returns the current record's "Item" collection
 * @method Doctrine_Collection getItem2()           Returns the current record's "Item_2" collection
 * @method Doctrine_Collection getLink()            Returns the current record's "Link" collection
 * @method Doctrine_Collection getLink2()           Returns the current record's "Link_2" collection
 * @method Doctrine_Collection getLink3()           Returns the current record's "Link_3" collection
 * @method Doctrine_Collection getLink4()           Returns the current record's "Link_4" collection
 * @method Doctrine_Collection getLove()            Returns the current record's "Love" collection
 * @method Doctrine_Collection getLove2()           Returns the current record's "Love_2" collection
 * @method Doctrine_Collection getNews()            Returns the current record's "News" collection
 * @method Doctrine_Collection getNews2()           Returns the current record's "News_2" collection
 * @method Doctrine_Collection getNewsItem()        Returns the current record's "NewsItem" collection
 * @method Doctrine_Collection getNewsItem4()       Returns the current record's "NewsItem_4" collection
 * @method Doctrine_Collection getPage()            Returns the current record's "Page" collection
 * @method Doctrine_Collection getPage2()           Returns the current record's "Page_2" collection
 * @method Doctrine_Collection getPoll()            Returns the current record's "Poll" collection
 * @method Doctrine_Collection getPoll2()           Returns the current record's "Poll_2" collection
 * @method Doctrine_Collection getPollOption()      Returns the current record's "PollOption" collection
 * @method Doctrine_Collection getPollOption2()     Returns the current record's "PollOption_2" collection
 * @method Doctrine_Collection getRating()          Returns the current record's "Rating" collection
 * @method Doctrine_Collection getRating2()         Returns the current record's "Rating_2" collection
 * @method Doctrine_Collection getStudio()          Returns the current record's "Studio" collection
 * @method Doctrine_Collection getStudio2()         Returns the current record's "Studio_2" collection
 * @method Doctrine_Collection getSubscriber()      Returns the current record's "Subscriber" collection
 * @method Doctrine_Collection getSubscriber2()     Returns the current record's "Subscriber_2" collection
 * @method Doctrine_Collection getUser()            Returns the current record's "User" collection
 * @method Doctrine_Collection getUser2()           Returns the current record's "User_2" collection
 * @method Admin               setId()              Sets the current record's "id" value
 * @method Admin               setEmail()           Sets the current record's "email" value
 * @method Admin               setPassword()        Sets the current record's "password" value
 * @method Admin               setModPermissions()  Sets the current record's "mod_permissions" value
 * @method Admin               setCatPermissions()  Sets the current record's "cat_permissions" value
 * @method Admin               setLoggedAt()        Sets the current record's "logged_at" value
 * @method Admin               setSort()            Sets the current record's "sort" value
 * @method Admin               setIsActive()        Sets the current record's "is_active" value
 * @method Admin               setIsFeatured()      Sets the current record's "is_featured" value
 * @method Admin               setCreatedAt()       Sets the current record's "created_at" value
 * @method Admin               setUpdatedAt()       Sets the current record's "updated_at" value
 * @method Admin               setCreatedAid()      Sets the current record's "created_aid" value
 * @method Admin               setUpdatedAid()      Sets the current record's "updated_aid" value
 * @method Admin               setAdmin()           Sets the current record's "Admin" collection
 * @method Admin               setAdmin2()          Sets the current record's "Admin_2" collection
 * @method Admin               setBanner()          Sets the current record's "Banner" collection
 * @method Admin               setBanner2()         Sets the current record's "Banner_2" collection
 * @method Admin               setBests()           Sets the current record's "Bests" collection
 * @method Admin               setBests2()          Sets the current record's "Bests_2" collection
 * @method Admin               setCelebrity()       Sets the current record's "Celebrity" collection
 * @method Admin               setCelebrity2()      Sets the current record's "Celebrity_2" collection
 * @method Admin               setCinema()          Sets the current record's "Cinema" collection
 * @method Admin               setCinema2()         Sets the current record's "Cinema_2" collection
 * @method Admin               setFeedback()        Sets the current record's "Feedback" collection
 * @method Admin               setFeedback2()       Sets the current record's "Feedback_2" collection
 * @method Admin               setImage()           Sets the current record's "Image" collection
 * @method Admin               setImage2()          Sets the current record's "Image_2" collection
 * @method Admin               setImage3()          Sets the current record's "Image_3" collection
 * @method Admin               setImage4()          Sets the current record's "Image_4" collection
 * @method Admin               setItem()            Sets the current record's "Item" collection
 * @method Admin               setItem2()           Sets the current record's "Item_2" collection
 * @method Admin               setLink()            Sets the current record's "Link" collection
 * @method Admin               setLink2()           Sets the current record's "Link_2" collection
 * @method Admin               setLink3()           Sets the current record's "Link_3" collection
 * @method Admin               setLink4()           Sets the current record's "Link_4" collection
 * @method Admin               setLove()            Sets the current record's "Love" collection
 * @method Admin               setLove2()           Sets the current record's "Love_2" collection
 * @method Admin               setNews()            Sets the current record's "News" collection
 * @method Admin               setNews2()           Sets the current record's "News_2" collection
 * @method Admin               setNewsItem()        Sets the current record's "NewsItem" collection
 * @method Admin               setNewsItem4()       Sets the current record's "NewsItem_4" collection
 * @method Admin               setPage()            Sets the current record's "Page" collection
 * @method Admin               setPage2()           Sets the current record's "Page_2" collection
 * @method Admin               setPoll()            Sets the current record's "Poll" collection
 * @method Admin               setPoll2()           Sets the current record's "Poll_2" collection
 * @method Admin               setPollOption()      Sets the current record's "PollOption" collection
 * @method Admin               setPollOption2()     Sets the current record's "PollOption_2" collection
 * @method Admin               setRating()          Sets the current record's "Rating" collection
 * @method Admin               setRating2()         Sets the current record's "Rating_2" collection
 * @method Admin               setStudio()          Sets the current record's "Studio" collection
 * @method Admin               setStudio2()         Sets the current record's "Studio_2" collection
 * @method Admin               setSubscriber()      Sets the current record's "Subscriber" collection
 * @method Admin               setSubscriber2()     Sets the current record's "Subscriber_2" collection
 * @method Admin               setUser()            Sets the current record's "User" collection
 * @method Admin               setUser2()           Sets the current record's "User_2" collection
 * 
 * @package    imdb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdmin extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('admin');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('password', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('mod_permissions', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('cat_permissions', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('logged_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Admin', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Admin as Admin_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Banner', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Banner as Banner_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Bests', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Bests as Bests_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Celebrity', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Celebrity as Celebrity_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Cinema', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Cinema as Cinema_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Feedback', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Feedback as Feedback_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Image', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Image as Image_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Image as Image_3', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Image as Image_4', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Item', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Item as Item_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Link', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Link as Link_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Link as Link_3', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Link as Link_4', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Love', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Love as Love_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('News', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('News as News_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('NewsItem', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('NewsItem as NewsItem_4', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Page', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Page as Page_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Poll', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Poll as Poll_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('PollOption', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('PollOption as PollOption_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Rating', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Rating as Rating_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Studio', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Studio as Studio_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('Subscriber', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Subscriber as Subscriber_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('User', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('User as User_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));
    }
}