<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    imdb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'password'        => new sfWidgetFormInputText(),
      'firstname'       => new sfWidgetFormInputText(),
      'lastname'        => new sfWidgetFormInputText(),
      'email'           => new sfWidgetFormInputText(),
      'mobile'          => new sfWidgetFormInputText(),
      'avator'          => new sfWidgetFormInputText(),
      'is_active'       => new sfWidgetFormInputText(),
      'sort'            => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
      'created_aid'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Admin'), 'add_empty' => false)),
      'updated_aid'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Admin_2'), 'add_empty' => false)),
      'logged_at'       => new sfWidgetFormDateTime(),
      'activation_code' => new sfWidgetFormInputText(),
      'ip'              => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'password'        => new sfValidatorString(array('max_length' => 255)),
      'firstname'       => new sfValidatorString(array('max_length' => 255)),
      'lastname'        => new sfValidatorString(array('max_length' => 255)),
      'email'           => new sfValidatorString(array('max_length' => 255)),
      'mobile'          => new sfValidatorString(array('max_length' => 255)),
      'avator'          => new sfValidatorString(array('max_length' => 255)),
      'is_active'       => new sfValidatorInteger(),
      'sort'            => new sfValidatorInteger(),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(array('required' => false)),
      'created_aid'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Admin'))),
      'updated_aid'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Admin_2'))),
      'logged_at'       => new sfValidatorDateTime(array('required' => false)),
      'activation_code' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ip'              => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

}
