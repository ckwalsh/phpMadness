<?php

/**
 * bracket actions.
 *
 * @package    madness]
 * @subpackage bracket
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class bracketActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->brackets = Doctrine::getTable('Bracket')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->bracket = Doctrine::getTable('Bracket')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->bracket);
    
    $this->picks = array();
    $picks = $this->bracket->getPick();
    
    foreach($picks as $p)
    {
      $this->picks[$p->getGameId()] = $p;
    }

    $this->games = array();
    $games = Doctrine::getTable('Game')->findAll();
    
    foreach($games as $g)
    {
      $this->games[$g->getId()] = $g;
    }

    $this->teams = array();
    $teams = Doctrine::getTable('Team')->findAll();
    
    foreach($teams as $t)
    {
      $this->teams[$t->getId()] = $t;
    }
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new BracketForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new BracketForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($bracket = Doctrine::getTable('Bracket')->find(array($request->getParameter('id'))), sprintf('Object bracket does not exist (%s).', $request->getParameter('id')));
    $this->form = new BracketForm($bracket);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($bracket = Doctrine::getTable('Bracket')->find(array($request->getParameter('id'))), sprintf('Object bracket does not exist (%s).', $request->getParameter('id')));
    $this->form = new BracketForm($bracket);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($bracket = Doctrine::getTable('Bracket')->find(array($request->getParameter('id'))), sprintf('Object bracket does not exist (%s).', $request->getParameter('id')));
    $bracket->delete();

    $this->redirect('bracket/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $bracket = $form->save();

      $this->redirect('bracket/edit?id='.$bracket->getId());
    }
  }
}
