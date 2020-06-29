<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelProdutos;

class ProdutosController extends Controller
{
    private $objProduto;

    public function __construct() {
        $this->objProduto=new ModelProdutos();
    }

    public function index(Request $request)
    {
		$view = $request->route()->action['view'];
		
        $produto = $this->objProduto->all();
        return view($view, compact('produto'));
    }

    public function create(Request $request)
    {
        $titulo = $request->titulo;
		$descricao = $request->descricao;
		$preco = $request->preco;
		$precoCartao = $request->precoCartao;
		$categoria = $request->categoria;
		
		$extensoesPermitidas = ['png', 'jpg', 'jpeg'];
		$extensao = $request->img->extension();
		
		if(!in_array($extensao, $extensoesPermitidas)) {
			return redirect()->route('admin.produtos.novo')->with('erro', 'Somente imagens são permitidas.');
		}else {
			$imageName = $request->img->hashName();
			$request->img->store('img/produtos', 'public');
			
			$new = $this->objProduto->create([
				'titulo' => $titulo,
				'descricao' => $descricao,
				'preco' => $preco,
				'preco_cartao' => $precoCartao,
				'categoria' => $categoria,
				'img' => $imageName
			]);
			
			if($new) {
				return redirect()->route('admin.produtos.index')->with('success', 'Produto Adicionado.');
			}
		}
    }
	
    public function show($id)
    {
        $produto = $this->objProduto->find($id);
        return view('produto', compact('produto'));
    }

    public function update(Request $request)
    {
		$id = $request->id;

		if(!empty($request->img)) {
			$extensoesPermitidas = ['png', 'jpg', 'jpeg'];
			$extensao = $request->img->extension();
			
			if(!in_array($extensao, $extensoesPermitidas)) {
				return redirect()->route('admin.produtos.index')->with('erro', 'Somente imagens são permitidas.');
			}else {
				$imageName = $request->img->hashName();
				$request->img->store('img/produtos', 'public');
				
				$editar = $this->objProduto->where(['id' => $id])->update([
					'titulo' => $request->titulo,
					'descricao' => $request->descricao,
					'preco' => $request->preco,
					'preco_cartao' => $request->precoCartao,
					'categoria' => $request->categoria,
					'img' => $imageName
				]);
				
				if($editar) {
					return redirect()->route('admin.produtos.index')->with('success', 'O produto foi editado.');
				}
			}
		}else {
			$editar = $this->objProduto->where(['id' => $id])->update([
				'titulo' => $request->titulo,
				'descricao' => $request->descricao,
				'preco' => $request->preco,
				'preco_cartao' => $request->precoCartao,
				'categoria' => $request->categoria
			]);
			
			if($editar) {
				return redirect()->route('admin.produtos.index')->with('success', 'O produto foi editado.');
			}
		}
    }
	
	public function editar($id) {
		$produto = $this->objProduto->find($id);
		
		return view('admin/produtos/editar', compact('produto'));
	}

    public function destroy($id)
    {
        $delete = $this->objProduto->destroy($id);
		if($delete) {
			return redirect()->route('admin.produtos.index')->with('success', 'O produto foi apagado.');
		}else {
			return redirect()->route('admin.produtos.index')->with('erro', 'Ocorreu um erro ao apagar o produto.');
		}
    }
}
