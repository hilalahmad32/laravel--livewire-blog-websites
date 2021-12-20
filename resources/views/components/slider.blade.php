<!--================ Blog slider start =================-->
@props(['categorys'])
<section>
    <div class="container">
        <div class="owl-carousel owl-theme blog-slider">
            @forelse ($categorys as $category)
            <div class="card blog__slide text-center">
                <div class="blog__slide__img">
                    <img class="card-img rounded-0" src="{{ asset('storage/'.$category->image) }}" alt="">
                </div>
                <div class="blog__slide__content">
                    <a class="blog__slide__label" href="{{ route('category-post', ['id'=>$category->id]) }}">{{ $category->category_name }}</a>

                </div>
            </div>
            @empty
            <div class="card blog__slide text-center">
                <div class="blog__slide__img">
                    <img class="card-img rounded-0" src="img/blog/blog-slider/blog-slide1.png" alt="">
                </div>
                <div class="blog__slide__content">
                    <a class="blog__slide__label" href="#">Fashion</a>
                    <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                    <p>2 days ago</p>
                </div>
            </div>
            @endforelse

        </div>
    </div>
</section>
<!--================ Blog slider end =================-->
