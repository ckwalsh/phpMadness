<?php

/**
 * Game filter form base class.
 *
 * @package    madness]
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseGameFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'home_game'  => new sfWidgetFormFilterInput(),
      'away_game'  => new sfWidgetFormFilterInput(),
      'home_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Home'), 'add_empty' => true)),
      'away_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Away'), 'add_empty' => true)),
      'due'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'home_score' => new sfWidgetFormFilterInput(),
      'away_score' => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'home_game'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'away_game'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'home_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Home'), 'column' => 'id')),
      'away_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Away'), 'column' => 'id')),
      'due'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'home_score' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'away_score' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('game_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Game';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'home_game'  => 'Number',
      'away_game'  => 'Number',
      'home_id'    => 'ForeignKey',
      'away_id'    => 'ForeignKey',
      'due'        => 'Date',
      'home_score' => 'Number',
      'away_score' => 'Number',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
