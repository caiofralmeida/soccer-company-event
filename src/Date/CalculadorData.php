<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Date;

use CaioFRAlmeida\SoccerCompanyEvent\Exception\InvalidDateException;

use DateTime;

class CalculadorData
{
    protected $data;
    protected $dataCalculada;

    public function __construct($data = null)
    {
        $this->setDate($data);
    }

    public function adicionarMinutos($minutos)
    {
        $this->converterParaDateTime();

        $this->dataCalculada->modify("+$minutos minutes");
        return $this;
    }

    public function adicionarHoras($horas)
    {
        $this->converterParaDateTime();

        $this->dataCalculada->modify("+$horas hours");
        return $this;
    }

    public function setDate($data)
    {
        $this->data = $data;
    }

    public function getDate()
    {
        return $this->dataCalculada;
    }

    private function converterParaDateTime()
    {
        if ($this->dataCalculada instanceof DateTime)
        {
            return;
        }

        try {
            $this->dataCalculada = new DateTime($this->data);
        } catch (\Exception $e) {}

        $warnings = DateTime::getLastErrors()['warning_count'];
        $errors   = DateTime::getLastErrors()['error_count'];

        if ($warnings > 0 || $errors > 0) {
            throw new InvalidDateException('data invalida.');
        }
    }
}
