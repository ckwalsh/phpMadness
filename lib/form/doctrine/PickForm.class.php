<?php

/**
 * Pick form.
 *
 * @package    madness]
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PickForm extends BasePickForm
{
  public function configure()
  {
    $this->useFields(array('team_id'));
    $this->widgetSchema['team_id'] = new sfWidgetFormSelect(array(
      'choices' => $this->getTeams(),
    ));

    $this->validatorSchema['team_id'] = new sfValidatorChoice(array(
      'choices' => array_keys($this->getTeams()),
    ));

    //$this->validatorSchema['type'] = new sfValidatorChoice(array(
    //  'choices' => $this->object->Game->getPossibleTeamIds()));
    //var_dump($this->object->Game->getPossibleTeamIds());
    
  }

  public function getTeams()
  {
    static $r = false;
    if(!$r)
    {
      $teams = Doctrine::getTable('Team')->findByDql('id IN (' . implode(', ', $this->object->Game->getPossibleTeamIds()) . ')');
      $r = array();
      foreach($teams as $t)
      {
        $r[$t->getId()] = $t;
      }
    }
    return $r;
  }
}
