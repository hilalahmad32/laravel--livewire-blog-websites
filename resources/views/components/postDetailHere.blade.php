 <!--================ Hero sm Banner start =================-->
 @props(['posts'])
 <section class="mb-30px">
    <div class="container">
      <div class="hero-banner hero-banner--sm" style="background-image: url({{ asset('storage/'.$posts->image) }})">
        <div class="hero-banner__content" >
          <h1>Blog details</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $posts->title }}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->
