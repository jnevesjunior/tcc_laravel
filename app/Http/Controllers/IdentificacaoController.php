<?php

namespace App\Http\Controllers;

use App\Entity\Identificacao;
use LaravelDoctrine\ORM\Facades\EntityManager;

class IdentificacaoController extends Controller{

    public function identificacao() {
        $identificacaoEntity = EntityManager::getRepository(Identificacao::class);
        $identificacoes = $identificacaoEntity->findAll();

        return view('identificacao', ['identificacoes' => $identificacoes]);
    }
}