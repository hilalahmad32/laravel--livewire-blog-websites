<!--================ Start category Area =================-->

@props(['categorys','page','pageCount'])
<section class="blog-post-area section-margin">
    <div class="container">
        <div class="row">
            @forelse ($categorys as $category)
            <div class="col-md-4">
                <div class="single-recent-blog-post card-view">
                    <div class="thumb">
                        <img class="card-img rounded-0" src="{{ asset('storage/'.$category->image) }}" alt="">

                    </div>
                    <div class="details mt-20">
                        <a href="{{ route('category-post', ['id'=>$category->id]) }}">
                            <h3>{{$category->category_name}}</h3>
                        </a> <br>
                        <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-6">
                <div class="single-recent-blog-post card-view">
                    <div class="thumb">
                        <img class="card-img rounded-0" src="img/blog/thumb/thumb-card2.png" alt="">
                        <ul class="thumb-info">
                            <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                            <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                        </ul>
                    </div>
                    <div class="details mt-20">
                        <a href="blog-single.html">
                            <h3>Harvey Weinstein's senual assault
                                trial set for May</h3>
                        </a>
                        <p>Vel aliquam quis, nulla pede mi commodo no tristique nam hac luctus torquent velit
                            felis lone commodo pellentesque</p>
                        <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
        <div class="text-center">
            @if ($page >= count($pageCount))
            <button class="button text-white bg-dark" disabled>Load More ({{ $page }})<i
                    class="ti-arrow-right"></i></button>
            @else
            <button class="button" wire:click='loadMore'>Load More ({{ $page }})<i class="ti-arrow-right"></i></button>
            @endif
        </div>
    </div>


    </div>
    <!-- End Blog Post Siddebar -->
    </div>
</section>
<!--================ End Blog Post Area =================-->
