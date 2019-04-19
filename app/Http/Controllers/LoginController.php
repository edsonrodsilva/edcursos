<?php

namespace Edcursos\Http\Controllers;

use Edcursos\Aluno;
use Illuminate\Support\Facades\Validator;
use Edcursos\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function autenticar($email = null, $senha = null) {

        //Verifica se o aluno preencheu o email
        if(empty($email)) {
            return [
                'message' => 'false'
            ];

//            return [
//                'status' => 'false',
//                'message' => 'Informe o e-mail.'
//            ];
        }

        //Verifica se o aluno preencheu a senha
        if(empty($senha)) {

            return [
                'message' => 'false'
            ];

//            return [
//                'status' => 'false',
//                'message' => 'Informe o senha.'
//            ];
        }

        //Validando o formato do email - O email deve ser um email válido
        $validator = Validator::make(
            ['email' => $email],
            ['email' => 'email']
        );

        //Se o email não for valido informa o usuário
        if ($validator->fails())
        {
            return [
                'message' => 'false'
            ];

//            return [
//                'status' => 'false',
//                'message' => 'Formato de e-mail incorreto.'
//            ];
        } else {

            $emailCadastrado = Aluno::where('email', '=', $email)->first();

            if(empty($emailCadastrado)) {

                return [
                    'message' => 'false'
                ];

//                return [
//                    'status' => 'false',
//                    'message' => 'E-mail nao cadastrado.'
//                ];
            }

            $aluno = Aluno::where('email', '=', $email)->where('senha', '=', $senha)->first();

            if(empty($aluno)) {

                return [
                    'message' => 'false'
                ];

//                return [
//                    'status' => 'false',
//                    'message' => 'Senha esta incorreta.'
//                ];
            }

            return [
                'message' => 'true'
            ];
        }

    }

    protected function validator(array $data) {
        return Validator::make($data, [
            'email' => 'email'
        ]);
    }
}
