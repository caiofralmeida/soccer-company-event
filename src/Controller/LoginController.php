<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Controller;

use Phalcon\Mvc\Controller;
use CaioFRAlmeida\SoccerCompanyEvent\Auth\Autenticacao;
use CaioFRAlmeida\SoccerCompanyEvent\Entity\Usuario;

class LoginController extends Controller
{
    public function indexAction()
    {
        $html = $this->view->render('login/index');

        $response = new \Phalcon\Http\Response();
        $response->setContent($html);

        return $response;
    }

    public function postAction()
    {
        $usuario = new Usuario(
            $this->request->getPost('username'),
            $this->request->getPost('password')
        );

        $auth = new Autenticacao($this->session);

        if ($auth->bind($usuario)) {
            $this->response->redirect('/');
        } else {
            $this->flashSession->error('Não foi possivel efetuar o login.');
            $this->response->redirect('/login');
        }

        $this->response->sendHeaders();
    }

    public function logoutAction()
    {
        $this->session->destroy();

        $this->response->redirect('/login')
            ->sendHeaders();
    }
}
