@extends('layouts.main')


@section('content')
    <h1>Prodotti Uomo</h1>
    <div class="container flex">
        @foreach ($products as $item)
            @if ($item['gender'] == 'man')
                @include('partials.cards')
            @endif
        @endforeach
    </div>


@endsection


@section('title')
    | Prodotti Uomo
@endsection
