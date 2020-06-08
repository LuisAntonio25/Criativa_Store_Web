<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function logar(Request $request) {
        $email = $request->email;
        $senha = $request->senha;
        
        if($email != 'admin@email.com') {
            echo '<p>Email Inválido.</p>';
            echo '<a href="login">Voltar ao Login</a>';
        }else if ($senha != '123456') {
            echo '<p>Senha Inválida.</p>';
            echo '<a href="login">Voltar ao Login</a>';
        }else {
            session([
                'user_nome' => 'Luis'
            ]);

            return redirect()->route('welcome');
        }
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->route('welcome');
    }
    
    public function cadastrar(Request $request) {
        $nome = $request->nome;
        $email = $request->email;
        $senha = $request->senha;

	    echo '<p>O usuário foi cadastrado!</p>';
        echo '<a href="/">Ir a Tela Inicial</a>';
        
        // Cadastra no banco de dados
    }
    
    public function contatar(Request $request) {
        $nome = $request->nome;
        $assunto = $request->assunto;
        $mensagem = $request->mensagem;
        
        echo '<p>Mensagem Enviada!</p>';
        echo '<a href="/">Ir a Tela Inicial</a>';
        
        // Insere no banco de dados
    }
}
