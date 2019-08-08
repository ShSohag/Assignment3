@section('title')
    Feature
@endsection
@extends('master')
@section('mainContent')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/index')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">Blog1</li>
    </ol>
    <!--//banner-->

    <!--/main-->
    <section class="main-content-w3layouts-agileits">
        <div class="container">
            <h3 class="tittle">Blog Posts</h3>
            <div class="row inner-sec">
                <!--left-->
                <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
                    <article class="blog-grid-top">
                        <div class="b-grid-top">
                            <div class="blog_info_left_grid">
                                <a href="single.html">
                                    <img src="images/b1.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="blog-info-middle">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-calendar-alt"></i> FEB 15,2018</a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="#">
                                            <i class="far fa-thumbs-up"></i> 201 Likes</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-comment"></i> 15 Comments</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <h3>
                            <a href="single.html">Amet consectetur adipisicing </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
                            aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
                            aute irudre dolor in elit sed uta labore dolore reprehender</p>
                        <a href="single.html" class="btn btn-primary read-m">Read More</a>
                    </article>
                    <article class="blog-grid-top my-5">
                        <div class="b-grid-top">
                            <div class="blog_info_left_grid">
                                <a href="single.html">
                                    <img src="images/b4.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="blog-info-middle">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-calendar-alt"></i> FEB 15,2018</a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="#">
                                            <i class="far fa-thumbs-up"></i> 201 Likes</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-comment"></i> 15 Comments</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <h3>
                            <a href="single.html">Amet consectetur adipisicing </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
                            aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
                            aute irudre dolor in elit sed uta labore dolore reprehender</p>
                        <a href="single.html" class="btn btn-primary read-m">Read More</a>
                    </article>
                    <article class="blog-grid-top mb-4">
                        <div class="b-grid-top">
                            <div class="blog_info_left_grid">
                                <a href="single.html">
                                    <img src="images/b1.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="blog-info-middle">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-calendar-alt"></i> FEB 15,2018</a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="#">
                                            <i class="far fa-thumbs-up"></i> 201 Likes</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-comment"></i> 15 Comments</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <h3>
                            <a href="single.html">Amet consectetur adipisicing </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
                            aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
                            aute irudre dolor in elit sed uta labore dolore reprehender</p>
                        <a href="single.html" class="btn btn-primary read-m">Read More</a>
                    </article>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-left">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--//left-->
                <!--right-->
              
                <!--//right-->
            </div>
        </div>
    </section>
    @endsection