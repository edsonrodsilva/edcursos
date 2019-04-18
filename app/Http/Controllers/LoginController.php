<?php

namespace Edcursos\Http\Controllers;

use Edcursos\Aluno;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function autenticar($email = null, $senha = null) {

        //Verifica se o aluno preencheu o email
        if(empty($email)) {
            return [
                'status' => 'false',
                'message' => 'Informe o e-mail.'
            ];
        }

        //Verifica se o aluno preencheu a senha
        if(empty($senha)) {
            return [
                'status' => 'false',
                'message' => 'Informe o senha.'
            ];
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
                'status' => 'false',
                'message' => 'Formato de e-mail incorreto.'
            ];
        } else {

            $emailCadastrado = Aluno::where('email', '=', $email)->first();

            if(empty($emailCadastrado)) {
                return [
                    'status' => 'false',
                    'message' => 'E-mail nao cadastrado.'
                ];
            }

            $aluno = Aluno::where('email', '=', $email)->where('senha', '=', $senha)->first();

            if(empty($aluno)) {
                return [
                    'status' => 'false',
                    'message' => 'Senha esta incorreta.'
                ];
            }

            return [
                'status' => 'true'
            ];
        }

    }

    protected function validator(array $data) {
        return Validator::make($data, [
            'email' => 'email'
        ]);
    }
}
