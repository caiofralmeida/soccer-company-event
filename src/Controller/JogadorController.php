<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Controller;

use Phalcon\Mvc\Controller;

class JogadorController extends Controller
{
    public function indexAction()
    {
        echo $this->view->render('painel/jogadores');
    }

    public function addAction()
    {

    }
}
