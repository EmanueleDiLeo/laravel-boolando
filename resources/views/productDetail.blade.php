@extends('layouts.main')


@section('content')
    <div class="container flex">
        @include('partials.cards')
        <div class="card pt-100 ps-50">
            <h1>Descrizione prodotto</h1>
            <p class="text-center">{{$item['description']}}</p>
        </div>

    </div>

@endsection


@section('title')
    | Descrizione Prodotti
@endsection
