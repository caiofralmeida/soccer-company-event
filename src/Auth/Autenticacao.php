<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Auth;

use CaioFRAlmeida\SoccerCompanyEvent\Entity\Usuario;
use Phalcon\Session\Adapter;

class Autenticacao
{
    protected $sessionAdapter;

    const AUTH = 'auth';

    public function __construct(Adapter $sessionAdapter)
    {
        $this->sessionAdapter = $sessionAdapter;
        $this->sessionAdapter->start();
    }

    public function bind(Usuario $usuario)
    {
        if ($usuario->getLogin() == 'caio.almeida' && $usuario->getSenha() == '123') {
            $this->sessionAdapter->set(self::AUTH, ['login' => $usuario->getLogin()]);
            return true;
        }

        return false;
    }
}
