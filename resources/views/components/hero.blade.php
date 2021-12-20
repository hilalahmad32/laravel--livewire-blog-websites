  <!--================Hero Banner start =================-->
  @props(['randomPosts'])
  @forelse ($randomPosts as $posts)
  <section class="mb-30px">
    <div class="container">
      <div class="hero-banner" style="background-image: url('{{ asset('storage/'.$posts->image) }}')">
        <div class="hero-banner__content">
          <h3>{{ $posts->title }}</h3>
          <h1>{{ $posts->categorys->category_name }}</h1>
          <h4>December 12, 2018</h4>
          <a class="button" href="{{ route('post-detail', ['id'=>$posts->id]) }}">Read More <i class="ti-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>
  @empty
  <section class="mb-30px">
    <div class="container">
      <div class="hero-banner">
        <div class="hero-banner__content">
          <h3>title</h3>
          <h1>Amazing Places on earth</h1>
          <h4>December 12, 2018</h4>
        </div>
      </div>
    </div>
  </section>
  @endforelse

  <!--================Hero Banner end =================-->
