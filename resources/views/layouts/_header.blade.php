<header>
  <div class="navbar navbar-dark box-shadow">
    <div class="container d-flex justify-content-between">
      <a href="/" class="navbar-brand d-flex align-items-center">
        <img src="{{ $config['site_logo']['value'] }}" alt="">
      </a>
      <ul class="nav justify-content-end nav-index">
        @foreach($naves as $nav)
        <li class="nav-item">
          <a class="nav-link text-muted @if($current_nav['id'] == $nav['id']) active @endif"
             href="{{ $nav['url'] }}">{{ $nav['title'] }}</a>
          <div class="nav-index-border"></div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ $current_nav['cover_url'] }}" alt="{{ $current_nav['title'] }}">
      </div>
    </div>
  </div>
</header>