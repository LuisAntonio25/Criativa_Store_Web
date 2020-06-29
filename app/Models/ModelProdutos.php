<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelProdutos extends Model
{
    protected $table='produtos';
	protected $fillable = ['titulo', 'descricao', 'preco', 'preco_cartao', 'categoria', 'img'];
}
