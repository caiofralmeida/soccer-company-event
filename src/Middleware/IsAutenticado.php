<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Middleware;

use CaioFRAlmeida\SoccerCompanyEvent\Auth\Autenticacao;
use Phalcon\Mvc\Micro\MiddlewareInterface;
use Phalcon\Mvc\Micro;

class IsAutenticado implements MiddlewareInterface
{
    public function call(Micro $app)
    {
        $rotaAtual = $app->router->getMatchedRoute()->getPattern();

        $app->session->start();
        $isAuth = $app->session->get(Autenticacao::AUTH);

        if ($rotaAtual != '/login' && !$isAuth) {
            $app->response->redirect('/login')
                ->sendHeaders();
        } elseif ($rotaAtual == '/login' && $isAuth) {
            $app->response->redirect('/')
                ->sendHeaders();
        }

        return false;
    }
}
