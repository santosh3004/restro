		@extends('front.layouts.app')
        @section('content')
        <!-- page-banner-section
			================================================== -->
            <section class="page-banner-section">
                <div class="container">
                    <h1>Our News</h1>
                    <span>our news and events</span>
                </div>
            </section>
            <!-- End page-banner section -->

            <!-- page-ban-list -->
            <div class="container">
                <ul class="page-ban-list">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="blog.html">Our News</a></li>
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
                                    <div class="col-md-6">
                                        <div class="news-post">
                                            <img src="upload/blog/1.jpg" alt="">
                                            <div class="news-content">
                                                <h3><a href="single-post.html">Etiam sodales, erat non.</a></h3>
                                                <span class="category">cafe</span>
                                                <p>Donec nec justo eget felis facilisis
                                                    fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                                                    pellente squefelis.</p>
                                                <p class="auth-paragraph">
                                                    24.04.2020 / <a href="single-post.html">2 comments</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-post">
                                            <img src="upload/blog/2.jpg" alt="">
                                            <div class="news-content">
                                                <h3><a href="single-post.html">Quisque volutpat mattis.</a></h3>
                                                <span class="category">restaurant</span>
                                                <p>Donec nec justo eget felis facilisis
                                                    fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                                                    pellente squefelis.</p>
                                                <p class="auth-paragraph">
                                                    24.04.2020 / <a href="single-post.html">2 comments</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="news-post">
                                            <img src="upload/blog/3.jpg" alt="">
                                            <div class="news-content">
                                                <h3><a href="single-post.html">Cras iaculis ultricies nulla.</a></h3>
                                                <span class="category">bakery</span>
                                                <p>Donec nec justo eget felis facilisis
                                                    fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                                                    pellente squefelis.</p>
                                                <p class="auth-paragraph">
                                                    24.04.2020 / <a href="single-post.html">2 comments</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-post">
                                            <img src="upload/blog/4.jpg" alt="">
                                            <div class="news-content">
                                                <h3><a href="single-post.html">Etiam sodales, erat non.</a></h3>
                                                <span class="category">cook</span>
                                                <p>Donec nec justo eget felis facilisis
                                                    fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                                                    pellente squefelis.</p>
                                                <p class="auth-paragraph">
                                                    24.04.2020 / <a href="single-post.html">2 comments</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="news-post">
                                            <img src="upload/blog/5.jpg" alt="">
                                            <div class="news-content">
                                                <h3><a href="single-post.html">Etiam sodales, erat non.</a></h3>
                                                <span class="category">burger</span>
                                                <p>Donec nec justo eget felis facilisis
                                                    fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                                                    pellente squefelis.</p>
                                                <p class="auth-paragraph">
                                                    24.04.2020 / <a href="single-post.html">2 comments</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-post">
                                            <img src="upload/blog/6.jpg" alt="">
                                            <div class="news-content">
                                                <h3><a href="single-post.html">Quisque volutpat mattis.</a></h3>
                                                <span class="category">sweet</span>
                                                <p>Donec nec justo eget felis facilisis
                                                    fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                                                    pellente squefelis.</p>
                                                <p class="auth-paragraph">
                                                    24.04.2020 / <a href="single-post.html">2 comments</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
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
                                        <li><a href="blog.html">Company <span>3</span></a></li>
                                        <li><a href="blog.html">Market Research <span>3</span></a></li>
                                        <li><a href="blog.html">Sales Services <span>2</span></a></li>
                                        <li><a href="blog.html">Manage Business <span>1</span></a></li>
                                        <li><a href="blog.html">Creativity <span>1</span></a></li>
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
