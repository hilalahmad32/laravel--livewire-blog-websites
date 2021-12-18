<!--================ Start Blog Post Area =================-->
@props(['posts','categorysRight','pageCount','pages'])
<section class="blog-post-area section-margin mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @forelse ($posts as $post)
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('storage/'.$post->thumb) }}"
                            style="width: 100%;height:50vh; " alt="">
                        <ul class="thumb-info">
                            <li><a href="#"><i class="ti-user"></i>{{ $post->admins->roll == 1 ?
                                    'Admin':$post->admins->fullname }}</a></li>
                            <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                            <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                        </ul>
                    </div>
                    <div class="details mt-20">
                        <a href="blog-single.html">
                            <h3>{{$post->title}}</h3>
                        </a>
                        <p class="tag-list-inline">Tag: <a href="#">{{ $post->categorys->category_name }}</a></p>
                        <p>{{ $post->content }}</p>
                        <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
                @empty
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="img/blog/blog1.png" alt="">
                        <ul class="thumb-info">
                            <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                            <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                            <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                        </ul>
                    </div>
                    <div class="details mt-20">
                        <a href="blog-single.html">
                            <h3>Woman claims husband wants to name baby girl
                                after his ex-lover sparking.</h3>
                        </a>
                        <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a
                                href="#">technology</a>, <a href="#">fashion</a></p>
                        <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser
                            cattle were fruitful lights. Given let have, lesser their made him above gathered dominion
                            sixth. Creeping deep said can't called second. Air created seed heaven sixth created living
                        </p>
                        <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
                @endforelse
                <div class="text-center">
                    <a class="button" href="{{ route('blog') }}">Load More <i class="ti-arrow-right"></i></a>
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
                                <a href="#" class="d-flex justify-content-between">
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
                            @if ($pages >= count($pageCount))
                            <a class="btn btn-dark text-white  btn-sm" disabled>Load More <i class="ti-arrow-right"></i></a>
                            @else
                            <a class="btn btn-success text-white btn-sm" wire:click='loadMore'>Load More <i class="ti-arrow-right"></i></a>

                            @endif
                        </ul>
                    </div>

                    <div class="single-sidebar-widget popular-post-widget">
                        <h4 class="single-sidebar-widget__title">Popular Post</h4>
                        <div class="popular-post-list">
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
                            <div class="single-post-list">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="img/blog/thumb/thumb2.png" alt="">
                                    <ul class="thumb-info">
                                        <li><a href="#">Adam Colinge</a></li>
                                        <li><a href="#">Dec 15</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h6>Tennessee outback steakhouse the
                                            worker diagnosed</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="single-post-list">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="img/blog/thumb/thumb3.png" alt="">
                                    <ul class="thumb-info">
                                        <li><a href="#">Adam Colinge</a></li>
                                        <li><a href="#">Dec 15</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h6>Tennessee outback steakhouse the
                                            worker diagnosed</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-sidebar-widget tag_cloud_widget">
                        <h4 class="single-sidebar-widget__title">Popular Post</h4>
                        <ul class="list">
                            <li>
                                <a href="#">project</a>
                            </li>
                            <li>
                                <a href="#">love</a>
                            </li>
                            <li>
                                <a href="#">technology</a>
                            </li>
                            <li>
                                <a href="#">travel</a>
                            </li>
                            <li>
                                <a href="#">software</a>
                            </li>
                            <li>
                                <a href="#">life style</a>
                            </li>
                            <li>
                                <a href="#">design</a>
                            </li>
                            <li>
                                <a href="#">illustration</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Post Siddebar -->
    </div>
</section>
<!--================ End Blog Post Area =================-->
