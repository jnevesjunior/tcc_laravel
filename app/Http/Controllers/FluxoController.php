<?php

namespace App\Http\Controllers;

use App\Entity\FluxoEntity;
use App\Entity\Pessoa;
use App\Enums\SituacaoEnum;
use LaravelDoctrine\ORM\Facades\EntityManager;

class FluxoController extends Controller{

    public function fluxo() {
        return view('fluxo');
    }

    public function novoFluxo() {
        $pessoaEntity = EntityManager::getRepository(Pessoa::class);
        $pessoa = $pessoaEntity->find('1');

        $fluxoEntity = new FluxoEntity();
        $fluxoEntity->setIdPessoa($pessoa);
        $fluxoEntity->setSituacao(SituacaoEnum::ATIVO());

        EntityManager::persist($fluxoEntity);
        EntityManager::flush();
    }

    public function fluxoApi() {
        $fluxoEntity = EntityManager::getRepository(FluxoEntity::class);
        $fluxos = $fluxoEntity->findAll();

        return response()->json([['label' => 'total', 'value' => 1], ['label' => 'total2', 'value' => count($fluxos)]]);
    }
}