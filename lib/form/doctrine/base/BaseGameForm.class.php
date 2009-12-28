<?php

/**
 * Game form base class.
 *
 * @method Game getObject() Returns the current form's model object
 *
 * @package    madness]
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseGameForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'home_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Home'), 'add_empty' => true)),
      'away_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Away'), 'add_empty' => true)),
      'due'        => new sfWidgetFormDateTime(),
      'home_score' => new sfWidgetFormInputText(),
      'away_score' => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'home_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Home'), 'required' => false)),
      'away_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Away'), 'required' => false)),
      'due'        => new sfValidatorDateTime(array('required' => false)),
      'home_score' => new sfValidatorInteger(array('required' => false)),
      'away_score' => new sfValidatorInteger(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('game[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Game';
  }

}
