<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Security;

class HashGenerator
{
    public static function random()
    {
        return sha1(uniqid(rand(), true));
    }
}
