<?php

namespace User\Controller;

use User\Form\UserForm;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{
    /**
     * @var UserForm
     */
    private $form;
    /**
     * @var EntityRepository
     */
    private $repository;
    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(
        EntityManager $entityManager,
        UserForm $form,
        EntityRepository $repository
    )
    {
        $this->form = $form;
        $this->repository = $repository;
        $this->entityManager = $entityManager;
    }

    public function indexAction()
    {
        return new ViewModel([
            'users' => $this->repository->findAll(),
            'entityManager' => $this->entityManager
        ]);
    }

    /**
     * @return array|\Zend\Http\Response
     */
    public function addAction()
    {
        $form = $this->form;
        $form->get('submit')->setValue('Incluir');

        $request = $this->getRequest();

        if (!$request->isPost()) {
            echo "NAO EH POST";
            return [
                'form'   => $form
            ];
        }

        $form->setData($request->getPost());

        if (!$form->isValid()) {
            print_r($form->getMessages());
            echo "NAO EH VALIDO";
            return [
                'form'   => $form,
            ];
        }

        $user = $form->getData();
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return $this->redirect()->toRoute('admin/users');
    }

    public function editAction()
    {
        $id = (int)$this->params()->fromRoute('id', 0);

        if (!$id || !($user = $this->repository->find($id))) {
            return $this->redirect()->toRoute('admin/users');
        }

        $form = $this->form;
        $form->bind($user);
        $form->get('submit')->setAttribute('value', 'Editar');

        $request = $this->getRequest();
        if (!$request->isPost()) {
            return [
                'id' => $id,
                'form' => $form
            ];
        }

        $form->setData($request->getPost());
        if ( !$form->isValid() ) {
            echo "SDS";
            return [
                'id' => $id,
                'form' => $form
            ];
        }

        $this->entityManager->flush();
        return $this->redirect()->toRoute('admin/users');
    }

    public function deleteAction()
    {
        $id = (int)$this->params()->fromRoute('id', 0);

        if (!$id || !($user = $this->repository->find($id))) {
            return $this->redirect()->toRoute('admin/users');
        }

        $this->entityManager->remove($user);
        $this->entityManager->flush();
        return $this->redirect()->toRoute('admin/users');

    }

}