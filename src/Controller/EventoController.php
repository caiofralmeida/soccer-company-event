<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Controller;

class EventoController extends BaseController
{
    public function indexAction()
    {
        echo $this->view->render('painel/eventos');
    }

    public function addAction()
    {

    }
}
