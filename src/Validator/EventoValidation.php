<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Validator;

class EventoValidation extends Validation
{
    protected $required = [
        'nome',
        'local',
        'data',
        'periodo',
        'mensal'
    ];
}
