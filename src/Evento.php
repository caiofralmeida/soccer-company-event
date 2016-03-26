<?php

namespace CaioFRAlmeida\SoccerCompanyEvent;

use Phalcon\Mvc\Model;
use CaioFRAlmeida\SoccerCompanyEvent\Exception\SaveException;
use CaioFRAlmeida\SoccerCompanyEvent\Date\CalculadorData;

class Evento extends Model
{
    private $id;
    public $nome;
    public $local;
    public $dataInicial;
    public $dataFinal;

    public function initialize()
    {
        $this->setSource('evento');
        $this->setConnectionService('connection');
        $this->keepSnapshots(true);
    }

    public function exchangeArray($data)
    {
        $this->nome = isset($data['nome']) ? $data['nome']: null;
        $this->local = isset($data['local']) ? $data['local']: null;
        $this->dataInicial = $data['data'];
        $this->dataFinal = CalculadorData::add
    }

    public function columnMap()
    {
        return [
            'id'           => 'id',
            'nome'         => 'nome',
            'local'        => 'local',
            'data_inicial' => 'dataInicial',
            'data_final'   => 'dataFinal'
        ];
    }

    public function save($data = [], $whitelist = [])
    {
        if (!parent::save($data, $whitelist)) {
            throw new SaveException();
        }
    }
}
