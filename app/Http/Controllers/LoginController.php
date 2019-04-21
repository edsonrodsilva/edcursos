<?php

namespace Edcursos\Http\Controllers;

use Edcursos\Aluno; //Model Aluno
use Illuminate\Support\Facades\Validator;
use Edcursos\Http\Controllers\Controller;

/**
 * Class LoginController
 * Classe responsável por altenticar um aluno
 */
class LoginController extends Controller
{

    /**
     * Metodo responsável por autenticar um aluno
     * O Aluno é autenticado apenas se retornar o status true
     * @param null $email
     * @param null $senha
     * @return array
     */
    public function autenticar($email = null, $senha = null) {

        //Validando o formato do email - O email deve ser um email válido
        $validator = $this->validator(['email' => $email]);

        //Se o email não for valido informa o usuário
        if ($validator->fails())
        {
            return [
                'status' => 'false',
                'message' => 'Formato de e-mail incorreto.'
            ];
        } else {

            //Faz a busca no model Aluno para sertificar que o email esta cadastrado
            $emailCadastrado = Aluno::where('email', '=', $email)->first();

            if(empty($emailCadastrado)) {
                return [
                    'status' => 'false',
                    'message' => 'E-mail não cadastrado.'
                ];
            }

            //Verifica se o email e a senha corresponde aos dados cadastrados
            $aluno = Aluno::where('email', '=', $email)->where('senha', '=', $senha)->first();

            if(empty($aluno)) {
                return [
                    'status' => 'false',
                    'message' => 'Senha está incorreta.'
                ];
            }

            return [
                'status' => 'true'
            ];
        }
    }

    /**
     * Valida se um e-mail está no formato correto
     * @param array $data
     * @return mixed
     */
    protected function validator(array $data) {
        return Validator::make($data, [
            'email' => 'email'
        ]);
    }
}
