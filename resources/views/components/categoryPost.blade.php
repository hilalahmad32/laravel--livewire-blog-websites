<!--================ Start Blog Post Area =================-->

@props(['posts','page','pageCount'])
<section class="blog-post-area section-margin">
    <div class="container">
        <div class="row">
            @forelse ($posts as $post)
            <div class="col-md-4">
                <div class="single-recent-blog-post card-view">
                    <div class="thumb">
                        <img class="card-img rounded-0" src="{{ asset('storage/'.$post->image) }}" alt="">
                        <ul class="thumb-info">
                            <li><a href="#"><i class="ti-user"></i>{{ $post->admins->roll == 1 ?
                                    'Admin':$post->admins->fullname }}</a></li>
                            <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                        </ul>
                    </div>
                    <div class="details mt-20">
                        <a href="{{ route('post-detail', ['id'=>$post->id]) }}">
                            <h3>{{$post->title}}</h3>
                        </a>
                        <p> {{ $post->content }} </p>
                        <a class="button" href="{{ route('post-detail', ['id'=>$post->id]) }}">Read More <i class="ti-arrow-right"></i></a>
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

</section>
<!--================ End Blog Post Area =================-->
