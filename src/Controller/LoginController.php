<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Controller;

use Phalcon\Mvc\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        echo $this->view->render('login/index');
    }

    public function postAction()
    {
        die('opaa');
    }
}
