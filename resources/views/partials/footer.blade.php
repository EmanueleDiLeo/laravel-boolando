<?php
    $socials = config('socials.social');
?>


<footer>
    <div class="container flex">
      <div>
        <h3>Booleando s.r.l</h3>
        <span>Informazioni legali</span>
        <span>Informativa sulla privacy</span>
        <span>Diritto di recesso</span>
      </div>

      <div>
        <span>Trovaci anche su</span>

        <ul class="flex">
            @foreach ($socials as $item)
                <li>
                    <a href="{{$item['href']}}"><i class="{{$item['icon']}}"></i></a>
                </li>
            @endforeach


        </ul>
      </div>
    </div>
  </footer>
