<footer class="footer">
  <div class="footerContainer">
    <a href="{{ home_url('/') }}" class="logo footer__logo">
      <img class="logo__symbol logo__animate" src="{{ get_stylesheet_directory_uri() }}/dist/images/ft_logo.svg" alt="">
      <h1 class="logo__brand logo__animate">anonymous<span class="subtitle">front-end developer in Vancouver</span></h1>
    </a>

    <ul class="ftNav">
      <li class="ftNav__list"><a href="{{ home_url('/') }}">home</a></li>
      <li class="ftNav__list"><a href="/about">about</a></li>
      <li class="ftNav__list"><a href="/contact">contact</a></li>
    </ul>

    {{--@php(dynamic_sidebar('sidebar-footer'))--}}
  </div>
</footer>