<?php

namespace CaioFRAlmeida\SoccerCompanyEvent;

use Phalcon\Mvc\Model;
use CaioFRAlmeida\SoccerCompanyEvent\Security\HashGenerator;
use CaioFRAlmeida\SoccerCompanyEvent\Exception\SaveException;

class Jogador extends Model
{
    private $id;
    private $matricula;
    public $nome;
    public $departamento;
    private $pontuacao;

    public function initialize()
    {
        $this->setSource('jogador');
        $this->setConnectionService('connection');
        $this->keepSnapshots(true);
    }

    public function exchangeArray($data)
    {
        if ($this->id === null) {
            $this->id = HashGenerator::random();
        }

        $this->matricula = isset($data['id']) ? $data['id']: null;
        $this->nome = isset($data['nome']) ? $data['nome']: null;
        $this->departamento = isset($data['departamento']) ? $data['departamento']: null;
    }

    public function save($data = [], $whitelist = [])
    {
        if (!parent::save($data, $whitelist)) {
            throw new SaveException();
        }
    }

    public function getId()
    {
        return $this->id;
    }
}
