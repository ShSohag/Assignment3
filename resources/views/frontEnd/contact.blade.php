@extends('master')
@section('title')
    Contact
@endsection

@section('mainContent')
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/index')}}">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    Features
                </a>

            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/contact')}}">Contact</a>
            </li>

        </ul>
        <form action="#" method="post" class="form-inline my-2 my-lg-0 header-search">
            <input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
            <button class="btn btn1 my-2 my-sm-0" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>



    </div>
    </nav>

    </div>
    </header>
    <!--//header-->

    <!--/banner-->

    </div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{('/index')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
    </ol>
    <!--//banner-->
    <!--/main-->
    <section class="main-content-w3layouts-agileits">

        <h3 class="tittle">Contact Us</h3>
        <p class="sub text-center">We love to discuss your idea</p>
        <div class="contact-map inner-sec">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
                    class="map" style="border:0" allowfullscreen=""></iframe>
        </div>
        <div class="ad-inf-sec bg-light">
            <div class="container">
                <div class="address row">

                    <div class="col-lg-4 address-grid">
                        <div class="row address-info">
                            <div class="col-md-4 address-left text-center">
                                <i class="far fa-map"></i>
                            </div>
                            <div class="col-md-8 address-right text-left">
                                <h6>Address</h6>
                                <p> California, USA

                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 address-grid">
                        <div class="row address-info">
                            <div class="col-md-4 address-left text-center">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="col-md-8 address-right text-left">
                                <h6>Email</h6>
                                <p>Email :
                                    <a href="mailto:example@email.com"> mail@example.com</a>

                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 address-grid">
                        <div class="row address-info">
                            <div class="col-md-4 address-left text-center">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="col-md-8 address-right text-left">
                                <h6>Phone</h6>
                                <p>+1 234 567 8901</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contact_grid_right">
                <form action="#" method="post">
                    <div class="row contact_left_grid">
                        <div class="col-md-6 con-left">
                            <div class="form-group">
                                <label for="validationCustom01 my-2">Name</label>
                                <input class="form-control" type="text" name="Name" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input class="form-control" type="email" name="Email" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label for="validationCustom03 my-2">Subject</label>
                                <input class="form-control" type="text" name="Subject" placeholder="" required="">
                            </div>
                        </div>
                        <div class="col-md-6 con-right">
                            <div class="form-group">
                                <label for="textarea">Message</label>
                                <textarea id="textarea" placeholder=""></textarea>
                            </div>
                            <input class="form-control" type="submit" value="Submit">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection