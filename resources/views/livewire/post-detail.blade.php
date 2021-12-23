<div>
    <x-slot name="title">{{ $posts->title }}</x-slot>
    <x-header />
    <x-postDetailHere :posts="$posts" />

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main_blog_details">
                        <img class="img-fluid" src="{{ asset('storage/'.$posts->image) }}" alt="">
                        <a>
                            <h4>{{ $posts->title }}</h4>
                        </a>
                        <div class="user_details">
                            <div class="float-left">
                                <a href="#">{{ $posts->categorys->category_name }}</a>

                            </div>
                            <div class="float-right mt-sm-0 mt-3">
                                <div class="media">
                                    <div class="media-body">
                                        <h5>{{ $posts->admins->fullname }}</h5>
                                        <p>12 Dec, 2017 11:21 am</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <p>{{ $posts->content }}</p>
                        <div class="news_d_footer flex-column flex-sm-row">
                            <a href="#"><span class="align-middle mr-2"><i class="ti-heart"></i></span>Lily and 4 people
                                like this</a>
                            <a class="justify-content-sm-center ml-sm-auto mt-sm-0 mt-2" href="#"><span
                                    class="align-middle mr-2"><i class="ti-themify-favicon"></i></span>{{ count($comments) }} Comments</a>
                            <div class="news_socail ml-sm-auto mt-sm-0 mt-2">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>{{ count($comments) }} Comments</h4>
                        @foreach ($comments as $comment)
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="desc">
                                        <h5><a href="#">{{ $comment->name }}</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                           {{$comment->comment}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form wire:submit.prevent='submitComment'>
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" wire:model="name" id="name"
                                        placeholder="Enter Name" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Name'">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" wire:model='email' class="form-control" id="email"
                                        placeholder="Enter email address" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    @error('record')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Website (optional)"
                                    onfocus="this.placeholder = ''" wire:model='website'
                                    onblur="this.placeholder = 'Subject'">

                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" wire:model="message" rows="5" name="message"
                                    placeholder="Messege" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Messege'" required=""></textarea>
                                @error('message')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <button type="sbumit" class="button submit_btn">Post Comment</button>
                        </form>
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
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Technology</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Software</p>
                                        <p>(09)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Lifestyle</p>
                                        <p>(12)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Shopping</p>
                                        <p>(02)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Food</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
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
    <x-footer />

</div>
