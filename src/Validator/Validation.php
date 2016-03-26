<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Validator;

use Phalcon\Validation as PhalconValidation;
use Phalcon\Validation\Validator\PresenceOf;

class Validation extends PhalconValidation
{
    protected $required;

    public function initialize()
    {
        $this->addRequired();
    }

    protected function addRequired()
    {
        foreach ($this->required as $field) {
            $this->add(
                $field,
                new PresenceOf([
                    'message' => sprintf('O campo %s é obrigatório', $field)
                ])
            );
        }
    }

    public function isValid()
    {
        return (count($this->getMessages()) == 0);
    }

    public function getMessages()
    {
        $messages = [];

        foreach(parent::getMessages() as $message)
        {
            $messages[] = $message->getMessage();
        }

        return $messages;
    }
}
