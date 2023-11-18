@extends('layouts.main')


@section('content')

    <h1>Benvenuto in Booleando</h1>
        <div class="container flex">
        @foreach ($products as $item)
            @include('partials.cards')
        @endforeach
    </div>


@endsection


@section('title')
    | Homepage
@endsection
