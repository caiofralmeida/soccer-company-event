<?php

namespace CaioFRAlmeida\SoccerCompanyEvent\Controller;

use CaioFRAlmeida\SoccerCompanyEvent\Validator\JogadorValidation;
use CaioFRAlmeida\SoccerCompanyEvent\Jogador;

class JogadorController extends BaseController
{
    public function indexAction()
    {
        $jogadores = Jogador::find();

        $this->view->setVar('jogadores', $jogadores);
        echo $this->view->render('painel/jogadores');
    }

    public function addAction()
    {
        $validation = new JogadorValidation();
        $validation->validate($this->request->getPost());

        if (!$validation->isValid()) {
            return $this->jsonResponse(['ok' => false, 'messages' => $validation->getMessages()]);
        }

        $jogador = new Jogador();
        $jogador->exchangeArray($this->request->getPost());

        try {
            $jogador->save();
        } catch (\Exception $e) {
            return $this->jsonResponse(['ok' => false, 'messages' => ['Erro ao adicionar jogador.']]);
        }

        return $this->jsonResponse(['ok' => true, 'id' => $jogador->getId()]);
    }
}
