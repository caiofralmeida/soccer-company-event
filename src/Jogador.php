<?php

namespace CaioFRAlmeida\SoccerCompanyEvent;

use Phalcon\Mvc\Model;

class Jogador extends Model
{
    public function initialize()
    {
        $this->setSource('jogador');
        $this->setConnectionService('connection');
        $this->keepSnapshots(true);
    }

    public function beforeSave()
    {

    }
}
