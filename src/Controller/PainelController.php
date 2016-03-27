<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Controller;

use CaioFRAlmeida\SoccerCompanyEvent\Evento;

class PainelController extends BaseController
{
    public function indexAction()
    {
        $evento = new Evento();
        $proximoEvento = $evento->getProximoEvento();

        $this->view->setVar('proximoEvento', $proximoEvento);
        echo $this->view->render('painel/index');
    }
}
