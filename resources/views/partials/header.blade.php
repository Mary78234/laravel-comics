<header>
  <div class="container">

    <a href="/">
      <img src="{{ asset('img/dc-logo.png') }}" alt="logo dc">
    </a>

    <nav>
      <ul>
        
        @foreach ($links as $link)
          <li>
            <a class="{{(request()->is('/')) ? 'active' : ''}}" href="{{ route($link['url']) }}"> {{ $link['text'] }} </a>
          </li>
        @endforeach

      </ul>
    </nav>


  </div>
</header>