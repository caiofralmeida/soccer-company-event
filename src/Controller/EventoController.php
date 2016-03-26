<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Controller;

use Phalcon\Mvc\Controller;

class EventoController extends Controller
{
    public function indexAction()
    {
        echo $this->view->render('painel/eventos');
    }

    public function addAction()
    {

    }
}
