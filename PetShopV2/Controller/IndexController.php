<?php

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
        $cats = $this->petShop->getCats();
        $data = ['cats'=>$cats];

        $this->view->render('/View/template.php', $data);
    }

    public function fluffyAction()
    {
        $fluffy = $this->petShop->getFluffyPets();
        $data = ['fluffy'=>$fluffy];

        $this->view->render('/View/fluffy.php', $data);
    }

    public function whiteAction()
    {
        $whitePets = $this->petShop->getWhitePets();
        $data = ['whitePets'=>$whitePets];

        $this->view->render('/View/white.php', $data);
    }

    public function expensiveAction()
    {
        $expensivePets = $this->petShop->getExpensivePets();
        $data = ['expensivePets'=>$expensivePets];

        $this->view->render('/View/expensive.php', $data);
    }
}