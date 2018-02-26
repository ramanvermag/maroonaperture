<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('layouts.includes.head')
</head>
<body>
    
    @include('layouts.includes.header_1')

    <section class="banner bg-home-page">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-lg-8">
                    <h2>Stock Photos &amp; Royalty-Free Images </h2>
                    <form class="search-item">
                        <input placeholder="Search the perfect stock photos here..." type="text">
                        <input class="search-icon" value="" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="content-section-wrapper">
        <div class="container">
            <h3>Diversity. Lives Here.<br>Because Representation Matters.</h3>
            <div class="categories-item">           
                <h5>Explore Our categories</h5>             
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="content-section-item">
                        <img src="images/leves-here1.jpg" alt="leves-here1">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="content-section-item">
                        <img src="images/leves-here2.jpg" alt="leves-here2">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="content-section-item">
                        <img src="images/leves-here3.jpg" alt="leves-here3">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="content-section-item">
                        <img src="images/leves-here4.jpg" alt="leves-here4">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="content-section-item">
                        <img src="images/leves-here5.jpg" alt="leves-here5">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="content-section-item">
                        <img src="images/leves-here6.jpg" alt="leves-here6">
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="content-section-item content-item">
                        <h5>Licensing for everyone</h5>
                        <p>Anyone can license an image on Picfair. Simply, quickly, and without complication.</p>
                        <a href="#">Our simple licences <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="content-section-item content-item">
                        <h5>Revolutionary image search</h5>
                        <p>Half human, half algorithm: our Maroon technology sorts images from anywhere. </p>
                        <a href="#">Search for images now  <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="content-section-item content-item">
                        <h5>Fairly-paid photographers</h5>
                        <p>The world's first photographer-controlled image marketplace. Open, honest, fair.</p>
                        <a href="#">Upload your images now  <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>      
        </div>
    </div>

    <div class="testimonial">
        <h3>What Our Customers Are Saying</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-item">
                        <img src="images/custmers.png" alt="custmers">
                        <h6><span>George Davis</span><br>Best quality and best price.</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-item">
                        <img src="images/custmers1.png" alt="custmers1">
                        <h6><span>Liza Barook</span><br>Best quality and best price.</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-item">
                        <img src="images/custmers2.png" alt="custmers2">
                        <h6><span>George Davis</span><br>Best quality and best price.</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.includes.signup-section')

    @include('layouts.includes.footer')

</body>
</html>












<!-- <div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>

            <ul class="navbar-nav ml-auto">
            @guest
            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @else
        <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
        </div>
        </li>
        @endguest
        </ul>
        </div>
        </div>
    </nav>

    <main class="py-4">
    @yield('content')
    </main>
</div>
 -->