<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Controller;

use CaioFRAlmeida\SoccerCompanyEvent\Validator\EventoValidation;
use CaioFRAlmeida\SoccerCompanyEvent\Evento;

class EventoController extends BaseController
{
    public function indexAction()
    {
        echo $this->view->render('painel/eventos');
    }

    public function addAction()
    {
        $validation = new EventoValidation();
        $validation->validate($this->request->getPost());

        if (!$validation->isValid()) {
            return $this->jsonResponse(['ok' => false, 'messages' => $validation->getMessages()]);
        }

        $evento = new Evento();
        $evento->exchangeArray($this->request->getPost());

        try {
            $evento->save();
        } catch (\Exception $e) {
            return $this->jsonResponse(['ok' => false, 'messages' =>['Erro ao tentar salvar evento.']]);
        }

        return $this->jsonResponse(['ok' => true, 'id' => $evento->getId()]);
    }
}
