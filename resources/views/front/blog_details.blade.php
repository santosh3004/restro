@extends('front.layouts.app')
@section('content')

<!-- page-ban-list -->
<div class="container marg-top">
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

                    <!-- single post  -->
                    <div class="single-post">
                        <img src="upload/blog/single.jpg" alt="">
                        <div class="post-content">
                            <p class="auth-paragraph">
                                24.04.2020 / <a href="single-post.html">2 Comments</a>
                            </p>
                            <h2>Cras iaculis ultricies nulla.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit.
                                Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.
                                Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc
                                tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
                            </p>
                            <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue.
                                Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus.
                                Praesent elementum hendrerit tortor. Sed semper lorem at felis.
                                Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.
                                Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
                            <blockquote>
                                <p>Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. </p>
                            </blockquote>
                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc
                                tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate
                                volutpat, eros pede semper est, vitae luctus metus libero eu augue.
                                Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus.</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="upload/blog/single2.jpg" alt="">
                                </div>
                                <div class="col-sm-6">
                                    <img src="upload/blog/single3.jpg" alt="">
                                </div>
                            </div>
                            <p>Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est,
                                vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing,
                                commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis.
                                Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="single-post__tags">
                                        <span>By:</span>
                                        <a href="blog.html">Admin</a>
                                        <span>Tags:</span>
                                        <a href="blog.html">Recipes</a>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="single-post__share-list">
                                        <span>Share:</span>
                                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end single post -->

                    <!-- other-posts -->
                    <div class="other-posts">
                        <a class="other-posts__prev" href="single-post.html">
                            <i class="fa fa-chevron-left"></i>
                            <img src="upload/blog/th5.jpg" alt="">
                            <div class="other-posts__prev-box">
                                <span class="other-posts__desc">Previous Post</span>
                                <h3 class="other-posts__title">
                                    Donec consectetuer ligula <br>vulputate sem tristique.
                                </h3>
                            </div>
                        </a>
                        <a class="other-posts__next" href="single-post.html">
                            <i class="fa fa-chevron-right"></i>
                            <img src="upload/blog/th6.jpg" alt="">
                            <div class="other-posts__next-box">
                                <span class="other-posts__desc">Next Post</span>
                                <h3 class="other-posts__title">
                                    Ut aliquam sollicitudin leo.
                                </h3>
                            </div>
                        </a>
                    </div>
                    <!-- end other-posts -->

                    <!-- comments area box -->
                    <div class="comment-area-box">
                        <h3>2 Comments</h3>
                        <ul class="comment-tree">
                            <li>
                                <div class="comment-box">
                                    <img alt="" src="upload/blog/avatar1.jpg">
                                    <div class="comment-content">
                                        <h4>Philip W</h4>
                                        <a href="#"><i class="fa fa-mail-reply"></i>Reply</a>
                                        <span class="date-comm">Posted October 7, 2018 |</span>
                                        <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="comment-box">
                                    <img alt="" src="upload/blog/avatar2.jpg">
                                    <div class="comment-content">
                                        <h4>John Doe</h4>
                                        <a href="#"><i class="fa fa-mail-reply"></i>Reply</a>
                                        <span class="date-comm">Posted October 7, 2018 |</span>
                                        <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. </p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- end comments area box -->

                    <!-- Contact form module -->
                    <form class="contact-form" id="comment-form">

                        <h3>
                            Add a Comment
                        </h3>

                        <div class="row">
                            <div class="col-md-6">
                                <input class="contact-form__input-text" type="text" name="name" id="name" placeholder="your name" />
                            </div>
                            <div class="col-md-6">
                                <input class="contact-form__input-text" type="text" name="mail" id="mail" placeholder="your email address" />
                            </div>
                        </div>
                        <textarea class="contact-form__textarea" name="comment" id="comment" placeholder="write your comment"></textarea>
                        <input class="contact-form__submit" type="submit" name="submit-contact" id="submit_contact" value="Post Comment" />
                    </form>
                    <!-- End Contact form module -->

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
