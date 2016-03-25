<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Controller;

use Phalcon\Mvc\Controller;

class PainelController extends Controller
{
    public function indexAction()
    {
        echo $this->view->render('painel/index');
    }
}
