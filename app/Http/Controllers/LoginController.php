<?php

namespace App\Http\Controllers;

use App\Entity\LoginEntity;
use App\Enums\SituacaoEnum;
use Illuminate\Http\Request;
use Doctrine\ORM\EntityManagerInterface;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller{

    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getLogin() {
        return view('login');
    }

    public function postLogin(Request $request) {
        if ($request->isMethod('post')) {
            $loginEntity = $this->em->getRepository(LoginEntity::class)->findOneBy(['usuario' => $request->input('login'),
                                                                                    'situacao'  => SituacaoEnum::ATIVO()->getConstValue()
                                                                                    ]);

            if($loginEntity) {
                $senhaValida = Hash::check($request->input('senha'), $loginEntity->getSenha());
                if ($senhaValida) {
                    return redirect('inicio');
                }
            }
        }
    }

}