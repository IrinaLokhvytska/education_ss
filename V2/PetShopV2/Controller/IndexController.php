<?php
require_once '/../Model/PetShop.php';

class IndexController
{
    private $petShop;
    private $view;

    public function __construct()
    {
        $this->petShop = new PetShop();
        $this->view = new View();
    }

    public function indexAction()
    {
        $petShop = $this->petShop;
        $cats = $petShop->getCats();
        $data = array('cats'=>$cats);
        $view = $this->view;
        $view->render('/View/template.php', $data);
    }

    public function fluffyAction()
    {
        $petShop = $this->petShop;
        $fluffy = $petShop->getFluffyPets();
        $data = array('fluffy'=>$fluffy);
        $view = $this->view;
        $view->render('/View/fluffy.php', $data);
    }

    public function whiteAction()
    {
        $petShop = $this->petShop;
        $whitePets = $petShop->getWhitePets();
        $data = array('whitePets'=>$whitePets);
        $view = $this->view;
        $view->render('/View/white.php', $data);
    }

    public function expensiveAction()
    {
        $petShop = $this->petShop;
        $expensivePets = $petShop->getExpensivePets();
        $data = array('expensivePets'=>$expensivePets);
        $view = $this->view;
        $view->render('/View/expensive.php', $data);
    }
}