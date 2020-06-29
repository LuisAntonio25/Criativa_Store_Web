<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
	
	private $objUser;
	
	public function __construct() {
		$this->objUser = new User();
	}

    public function index(Request $request)
    {
        $view = $request->route()->action['view'];
		
        $usuario = $this->objUser->all();
        return view($view, compact('usuario'));
    }
	
	public function store(Request $request) {
		
		$email = $request->email;
        $senha = $request->senha;
		
		$user = $this->objUser->where([['email', '=', $email], ['password', '=', $senha]])->count() > 0;
		
		if(!$user) {
			return redirect('login')->with('erro', 'Os dados estão incorretos.');
		}else {
			$user = $this->objUser->where([['email', '=', $email], ['password', '=', $senha]])->first();
			
			session([
				'user_name' => $user->name,
				'user_email' => $user->email,
				'user_access' => $user->access,
			]);
			
			return redirect()->route('welcome');
		}
	}

    public function create(Request $request)
    {
        $nome = $request->nome;
        $email = $request->email;
        $senha = $request->senha;
        $repetirSenha = $request->repetirSenha;

        if($senha != $repetirSenha) {
            return redirect('cadastro')->with('erro', 'As senhas não combinam.');
        }else {
			$user = $this->objUser->where('email', $email)->count() > 0;
			
			if($user) {
				return redirect('cadastro')->with('erro', 'Este email já está sendo usado.');
			}else {
				$this->objUser->create([
					'name' => $nome,
					'email' => $email,
					'password' => $senha,
					'access' => 1,
				]);
				
				return redirect()->route('login')->with('success', 'Sua conta foi criada, faça o login.');
			}
        }
    }
	
	public function editar($id) {
		$usuario = $this->objUser->find($id);
		
		return view('admin/usuarios/editar', compact('usuario'));
	}
	
	public function update(Request $request) {
		$id = $request->id;
		
		if(!empty($request->senha)) {
			if($request->senha != $request->repetirSenha) {
				return redirect()->route('admin.usuarios.index')->with('erro', 'As senhas não combinam.');
			}else {
				$thisUser = $this->objUser->find($id);
				
				if($thisUser->email != $request->email) {
					$checkEmail = $this->objUser->where('email', $request->email)->count() > 0;
					
					if($checkEmail) {
						return redirect()->route('admin.usuarios.index')->with('erro', 'Este email já está sendo usado.');
					}else {
						$editar = $this->objUser->where(['id' => $id])->update([
							'name' => $request->nome,
							'email' => $request->email,
							'password' => $request->senha,
							'access' => $request->acesso
						]);
						
						if($editar) {
							return redirect()->route('admin.usuarios.index')->with('success', 'O usuário foi editado.');
						}else {
							return redirect()->route('admin.usuarios.index')->with('erro', 'Erro ao editar o usuário.');
						}
					}
				}else {
					$editar = $this->objUser->where(['id' => $id])->update([
						'name' => $request->nome,
						'password' => $request->senha,
						'access' => $request->acesso
					]);
					
					if($editar) {
						return redirect()->route('admin.usuarios.index')->with('success', 'O usuário foi editado.');
					}else {
						return redirect()->route('admin.usuarios.index')->with('erro', 'Erro ao editar o usuário.');
					}
				}
			}
		}else {
			$thisUser = $this->objUser->find($id);
				
			if($thisUser->email != $request->email) {
				$checkEmail = $this->objUser->where('email', $request->email)->count() > 0;
				
				if($checkEmail) {
					return redirect()->route('admin.usuarios.index')->with('erro', 'Este email já está sendo usado.');
				}else {
					$editar = $this->objUser->where(['id' => $id])->update([
						'name' => $request->nome,
						'email' => $request->email,
						'access' => $request->acesso
					]);
					
					if($editar) {
						return redirect()->route('admin.usuarios.index')->with('success', 'O usuário foi editado.');
					}else {
						return redirect()->route('admin.usuarios.index')->with('erro', 'Erro ao editar o usuário.');
					}
				}
			}else {
				$editar = $this->objUser->where(['id' => $id])->update([
					'name' => $request->nome,
					'access' => $request->acesso
				]);
				
				if($editar) {
					return redirect()->route('admin.usuarios.index')->with('success', 'O usuário foi editado.');
				}else {
					return redirect()->route('admin.usuarios.index')->with('erro', 'Erro ao editar o usuário.');
				}
			}
		}
	}

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('welcome');
    }
	
	public function destroy($id) {
		$delete = $this->objUser->destroy($id);
		
		if($delete) {
			return redirect()->route('admin.usuarios.index')->with('success', 'O usuário foi apagado.');
		}else {
			return redirect()->route('admin.usuarios.index')->with('erro', 'Erro ao apagar o usuário.');
		}
	}
}
