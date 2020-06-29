 @extends('templates.template')

@section('content')
	
<main class="adminPage adminPageProdutosNovo">
	<div class="contentContainer">
		<div class="header">
			<h2>Novo Produto</h2>
		</div>
		
		<div class="navigation">
			<ul>
				<li><a href="{{ route('admin.produtos.index') }}">Voltar</a></li>
			<ul>
		</div>
		
		@if(session('success'))
			<div class="success_message">{{ session('success') }}</div>
		@elseif(session('erro'))
			<div class="error_message">{{ session('erro') }}</div>
		@endif
		
		<form action="{{ route('produto.cadastrar') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			
			<label for="titulo">Título</label>
			<input type="text" name="titulo" id="titulo" maxlength="191" required>
			
			<label for="descricao">Descrição</label>
			<textarea name="descricao" id="descricao" maxlength="191" required></textarea>
			
			<label for="preco">Preço (R$)</label>
			<input type="text" name="preco" id="preco" maxlength="191" required>
			
			<label for="precoCartao">Preço Cartão</label>
			<input type="text" name="precoCartao" id="precoCartao" maxlength="191" required>
			
			<label for="categoria">Categoria</label>
			<input type="text" name="categoria" id="categoria" maxlength="191" required>
			
			<label for="img">Imagem</label>
			<input type="file" name="img" id="img" required>
			
			<button class="submit" name="submit" value="submit">Adicionar</button>
		</form>
	</div>
</main>

@endsection