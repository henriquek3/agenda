@extends('contatos::layouts.master')

@section('content')
    <h1>Inserir Novo Contato</h1>

    <div class="ui segment">
        <form action="{{url()->current()}}" class="ui form" method="POST">
            @csrf
            <div class="fields">
                <div class="eight wide field">
                    <label>Nome</label>
                    <input type="text" name="name" placeholder="Nome" required>
                </div>
                <div class="eight wide field">
                    <label>Idade</label>
                    <input type="number" name="age" placeholder="Idade" required>
                </div>
            </div>
            <button class="ui button" type="submit">Enviar</button>
        </form>
    </div>
@stop