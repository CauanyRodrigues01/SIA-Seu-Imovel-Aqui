@extends('layouts.main')

@section('title', 'imovel')

@section('content')

<div class="col-md-10 offset-md-1">

    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/imoveis/{{$imovel->image}}" class="img-fluid" alt="">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $imovel->tipo }}</h1>
            <p class="imovel-anunciante">Anunciado por {{ $imovelOwner['name'] }}</p>
            <p class="imovel-anuncio">{{ $imovel->tipo_anuncio }}</p>
            <p class="imovel-endereco">{{ $imovel->endereco }}</p>
            <p class="imovel-valor">R$ {{ $imovel->valor }}</p>
        </div>
    </div>

</div>

@endsection
