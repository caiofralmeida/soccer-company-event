<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Controller;

use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;

abstract class BaseController extends Controller
{
    protected function jsonResponse($data)
    {
        $response = new Response();
        $response->setContentType('application/json', 'UTF-8');
        $response->setJsonContent($data);

        return $response;
    }
}
