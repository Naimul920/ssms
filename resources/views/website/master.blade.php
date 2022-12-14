<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/ecom.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li><a href="{{route('about')}}" class="nav-link">About Us</a></li>
                <li><a href="{{route('course')}}" class="nav-link">All Course</a></li>
                <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                <li><a href="{{route('login-registration')}}" class="nav-link">Login / Registration</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')

    <footer>
        <section class="py-5 bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-body h-100">
                            <h4 class="text-center">Why Choice Us</h4>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aut autem dolor dolore,
                                ex expedita hic maiores nemo nisi nostrum numquam quae  Alias aut autem dolor dolore, Alias aut autem dolor dolore
                                ex expedita hic maiores nemo nisi nostrum numquam quae ratione repellat sequi similique .</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-body h-100">
                            <h4 class="text-center">Populer Course</h4>
                            <hr>
                            <ul class="navbar-nav">
                                <li><a href="" class="nav-link">Web Development</a></li>
                                <li><a href="" class="nav-link">Android Development</a></li>
                                <li><a href="" class="nav-link">Master in English</a></li>
                                <li><a href="" class="nav-link">Master in Math</a></li>
                                <li><a href="" class="nav-link">Master in Physics</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-body h-100">
                            <h4 class="text-center">Contact With Us</h4>
                            <hr>
                            <p>
                                House # 420, Road # 120, West Dhanmondi, Dhaka 1209 <br/>
                                Email: info@gmail.com  <br/>
                                Phone:01796128500 <br/>
                            </p>
                            <hr>
                            <ul class="nav">
                                <li><a href="" class="nav-link"><i class="fa-brands fa-2x fa-facebook-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands fa-2x fa-twitter-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands fa-2x fa-linkedin"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands fa-2x fa-github"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands fa-2x fa-google-plus"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands fa-2x fa-youtube-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-dark py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center text-white mb-0">Design & Development BY - Md. Naimul Islam</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>

<script src="{{asset('/')}}website/js/jquery-3.6.0.js"></script>
<script src="{{asset('/')}}website/js/bootstrap.js"></script>
</body>
</html>
