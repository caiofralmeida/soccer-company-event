<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Validator;

class EventoValidation extends Validation
{
    protected $required = [
        'titulo',
        'local',
        'data',
        'periodo',
        'mensal'
    ];
}
