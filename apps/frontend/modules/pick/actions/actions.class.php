<?php

/**
 * pick actions.
 *
 * @package    madness]
 * @subpackage pick
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pickActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->picks = Doctrine::getTable('Pick')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->pick = Doctrine::getTable('Pick')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->pick);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PickForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PickForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($pick = Doctrine::getTable('Pick')->find(array($request->getParameter('id'))), sprintf('Object pick does not exist (%s).', $request->getParameter('id')));
    $this->form = new PickForm($pick);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($pick = Doctrine::getTable('Pick')->find(array($request->getParameter('id'))), sprintf('Object pick does not exist (%s).', $request->getParameter('id')));
    $this->form = new PickForm($pick);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($pick = Doctrine::getTable('Pick')->find(array($request->getParameter('id'))), sprintf('Object pick does not exist (%s).', $request->getParameter('id')));
    $pick->delete();

    $this->redirect('pick/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $pick = $form->save();

      $this->redirect('pick/edit?id='.$pick->getId());
    }
  }
}
