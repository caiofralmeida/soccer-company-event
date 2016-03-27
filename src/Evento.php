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
        $this->configurarData($data);
    }

    public function getProximoEvento()
    {
        $hoje = date('Y-m-d');

        return $this->findFirst([
            "dataInicial >= '$hoje 00:00:00'",
            "order" => "dataInicial"
        ]);
    }

    private function configurarData($data)
    {
        $dataInicial = \DateTime::createFromFormat('d/m/Y H:i', $data['data']);
        $this->dataInicial = $dataInicial->format('Y-m-d H:i:s');

        if (isset($data['periodo'])) {
            list($horas, $minutos) = explode(':', $data['periodo']);
            $calculadorData = new CalculadorData($this->dataInicial);
            $calculadorData->adicionarHoras($horas);
            $calculadorData->adicionarMinutos($minutos);
            $this->dataFinal = $calculadorData->getDate()->format('Y-m-d H:i:s');
        }
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

    public function getId()
    {
        return $this->id;
    }
}
