<?php

/**
 * Celebrity form.
 *
 * @package    imdb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CelebrityForm extends BaseCelebrityForm
{
	  public function configure()
	  {
	  		unset($this['cover']);
	  		
	  		# WIDGETS
	      $this->widgetSchema['fullname'] 	    = new sfWidgetFormInputText(array(), array());
	      $this->widgetSchema['fullname_mn'] 	  = new sfWidgetFormInputText(array(), array());
	      $this->widgetSchema['nickname']   	  = new sfWidgetFormInputText(array(), array());
	      $choices = GlobalLib::getArray('profession');
	      $this->widgetSchema['profession']     = new sfWidgetFormChoice(array('choices'=>$choices, 'multiple'=>true), array('style'=>'width:200px;height:200px;'));
	    	$this->widgetSchema['height']         = new sfWidgetFormInputText(array(), array('style'=>'width:40px;'));
	    	$this->widgetSchema['birthday']       = new sfWidgetFormDatePicker(array(), array());
	    	$this->widgetSchema['deadday']        = new sfWidgetFormDatePicker(array(), array());
	    	$this->widgetSchema['about']          = new sfWidgetFormTextarea(array(), array('style'=>'width:500px;height:200px;'));
	    	$this->widgetSchema['about_mn']       = new sfWidgetFormTextarea(array(), array('style'=>'width:500px;height:200px;'));
	    	$this->widgetSchema['facebook']       = new sfWidgetFormInputText(array(), array());
	    	$this->widgetSchema['twitter']        = new sfWidgetFormInputText(array(), array());
	    	$this->widgetSchema['web']        		= new sfWidgetFormInputText(array(), array());
	    	$this->widgetSchema['soure']        	= new sfWidgetFormInputText(array(), array());
	    	  	
	    	# VALIDATORS
				$this->validatorSchema['fullname']     = new sfValidatorCallback(array('required'=>true, 'callback' => array($this, 'validateFullname')), array());
	    	$this->validatorSchema['fullname_mn']  = new sfValidatorPass();
	    	$this->validatorSchema['nickname']     = new sfValidatorPass();
	    	$this->validatorSchema['profession']   = new sfValidatorPass();
	    	$this->validatorSchema['height']       = new sfValidatorInteger();
	    	$this->validatorSchema['birthday']     = new sfValidatorDate();
	    	$this->validatorSchema['deadday']      = new sfValidatorDate(array('required'=>false));
	    	$this->validatorSchema['about']        = new sfValidatorPass();
	    	$this->validatorSchema['about_mn']     = new sfValidatorPass();
	    	$this->validatorSchema['facebook']     = new sfValidatorString();
	    	$this->validatorSchema['twiter']       = new sfValidatorPass();
	    	$this->validatorSchema['web']      		 = new sfValidatorPass();
	    	$this->validatorSchema['source']       = new sfValidatorString();
	    	
	    	#HELP
	    	$this->widgetSchema->setHelp('profession', 'Ctrl + Mouse left click дарж зэрэг сонгоно уу.');      	
	    	$this->widgetSchema->setHelp('height', 'cm');
	  }
	  
	  public function validateFullname($validator, $value)
	  {
			  if ($this->getObject()->isNew() && Doctrine::getTable('Celebrity')->findOneByTitle($value)) {
				  	throw new sfValidatorError($validator, 'Celebrity already exists.');
			  }
			  return $value;
	  }

}
