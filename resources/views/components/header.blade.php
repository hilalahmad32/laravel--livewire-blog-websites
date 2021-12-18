<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">
              <li class="nav-item {{ Request::routeIs('home') ? 'active' : ''}}"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
              <li class="nav-item {{ Request::routeIs('blog') ? 'active' : ''}}"><a class="nav-link " href="{{ route('blog') }}">Blog</a></li>
              <li class="nav-item {{ Request::routeIs('category') ? 'active' : ''}}" ><a class="nav-link" href="{{ route('category') }}">Category</a>
              <li class="nav-item {{ Request::routeIs('contact') ? 'active' : ''}}"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-social">
              <li><a href="#"><i class="ti-facebook"></i></a></li>
              <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
              <li><a href="#"><i class="ti-instagram"></i></a></li>
              <li><a href="#"><i class="ti-skype"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->
