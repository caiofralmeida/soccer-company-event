<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Validator;

class JogadorValidation extends Validation
{
    protected $required = [
        'nome',
        'id',
        'departamento'
    ];
}
