  @extends('front.layouts.app')
  @section('content')
      <!-- page-banner-section
               ================================================== -->
      <section class="page-banner-section" style="background: #111 url({{ asset('uploads/files/' . $blogpagebg[0]->link) }}) center center no-repeat;
                            background-size: cover;">
          <div class="container">
              <h1>Our Blogs</h1>
              <span>Our News and Events</span>
          </div>
      </section>
      <!-- End page-banner section -->

      <!-- page-ban-list -->
      <div class="container">
          <ul class="page-ban-list">
              <li><a href="{{ route('front.index') }}">Home</a></li>
              <li><a href="{{ route('front.blog') }}">Our Blogs</a></li>
          </ul>
      </div>
      <!-- end page-ban-list -->
      {{-- show session message --}}
      @if (session('message'))
          <div class="alert alert-warning">
              {{ session('message') }}
          </div>
      @endif


      <!-- news-section
                            ================================================== -->
      <section class="news-section blog-page">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8">
                      <div class="news-box">
                          <div class="row">
                              @foreach ($blogs as $blog)
                                  <div class="col-md-6">
                                      <div class="news-post">
                                          <img src="{{ asset('uploads/files/' . $blog->image) }}" alt="">
                                          <div class="news-content">
                                              <h3><a
                                                      href="{{ route('front.blog_detail', $blog->id) }}">{{ $blog->title }}</a>
                                              </h3>
                                              <span
                                                  class="category">{{ $blog->blog_category()->first()->title }}</span>
                                              <p>{{ $blog->content }}</p>
                                              <p class="auth-paragraph">
                                                  {{ $blog->created_at->format('Y-M-d') }}<a
                                                      href="single-post.html">&nbsp;
                                                      {{ count($blog->blog_comments()->get()) }}
                                                      @if (count($blog->blog_comments()->get()) > 1)
                                                          Comments
                                                      @else
                                                          Comment
                                                      @endif | {{ $blog->views()->count() }} Views
                                                  </a>
                                                  </a>
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              @endforeach

                          </div>
                          {{ $blogs->links('front.inc.pagination') }}
                          {{-- <div class="pagination-list-box">
                                    <!-- <a href="#" class="prev"><i class="fa fa-chevron-left"></i> Prev Page </a> -->
                                    <ul class="pages-list">
                                        <li><a href="blog.html" class="active">1</a></li>
                                        <li><a href="blog.html">2</a></li>
                                    </ul>
                                    <a href="blog.html" class="next">Next Page <i class="fa fa-chevron-right"></i></a>
                                </div> --}}



                      </div>
                  </div>
                  <div class="col-lg-4">

                      <div class="sidebar">
                          <div class="search-widget widget">
                              <form>
                                  <input type="search" placeholder="search..." />
                                  <button type="submit">
                                      <i class="fa fa-search"></i>
                                  </button>
                              </form>
                          </div>
                          <div class="category-widget widget">
                              <h3>Categories</h3>
                              <ul class="category-list">
                                  @foreach ($blog_categories as $blog_category)
                                      <li><a href="{{ route('front.catblog', $blog_category->id) }}">{{ $blog_category->title }}
                                              <span>3</span></a></li>
                                  @endforeach
                              </ul>
                          </div>
                          <div class="popular-widget widget">
                              <h3>Popular Posts</h3>
                              <ul class="popular-list">
                                @foreach ($popular_blogs as $popular_blog)
                                <li>
                                    <img alt="" src="{{asset('uploads/files/'.$popular_blog->image)}}">
                                    <div class="side-content">
                                        <h4><a href="{{route('front.blog_detail',$popular_blog->id)}}">{{$popular_blog->title}}</a></h4>
                                        <span>{{$popular_blog->created_at->format('Y-M-d')}}</span>
                                    </div>
                                </li>
                                @endforeach
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End news section -->
  @endsection
