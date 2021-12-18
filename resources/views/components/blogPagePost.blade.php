 <!--================ Start Blog Post Area =================-->

 @props(['posts','page','pageCount'])
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
                      <li><a href="#"><i class="ti-user"></i>{{ $post->admins->roll == 1 ? 'Admin':$post->admins->fullname }}</a></li>
                      <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                    </ul>
                  </div>
                  <div class="details mt-20">
                    <a href="blog-single.html">
                      <h3>{{$post->title}}</h3>
                    </a>
                    <p> {{ $post->content }} </p>
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
                    <p>Vel aliquam quis, nulla pede mi commodo no tristique nam hac luctus torquent velit felis lone commodo pellentesque</p>
                    <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              @endforelse

          </div>
          <div class="text-center">
              @if ($page >= count($pageCount))
              <button class="button text-white bg-dark" disabled>Load More ({{ $page }})<i class="ti-arrow-right"></i></button>
              @else
              <button class="button" wire:click='loadMore'>Load More ({{ $page }})<i class="ti-arrow-right"></i></button>
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
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
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
