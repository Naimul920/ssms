@extends('website.master')
@section('title')
    Home Page
@endsection

@section('content')
    <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800" id="heroSlider">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/')}}website/img/slider1.jpg" alt="" class="w-100 h-550">
                <div class="carousel-caption">
                    <h3>Web development master</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, adipisci aliquam,
                        assumenda doloribus id illo incidunt ipsa laborum minima porro praesentium quam sit soluta.
                        Cum debitis magnam mollitia nobis obcaecati?</p>
                    <a href="" class="btn btn-outline-success">Enroll Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/slider2.jpg" alt="" class="w-100 h-550">
                <div class="carousel-caption">
                    <h3>Android App development master</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, adipisci aliquam,
                        assumenda doloribus id illo incidunt ipsa laborum minima porro praesentium quam sit soluta.
                        Cum debitis magnam mollitia nobis obcaecati?</p>
                    <a href="" class="btn btn-outline-success">Enroll Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/slider3.jpg" alt="" class="w-100 h-550">
                <div class="carousel-caption">
                    <h3>Master in Physich</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, adipisci aliquam,
                        assumenda doloribus id illo incidunt ipsa laborum minima porro praesentium quam sit soluta.
                        Cum debitis magnam mollitia nobis obcaecati?</p>
                    <a href="" class="btn btn-outline-success">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid bg-danger py-2">
            <h1 class="text-white text-center">All Latest Course</h1>
        </div>
        <div class="container py-5">
             <div class="row">
                 <div class="col-md-3">
                     <div class="card">
                         <img src="{{asset('/')}}website/img/1.png" alt="" class="h-250">
                         <div class="card-body">
                             <h5>Web App Development</h5>
                             <p>Course Fee: Tk. 25000</p>
                             <hr>
                             <a href="" class="btn btn-outline-success">Read More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="card">
                         <img src="{{asset('/')}}website/img/2.png" alt="" class="h-250">
                         <div class="card-body">
                             <h5>Web App Development</h5>
                             <p>Course Fee: Tk. 25000</p>
                             <hr>
                             <a href="" class="btn btn-outline-success">Read More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="card">
                         <img src="{{asset('/')}}website/img/3.png" alt="" class="h-250">
                         <div class="card-body">
                             <h5>Web App Development</h5>
                             <p>Course Fee: Tk. 25000</p>
                             <hr>
                             <a href="" class="btn btn-outline-success">Read More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="card">
                         <img src="{{asset('/')}}website/img/4.png" alt="" class="h-250">
                         <div class="card-body">
                             <h5>Web App Development</h5>
                             <p>Course Fee: Tk. 25000</p>
                             <hr>
                             <a href="" class="btn btn-outline-success">Read More</a>
                         </div>
                     </div>
                 </div>
             </div>
        </div>
    </section>
    <section>
        <div class="container-fluid bg-info py-2">
            <h1 class="text-white text-center">Our Instractor Info</h1>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/1.png" alt="" class="h-250">
                        <div class="card-body">
                            <h5>Mr. Naimul Islam</h5>
                            <p>Web Devolopment spacilist</p>
                            <hr>
                            <ul class="nav">
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-facebook-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-twitter-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-google-plus"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-youtube-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/2.png" alt="" class="h-250">
                        <div class="card-body">
                            <h5>Mr. Rafiqul Islam</h5>
                            <p>Web Devolopment spacilist</p>
                            <hr>
                            <ul class="nav">
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-facebook-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-twitter-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-google-plus"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-youtube-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/3.png" alt="" class="h-250">
                        <div class="card-body">
                            <h5>Mr. Rafi Islam</h5>
                            <p>Web Devolopment spacilist</p>
                            <hr>
                            <ul class="nav">
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-facebook-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-twitter-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-google-plus"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-youtube-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/4.png" alt="" class="h-250">
                        <div class="card-body">
                            <h5>Mr. Labib Islam</h5>
                            <p>Web Devolopment spacilist</p>
                            <hr>
                            <ul class="nav">
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-facebook-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-twitter-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-google-plus"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands  fa-youtube-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="" style="margin-bottom: 120px;">
        <div class="container-fluid bg-secondary py-2">
            <h1 class="text-white text-center">Our Student Review</h1>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800" id="customerReview">
                        <ol class="carousel-indicators customer-indicators">
                            <li data-bs-target="#customerReview" data-bs-slide-to="0" class="active my-li1">asdasd</li>
                            <li data-bs-target="#customerReview" data-bs-slide-to="1" class="my-li2"></li>
                            <li data-bs-target="#customerReview" data-bs-slide-to="2" class="my-li3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('/')}}website/img/member1.png" alt="" class="member-image"/>
                                <div class="carousel-caption customer-caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A id laboriosam laborum! Autem consectetur corporis cupiditate dignissimos dolor, dolorem doloribus eaque et libero, modi mollitia quasi, saepe ut veritatis vero!</p>
                                    <h3>Mr. Olivia</h3>
                                    <p>Melbourn, Austrilia</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/')}}website/img/member2.png" alt="" class="member-image"/>
                                <div class="carousel-caption customer-caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A id laboriosam laborum! Autem consectetur corporis cupiditate dignissimos dolor, dolorem doloribus eaque et libero, modi mollitia quasi, saepe ut veritatis vero!</p>
                                    <h3>Mr. Nur Mohammad</h3>
                                    <p>Newziland, Dhaka</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/')}}website/img/member3.png" alt="" class="member-image"/>
                                <div class="carousel-caption customer-caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A id laboriosam laborum! Autem consectetur corporis cupiditate dignissimos dolor, dolorem doloribus eaque et libero, modi mollitia quasi, saepe ut veritatis vero!</p>
                                    <h3>Mr. Amit Kumar</h3>
                                    <p>Borisal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
