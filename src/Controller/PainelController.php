<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Controller;

class PainelController extends BaseController
{
    public function indexAction()
    {
        echo $this->view->render('painel/index');
    }
}
