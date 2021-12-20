<!--================ Start Blog Post Area =================-->

@props(['posts','page','pageCount','categorysRight','pages','pageCountCategory','popularPost'])
<section class="blog-post-area section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @forelse ($posts as $post)
                    <div class="col-md-6">
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
                    <button class="button" wire:click='loadMore'>Load More ({{ $page }})<i
                            class="ti-arrow-right"></i></button>
                    @endif
                </div>
            </div>

            <!-- Start Blog Post Siddebar -->
            <div class="col-lg-4 sidebar-widgets">
                <div class="widget-wrap">
                    <div class="single-sidebar-widget newsletter-widget">
                        <h4 class="single-sidebar-widget__title">Newsletter</h4>
                        <div class="form-group mt-30">
                            <div class="col-autos">
                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                    placeholder="Enter email" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email'">
                            </div>
                        </div>
                        <button class="bbtns d-block mt-20 w-100">Subcribe</button>
                    </div>


                    <div class="single-sidebar-widget post-category-widget">
                        <h4 class="single-sidebar-widget__title">Catgory</h4>
                        <ul class="cat-list mt-20">
                            @forelse ($categorysRight as $category)
                            <li>
                                <a href="{{ route('category-post', ['id'=>$category->id]) }}" class="d-flex justify-content-between">
                                    <p>{{ $category->category_name }}</p>
                                    <p>({{ $category->posts }})</p>
                                </a>
                            </li>
                            @empty
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Technology</p>
                                    <p>(03)</p>
                                </a>
                            </li>
                            @endforelse
                            @if ($pages >= count($pageCountCategory))
                            <a class="btn btn-dark text-white  btn-sm" disabled>Load More <i
                                    class="ti-arrow-right"></i></a>
                            @else
                            <a class="btn btn-success text-white btn-sm" wire:click='loadMoreCategory'>Load More <i
                                    class="ti-arrow-right"></i></a>

                            @endif
                        </ul>
                    </div>

                    <div class="single-sidebar-widget popular-post-widget">
                        <h4 class="single-sidebar-widget__title">Popular Post</h4>
                        <div class="popular-post-list">
                            @forelse ($popularPost as $post)
                            <div class="single-post-list">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="{{ asset('storage/'.$post->thumb) }}" alt="">
                                    <ul class="thumb-info">
                                        <li><a href="#">{{ $post->admins->roll == 1 ? 'Admin' :$post->admins->fullname
                                                }}</a></li>
                                        <li><a href="#">Dec 15</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="{{ route('post-detail', ['id'=>$post->id]) }}">
                                        <h6>{{ $post->title }}</h6>
                                    </a>
                                </div>
                            </div>
                            @empty
                            <div class="single-post-list">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="img/blog/thumb/thumb1.png" alt="">
                                    <ul class="thumb-info">
                                        <li><a href="#">Adam Colinge</a></li>
                                        <li><a href="#">Dec 15</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h6>Accused of assaulting flight attendant miktake alaways</h6>
                                    </a>
                                </div>
                            </div>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Post Siddebar -->
    </div>
</section>
<!--================ End Blog Post Area =================-->
