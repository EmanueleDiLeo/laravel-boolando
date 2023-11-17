<?php
    $filters = config('menues.filters');
    $profile = config('menues.profile');
?>

<header>
    <div class="container flex">
        <nav class="main-menu">
            <ul class="flex">
                @foreach ($filters as $item)
                    <li>
                        <a href="{{ route($item['href']) }}"><strong>{{$item['text']}}</strong></a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <img src="/img/boolean-logo.png" alt="logo" title="logo">
        <nav class="shop-menu">
            <ul class="flex">
                @foreach ( $profile as $item )
                    <li>
                        <a href="{{$item['href']}}"><i class="{{$item['icon']}}"></i></a>
                    </li>
                @endforeach

            </ul>
        </nav>
    </div>
</header>
