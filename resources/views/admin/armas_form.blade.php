@extends('adminlte::page')
@section('content_header')
<div class='col-sm-11'>
    @if ($opc == 1)
    <h2> Cadastro de Armas</h2>
    @else 
    <h2> Alteração de Armas </h2>
    @endif
</div>
<div class='col-sm-1'>
    <a href="{{route('armas.index')}}" class='btn btn-primary' 
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
    <form method="post" action="{{route('armas.store')}}" enctype="multipart/form-data">
        @else 
        <form method="post" action="{{route('armas.update', $arma->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            @endif
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nome_arm">Nome:</label>
                <input type="text" class="form-control" id="nome_arm" 
                       name="nome_arm" 
                       value="{{$arma->nome_arm or old('nome_arm')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="tipo_arm">Tipo:</label>
                <input type="text" class="form-control" id="tipo_arm" 
                       name="tipo_arm" 
                       value="{{$arma->tipo_arm or old('tipo_arm')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="preco_arm">Preço:</label>
                <input type="text" class="form-control" id="preco_arm" 
                       name="preco_arm" 
                       value="{{$arma->preco_arm or old('preco_arm')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="peso_arm">Peso(Kg):</label>
                <input type="text" class="form-control" id="peso_arm" 
                       name="peso_arm" 
                       value="{{$arma->peso_arm or old('peso_arm')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="dano_arm">Dano:</label>
                <input type="text" class="form-control" id="dano_arm" 
                       name="dano_arm" 
                       value="{{$arma->dano_arm or old('dano_arm')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="propiedade">Propiedade:</label>
                <input type="text" class="form-control" id="propiedade" 
                       name="propiedade" 
                       value="{{$arma->propiedade or old('propiedade')}}">
            </div>
            <div class="form-group">
                <label for="efeito_adicional">Efeito Adicional:</label>
                <input type="text" class="form-control" id="efeito_adicional" 
                       name="efeito_adicional" 
                       value="{{$arma->efeito_adicional or old('efeito_adicional')}}">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
        @endsection