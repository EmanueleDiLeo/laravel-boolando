@extends('layouts.main')


@section('content')
    <h1>Prodotti Donna</h1>
    <div class="container flex">
        @foreach ($products as $item)
            @if ($item['gender'] == 'woman')
                @include('partials.cards')
            @endif
        @endforeach
    </div>

@endsection


@section('title')
    | Prodotti Donna
@endsection
