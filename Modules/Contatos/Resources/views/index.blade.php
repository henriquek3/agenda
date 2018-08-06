@extends('contatos::layouts.master')

@section('content')
    <h1>Contatos</h1>

    <div class="ui segment">
        <a class="ui primary button" href="/contatos/novo">Incluir</a>
        <table class="ui celled table">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Endereço</th>
                <th>Grupos</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($resources as $rs)
                <tr>
                    <td>{{$rs->id}}</td>
                    <td>{{$rs->name}}</td>
                    <td>{{--{{$rs->phone->number}}--}}</td>
                    <td>{{--{{$rs->mails->mail}}--}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @empty
                <tr><td colspan="7">Não existem contatos para exibir</td></tr>
            @endforelse
            </tbody>
            {{--<tfoot>
            <tr>
                <th colspan="7">
                    <div class="ui right floated pagination menu">

                    </div>
                </th>
            </tr>
            </tfoot>--}}
        </table>
        {{$resources->links('vendor.pagination.semantic-ui')}}
    </div>


@stop