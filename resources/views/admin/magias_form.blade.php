@extends('adminlte::page')
@section('content_header')
<div class='col-sm-11'>
    @if ($opc == 1)
    <h2> Cadastro de Magia </h2>
    @else 
    <h2> Alteração de Magia </h2>
    @endif
</div>
<div class='col-sm-1'>
    <a href="{{route('magias.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
<div class="col-sm-12">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif    
</div>
<div class='col-sm-12'>
    @if ($opc == 1)
    <form method="post" action="{{route('magias.store')}}" enctype="multipart/form-data">
        @else 
        <form method="post" action="{{route('magias.update', $magia->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            @endif
            {{ csrf_field() }}

            <div class='col-sm-12'>
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" 
                       name="nome" 
                       value="{{$magia->nome or old('nome')}}"
                       required>
            </div>
            <div class='col-sm-12'>
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" 
                       name="descricao" 
                       value="{{$magia->descricao or old('descricao')}}"
                       required>
            </div>
            <div class='col-sm-3'>
                <label for="conjuradores_mag">Conjuradores:</label>
                <input type="text" class="form-control" id="conjuradores_mag" 
                       name="conjuradores_mag" 
                       value="{{$magia->conjuradores_mag or old('conjuradores_mag')}}"
                       required>
            </div>
            <div class='col-sm-3'>
                <label for="nivel_mag">Nivel:</label>
                <input type="text" class="form-control" id="nivel_mag" 
                       name="nivel_mag" 
                       value="{{$magia->nivel_mag or old('nivel_mag')}}"
                       required>
            </div>
            <div class='col-sm-3'>
                <label for="escola_mag">Escola:</label>
                <input type="text" class="form-control" id="escola_mag" 
                       name="escola_mag" 
                       value="{{$magia->escola_mag or old('escola_mag')}}"
                       required>
            </div>
            <div class='col-sm-3'>
                <label for="tempo_mag">Tempo:</label>
                <input type="text" class="form-control" id="tempo_mag" 
                       name="tempo_mag" 
                       value="{{$magia->tempo_mag or old('tempo_mag')}}"
                       required>
            </div>
            <div class='col-sm-3'>
                <label for="componentes_mag">Componentes:</label>
                <input type="text" class="form-control" id="componentes_mag" 
                       name="componentes_mag" 
                       value="{{$magia->componentes_mag or old('componentes_mag')}}"
                       required>
            </div>
            <div class='col-sm-3'>
                <label for="alcance_mag">Alcance:</label>
                <input type="text" class="form-control" id="alcance_mag" 
                       name="alcance_mag" 
                       value="{{$magia->alcance_mag or old('alcance_mag')}}"
                       required>
            </div>
            <div class='col-sm-3'>
                <label for="duracao_mag">Duração:</label>
                <input type="text" class="form-control" id="duracao_mag" 
                       name="duracao_mag" 
                       value="{{$magia->duracao_mag or old('duracao_mag')}}"
                       required>
            </div>
            <label>&nbsp</label>
            <div class='col-sm-12'>
            <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
        @endsection