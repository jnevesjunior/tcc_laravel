<?php

namespace App\Http\Controllers;

use App\Entity\Identificacao;
use App\Entity\Pessoa;
use App\Enums\SituacaoEnum;
use LaravelDoctrine\ORM\Facades\EntityManager;

class InicioController extends Controller{

    public function inicio() {
//        $teste = $this->teste();
        $pessoaEntity = EntityManager::getRepository(Pessoa::class);
        $pessoas = $pessoaEntity->findAll();

//        $pessoa = $pessoaEntity->find('1');
//        $this->indentificacao($pessoa);
//        dd($pessoa);

        return view('inicio', ['pessoas' => $pessoas]);
    }

    public function teste() {
        $pessoa = new Pessoa();
        $pessoa->setCel('cel');
        $pessoa->setCpf('cpf');
        $pessoa->setEmail('email');
        $pessoa->setNome('nome');
        $pessoa->setRg('rg');
        $pessoa->setSituacao(SituacaoEnum::ATIVO());
        $pessoa->setTel('tel');

        EntityManager::persist($pessoa);
        EntityManager::flush();

//        dd($pessoa);
    }

    public function indentificacao($pessoa) {
        $identificacao = new Identificacao();
        $identificacao->setRfid('asadaf');
        $identificacao->setIdPessoa($pessoa);
        $identificacao->setSenha('oi');
        $identificacao->setSituacao(SituacaoEnum::ATIVO());

        EntityManager::persist($identificacao);
        EntityManager::flush();
    }
}