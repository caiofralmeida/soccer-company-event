<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Entity;

class Usuario
{
    private $login;
    private $senha;
    private $nome;
    private $departamento;

    public function __construct($login, $senha)
    {
        $this->login = $login;
        $this->senha = $senha;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
        return $this;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }
}
