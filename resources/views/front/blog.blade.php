		@extends('front.layouts.app')
        @section('content')
        <!-- page-banner-section
			================================================== -->
            <section class="page-banner-section">
                <div class="container">
                    <h1>Our Blogs</h1>
                    <span>our news and events</span>
                </div>
            </section>
            <!-- End page-banner section -->

            <!-- page-ban-list -->
            <div class="container">
                <ul class="page-ban-list">
                    <li><a href="{{route('front.index')}}">Home</a></li>
                    <li><a href="{{route('front.blog')}}">Our Blogs</a></li>
                </ul>
            </div>
            <!-- end page-ban-list -->


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
                                            <img src="{{asset('uploads/files/'.$blog->image)}}" alt="">
                                            <div class="news-content">
                                                <h3><a href="single-post.html">{{$blog->title}}</a></h3>
                                                <span class="category">{{$blog->blog_category()->first()->title}}</span>
                                                <p>{{$blog->content}}</p>
                                                <p class="auth-paragraph">
                                                    {{$blog->created_at}}<a href="single-post.html">2 comments</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="pagination-list-box">
                                    <!-- <a href="#" class="prev"><i class="fa fa-chevron-left"></i> Prev Page </a> -->
                                    <ul class="pages-list">
                                        <li><a href="blog.html" class="active">1</a></li>
                                        <li><a href="blog.html">2</a></li>
                                    </ul>
                                    <a href="blog.html" class="next">Next Page <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">

                            <div class="sidebar">
                                <div class="search-widget widget">
                                    <form>
                                        <input type="search" placeholder="search..."/>
                                        <button type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                                  <div class="category-widget widget">
                                    <h3>Categories</h3>
                                    <ul class="category-list">
                                        @foreach ($blog_categories as $blog_category)
                                        <li><a href="#">{{$blog_category->title}} <span>3</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                  <div class="popular-widget widget">
                                    <h3>Popular Posts</h3>
                                    <ul class="popular-list">
                                        <li>
                                            <img alt="" src="upload/blog/th1.jpg">
                                            <div class="side-content">
                                                <h4><a href="single-post.html">Aliquam tincidunt mauris eu risus.</a></h4>
                                                <span>21.04.2020</span>
                                            </div>
                                        </li>
                                        <li>
                                            <img alt="" src="upload/blog/th2.jpg">
                                            <div class="side-content">
                                                <h4><a href="single-post.html">Donec quis dui at dolor tempor interdum.</a></h4>
                                                <span>21.04.2020</span>
                                            </div>
                                        </li>
                                        <li>
                                            <img alt="" src="upload/blog/th3.jpg">
                                            <div class="side-content">
                                                <h4><a href="single-post.html">Vivamus molestie gravida turpis.</a></h4>
                                                <span>21.04.2020</span>
                                            </div>
                                        </li>
                                        <li>
                                            <img alt="" src="upload/blog/th4.jpg">
                                            <div class="side-content">
                                                <h4><a href="single-post.html">Fusce lobortis lorem at ipsum semper sagittis.</a></h4>
                                                <span>21.04.2020</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End news section -->
@endsection
