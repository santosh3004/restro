@extends('front.layouts.app')
@section('content')

<!-- page-ban-list -->
<div class="container marg-top">
    <ul class="page-ban-list">
        <li><a href="{{route('front.index')}}">Home</a></li>
        <li><a href="{{route('front.blog')}}">Our Blogs</a></li>
    </ul>
</div>
<!-- end page-ban-list -->
{{--session message message--}}
@if(session('message'))
    <div class="alert alert-warning">
        {{session('message')}}
    </div>
@endif

<!-- news-section
    ================================================== -->
<section class="news-section blog-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="news-box">

                    <!-- single post  -->
                    <div class="single-post">
                        <img src="{{asset('uploads/files/'.$blog->image)}}" alt="">
                        <div class="post-content">
                            <p class="auth-paragraph">
                                {{$blog->created_at}} | <a href="single-post.html">@if ($comments!=null)
                                    {{$comments->count()}} @if ($comments->count()==1)
                                    Comment
                                    @else
                                    Comments
                                    @endif

                                @endif</a>
                            </p>
                            <h2>{{$blog->title}}</h2>
                            <p>{{$blog->content}}</p>
                            {{-- <blockquote>
                                <p>Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. </p>
                            </blockquote>
                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc
                                tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate
                                volutpat, eros pede semper est, vitae luctus metus libero eu augue.
                                Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus.</p> --}}
                            {{-- <div class="row">
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
                            </p>--}}
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
                        <h3>@if ($comments!=null)
                            {{$comments->count()}} @if ($comments->count()==1)
                                Comment
                                @else
                                Comments
                            @endif

                        @endif </h3>
                        <ul class="comment-tree">
                            @foreach ($comments as $comment)


                            <li>
                                <div class="comment-box">
                                    <img alt="" src="upload/blog/avatar1.jpg">
                                    <div class="comment-content">
                                        <h4>{{$comment->name}}</h4>
                                        <a href="#"><i class="fa fa-mail-reply"></i>Reply</a>
                                        <span class="date-comm">Posted {{$comment->created_at}}</span>
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end comments area box -->

                    <!-- Contact form module -->
                    <form action="{{route('comment.store')}}" method="POST" enctype="multipart/form-data" class="contact-form" id="contact-form">
@csrf
                        <h3>
                            Add a Comment
                        </h3>
                        <input type="hidden" value="{{$blog->id}}" name="blog_id">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="contact-form__input-text" type="text" name="name" id="name" placeholder="your name" />
                            </div>
                            <div class="col-md-6">
                                <input class="contact-form__input-text" type="text" name="email" id="mail" placeholder="your email address" />
                            </div>
                        </div>
                        <textarea class="contact-form__textarea" name="comment" id="comment" placeholder="write your comment"></textarea>
                        <input type="submit" value="Post Comment" />
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
