@extends('templates.template')

@section('content')

<!-- Main -->
<main class="suportePage">
    <div class="contentContainer">
        <h2>Entre em Contato</h2>

        <form action="{{route('contatar')}}" method="POST">
            {{ csrf_field() }}

            <input type="text" name="nome" placeholder="Seu Nome" maxlength="50" required>
            <input type="text" name="assunto" placeholder="Assunto do Contato" maxlength="60" required>
            <textarea name="mensagem" placeholder="Mensagem" maxlength="450" required></textarea>

            <button type="submit" name="submit" class="submit">Enviar</button>
        </form>
    </div>
</main>

@endsection
