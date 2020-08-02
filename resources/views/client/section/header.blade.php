<header class="header">
  <div class="header__top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="header__top__left">
            <ul>
              <li><i class="fa fa-envelope"></i> nkn19991101@gmail.com</li>
              <li>Free Shipping for all Order of $99</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="header__top__right">
            <div class="header__top__right__social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>

            </div>
            <div class="header__top__right__language">
              <img src="img/language.png" alt="">
              <div>English</div>
              <span class="arrow_carrot-down"></span>
              <ul>
                <li><a href="#">Vietnamese</a></li>
                <li><a href="#">English</a></li>
              </ul>
            </div>
            @if(!auth()->user())
            <div class="header__top__right__auth">
              <a href="/login"><i class="fa fa-user"></i> Login</a>
            </div>
            @else
            <div class="header__top__right__auth">
              <a href="/login">{{ auth()->user()->username }}</a>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="header__logo">
          <a href="{{ route('homepage') }}"><img src="{{ asset('dist/img/logo.svg') }}" alt="Logo" width="120"></a>
        </div>
      </div>
      <div class="col-lg-6">
        <nav class="header__menu">
          <ul>
            <li class="@if(request()->is('/')) active @endif">
              <a href="{{ route('homepage') }}">Trang chủ</a>
            </li>
            <li class="@if(request()->is('shop*')) active @endif">
              <a href="{{ route('client_shop') }}">Cửa hàng</a>
            </li>
            <li class="@if(request()->is('blogs*')) active @endif">
              <a href="{{ route('client_blogs') }}">Tin tức</a>
            </li>
            <li class="@if(request()->is('contact')) active @endif">
              <a href="{{ route('client_contact_form') }}">Liên hệ</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="col-lg-3">
        <div class="header__cart">
          <ul>
            <li><a href="{{ route('client_cart') }}"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="humberger__open">
      <i class="fa fa-bars"></i>
    </div>
  </div>
</header>