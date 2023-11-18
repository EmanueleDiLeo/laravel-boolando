
    <div class="card">
        <div>
           <a href="{{ route('productDetail', ['slug' => $item['slug']]) }}">
        <div class="cont-img">
            <img src="/img/{{$item['img']}}" title="{{$item['brand']}}">
            <img class="switch" src="/img/{{$item['imgHover']}}" alt="{{$item['brand']}}" title="{{$item['brand']}}">
        </div>

        <div class="box-position">
            @if ($item['discount'] != null)
                <span class="offer">{{$item['discount']}}</span>
            @endif

            @if ($item['green'] != null)
                <span class="green">{{$item['green']}}</span>
            @endif
        </div>
        </a>
        </div>


        <span class="heart {{$item['favorite'] === true ? 'active' : ''}}">&hearts;</span>

        <span>{{$item['brand']}}</span>
        <h2>{{$item['name']}}</h2>
        <span class="price">{{$item['price']}} </span>
        @if ($item['priceOld'] != null)
            <span class="old-price">{{$item['priceOld']}}</span>
        @endif

    </div>

