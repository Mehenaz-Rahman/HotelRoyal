<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-brands/css/uicons-brands.css'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.5.1/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="restaurant.css">
    <style>
        .form-group input[type="number"] {
            background-color: transparent;
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #af9556;
            border-radius: 5px;
            box-sizing: border-box;
            color: white;
        }

        .res_close {
            margin-left: 200px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}">Hotel Royal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Room
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{url('our_room')}}">Room</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="room_details.html">Room Details</a></li>
                            <li><a class="dropdown-item" href="room_details2.html">Room Details 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('about_us')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('our_gallery')}}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('faq')}}">F.A.Qs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{url('restaurant')}}">Restaurant</a></li>
                            <li><a class="dropdown-item" href="{{url('services')}}">Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact_us')}}">Contact</a>
                    </li>
                </ul>
                <a href="{{url('our_room')}}">
                    <button class="book-btn" type="button">Book Now</button>
                </a>

                @if (Route::has('login'))
                        @auth
                            <x-app-layout>

                            </x-app-layout>
                        @else
                            <a href="{{url('login')}}" class="login-icon">
                                <i class="fas fa-sign-in-alt"></i>
                            </a>

                            @if (Route::has('register'))

                                <a href="{{url('register')}}" class="register-icon">
                                    <i class="fas fa-user-plus"></i>
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif

            <a href="" class="login-icon">
                <i class="fas fa-shopping-cart"></i>
            </a>
        </div>
        </div>
    </nav>

    <div class="hero-area-bg">
        <div class="hero-area d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="hero-content text-center">
                            <h4>Welcome</h4>
                            <h1>The Best Luxurius</h1>
                            <h2>Restaurant In UK</h2>
                            <div class="hero-button">
                                <a href="{{ url('restaurant')}}#reservation">Book A Table <i
                                        class="fi fi-ts-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumb">
                        <img src="assets/rest-about.jpg" alt="">
                        <img src="assets/rest-features.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6  upper">
                    <div class="section-title">
                        <h4>About Our Restaurant </h4>
                        <h1>Luxury Restaurant In UK</h1>
                        <p class="section-desc-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Blanditiis voluptatem quibusdam perspiciatis? Quis perferendis
                            at, officiis laudantium earum, sed corrupti atque minima quae
                            delectus, nulla repellendus! Nobis natus eveniet sapiente.
                        </p>
                        <p class="section-desc-2">
                            Bndulgence diminution so discovered mr apartments.
                            Are off under folly death wrote cause her way spite.
                            Plan upon yet way get cold spot its week. Almost do
                            am or limits hearts. Resolve parties but why she shewing.
                        </p>
                        <div class="hero-button">
                            <a href="{{url('restaurant')}}#menu">Expore Our Restaurant<i
                                    class="fi fi-ts-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="choose-us-style default-padding">
        <div class="container">
            <div class="choose-us-style-items">
                <div class="row">
                    <div class="col-lg-4 col-md-6 choose-us-style-desc">
                        <div class="item animate fadeInUp animated" data-animate="fadeInUp"
                            style="visibility: visible;">
                            <img src="assets/rest-icon1.png" alt="Icon">
                            <h4>Quality Foods</h4>
                            <p>
                                Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling
                                by introduced of mr terminated.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 choose-us-style-desc">
                        <div class="item animate fadeInUp animated" data-animate="fadeInUp" data-delay="200ms"
                            style="animation-delay: 200ms; visibility: visible;">
                            <img src="assets/rest-icon2.png" alt="Icon">
                            <h4>Fast Delivery</h4>
                            <p>
                                Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling
                                by introduced of mr terminated.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 choose-us-style-desc">
                        <div class="item animate fadeInUp animated" data-animate="fadeInUp" data-delay="400ms"
                            style="animation-delay: 400ms; visibility: visible;">
                            <img src="assets/rest-icon3.png" alt="Icon">
                            <h4>Delicious Recipes</h4>
                            <p>
                                Belonging sir curiosity discovery extremity yet forfeited prevailed own off. Travelling
                                by introduced of mr terminated.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="special-offer-area">
        <div class="container">
            <div class="offer-content" style="background-image: url(assets/img/shape/4.jpg);">
                <div class="row align-center">
                    <div class="col-lg-6 pr-80 pr-md-15 pr-xs-15">
                        <div class="offer-images">
                            <img src="assets/rest-offer-3.png" alt="Image Not Found">
                            <img src="assets/rest-offer-2.png" alt="Image Not Found">
                            <img src="assets/rest-offer-1.png" alt="Image Not Found">
                            <div class="discount-badge animate zoomIn animated" data-animate="zoomIn"
                                style="visibility: visible;">
                                Up To <br> <strong>30%</strong> <br> Discount
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="offer-details">
                            <h4 class="sub-title">Today Special Offer</h4>
                            <h2>Explore Irresistible Promotions!</h2>
                            <p>
                                Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant
                                stuff. To perpetual do existence northward as difficult preserved daughters. Continued
                                at up to zealously necessary.
                            </p>
                            <div class="offer-button">
                                <a href="{{url('restaurant')}}#menu">Oder Now<i class="fi fi-ts-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-section special-menu-area" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="heading-container text-center">
                        <h4 class="subtitle">Food Menu</h4>
                        <h2 class="main-title">Our Specials Menu</h2>
                    </div>
                </div>
            </div>
            <div class="menu-tabs-container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="nav nav-tabs menu-nav style-three" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-main-dishes" data-bs-toggle="tab"
                                data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1"
                                aria-selected="true">
                                Main Dishes
                            </button>
                            <button class="nav-link" id="nav-desserts" data-bs-toggle="tab" data-bs-target="#tab2"
                                type="button" role="tab" aria-controls="tab2" aria-selected="false">
                                Desserts
                            </button>
                            <button class="nav-link" id="nav-seafood" data-bs-toggle="tab" data-bs-target="#tab3"
                                type="button" role="tab" aria-controls="tab3" aria-selected="false">
                                Sea Food
                            </button>
                            <button class="nav-link" id="nav-beverages" data-bs-toggle="tab" data-bs-target="#tab4"
                                type="button" role="tab" aria-controls="tab4" aria-selected="false">
                                Beverage
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-content food-style" id="nav-tabContent">

                            <!-- Main Dishes Tab Pane -->
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                aria-labelledby="nav-main-dishes">
                                <div class="row">
                                    @foreach($menu as $data)
                                        @if($data->category == 'Main Dishes')
                                            <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                                <div class="food-menu-style">
                                                    <div class="thumb">
                                                        <img src="{{ asset('menu/' . $data->image) }}" alt="{{ $data->name }}">
                                                        <div class="d-flex">
                                                            <div class="food-review">
                                                                <i class="fas fa-star"></i>
                                                                <span>{{ $data->review }}</span>
                                                            </div>
                                                            <div class="price">
                                                                <span><del>${{ $data->original_price }}</del>
                                                                    ${{ $data->price }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <h4>{{ $data->name }}</h4>
                                                        <ul>
                                                            @foreach(explode(',', $data->ingredients) as $ingredient)
                                                                <li>{{ $ingredient }}</li>
                                                            @endforeach
                                                        </ul>
                                                        <a href="#" class="cart-btn-border"><i class="fas fa-shopping-cart"></i>
                                                            Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <!-- Desserts Tab Pane -->
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="nav-desserts">
                                <div class="row">
                                    @foreach($menu as $data)
                                        @if($data->category == 'Desserts')
                                            <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                                <div class="food-menu-style">
                                                    <div class="thumb">
                                                        <img src="{{ asset('menu/' . $data->image) }}" alt="{{ $data->name }}">
                                                        <div class="d-flex">
                                                            <div class="food-review">
                                                                <i class="fas fa-star"></i>
                                                                <span>{{ $data->review }}</span>
                                                            </div>
                                                            <div class="price">
                                                                <span><del>${{ $data->original_price }}</del>
                                                                    ${{ $data->price }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <h4>{{ $data->name }}</h4>
                                                        <ul>
                                                            @foreach(explode(',', $data->ingredients) as $ingredient)
                                                                <li>{{ $ingredient }}</li>
                                                            @endforeach
                                                        </ul>
                                                        <a href="#" class="cart-btn-border"><i class="fas fa-shopping-cart"></i>
                                                            Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <!-- Sea Food Tab Pane -->
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="nav-sea-food">
                                <div class="row">
                                    @foreach($menu as $data)
                                        @if($data->category == 'Sea Food')
                                            <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                                <div class="food-menu-style">
                                                    <div class="thumb">
                                                        <img src="{{ asset('menu/' . $data->image) }}" alt="{{ $data->name }}">
                                                        <div class="d-flex">
                                                            <div class="food-review">
                                                                <i class="fas fa-star"></i>
                                                                <span>{{ $data->review }}</span>
                                                            </div>
                                                            <div class="price">
                                                                <span><del>${{ $data->original_price }}</del>
                                                                    ${{ $data->price }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <h4>{{ $data->name }}</h4>
                                                        <ul>
                                                            @foreach(explode(',', $data->ingredients) as $ingredient)
                                                                <li>{{ $ingredient }}</li>
                                                            @endforeach
                                                        </ul>
                                                        <a href="#" class="cart-btn-border"><i class="fas fa-shopping-cart"></i>
                                                            Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <!-- Beverages Tab Pane -->
                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="nav-beverages">
                                <div class="row">
                                    @foreach($menu as $data)
                                        @if($data->category == 'Beverages')
                                            <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                                <div class="food-menu-style">
                                                    <div class="thumb">
                                                        <img src="{{ asset('menu/' . $data->image) }}" alt="{{ $data->name }}">
                                                        <div class="d-flex">
                                                            <div class="food-review">
                                                                <i class="fas fa-star"></i>
                                                                <span>{{ $data->review }}</span>
                                                            </div>
                                                            <div class="price">
                                                                <span><del>${{ $data->original_price }}</del>
                                                                    ${{ $data->price }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <h4>{{ $data->name }}</h4>
                                                        <ul>
                                                            @foreach(explode(',', $data->ingredients) as $ingredient)
                                                                <li>{{ $ingredient }}</li>
                                                            @endforeach
                                                        </ul>
                                                        <a href="#" class="cart-btn-border"><i class="fas fa-shopping-cart"></i>
                                                            Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="hours-section">
        <div class="wrapper">
            <div class="hours-items">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hours-thumb video-background-active">
                            <img src="assets/opening-hours-2.jpg" alt="Image Not Found"
                                style="position: relative; width: 100%; height: auto;">
                            <div class="video-player is-muted"
                                data-property="{videoURL:'0Fs-4GiNxQ8',containment:'.video-background-active', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:654, opacity:1, quality:'default'}"
                                style="display: none; position: relative;" id="YTP_1724583170889"></div>
                        </div>

                    </div>
                    <div class="col-lg-5">
                        <div class="hours-info animation fadeInLeft animated" data-animate="fadeInLeft"
                            style="visibility: visible;">
                            <h3>Opening Hours</h3>
                            <p>
                                A relaxing and pleasant atmosphere, good jazz, dinner, and cocktails. The Patio Time Bar
                                opens in the
                                center.
                            </p>
                            <ul class="hours-schedule">
                                <li>
                                    <h6>Sunday to Tuesday:</h6> <span>10:00 - 09:00</span>
                                </li>
                                <li>
                                    <h6>Wednesday to Thursday:</h6> <span>11:30 - 10:30</span>
                                </li>
                                <li>
                                    <h6>Friday &amp; Saturday:</h6> <span>10:30 - 12:00</span>
                                </li>
                            </ul>
                            <div class="contact-action">
                                <div class="icon">
                                    <img src="assets/open-icon.png" alt="Image Not Found">
                                </div>
                                <div class="details">
                                    <p>Call Anytime</p>
                                    <h4><a href="#">+947374-754353</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="food-gallery py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h4 class="subtitle">Gallery</h4>
                    <h2 class="main-title">Our Food Gallery</h2>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div id="foodGalleryCarousel" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($food_gallery as $food_gallery)
                            
                                <div class="swiper-slide">
                                    <div class="gallery-item position-relative">
                                        <img src="/food_gallery/{{$food_gallery->image}} " class="img-fluid"
                                            alt="Image Not Found">
                                        <div
                                            class="overlay position-absolute w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                                            <span>{{$food_gallery->food_description}}</span>
                                            <h4>{{$food_gallery->food_title}}</h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="statistics-area">
        <div class="container">
            <div class="stats-inner">
                <div class="row">
                    <div class="col-lg-3 col-md-6 stat-item">
                        <div class="stat">
                            <div class="stat-counter">
                                <div class="counter-number" data-to="18" data-speed="2000">18</div>
                                <div class="counter-symbol">+</div>
                            </div>
                            <span class="stat-description">Awards Won</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 stat-item">
                        <div class="stat">
                            <div class="stat-counter">
                                <div class="counter-number" data-to="8" data-speed="2000">8</div>
                                <div class="counter-symbol">K</div>
                            </div>
                            <span class="stat-description">Daily Orders</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 stat-item">
                        <div class="stat">
                            <div class="stat-counter">
                                <div class="counter-number" data-to="12" data-speed="2000">120</div>
                                <div class="counter-symbol">K</div>
                            </div>
                            <span class="stat-description">Trusted Users</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 stat-item">
                        <div class="stat">
                            <div class="stat-counter">
                                <div class="counter-number" data-to="5" data-speed="2000">55</div>
                                <div class="counter-symbol">+</div>
                            </div>
                            <span class="stat-description">Menu &amp; Dish</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="book-table-section" id="reservation">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6">
                    <img src="assets/opening-hours.jpg" alt="">
                </div>
                <div class="col-md-6 makereservation p-4 p-md-5">
                    <div class="heading-section mb-5">
                        <span class="subheading">Book a Table</span>
                        <h2 class="mb-4">Make Reservation</h2>

                        @if (session()->has('reservation_message'))
                            <div class="alert alert-success">
                                {{session()->get('reservation_message')}}
                                <button type="button" class="res_close" data-bs-dismiss="alert">X</button>
                            </div>
                        @endif
                    </div>
                    <form action="{{url('reservation')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" placeholder="Your Name" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" placeholder="Your Email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control" placeholder="Phone" name="phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input type="date" class="form-control" id="book_date" placeholder="Date"
                                        name="date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Time</label>
                                    <input type="time" class="form-control" id="book_time" placeholder="Time"
                                        name="time">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Person</label>
                                    <input type="number" placeholder="No. of Person" name="person">
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <input type="submit" value="Make a Reservation" class="btn resevation-btn ">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section" id="review">
        <div class="container">
            <div class="col-12">
                <div class="rx-banner text-center rx-banner-effects">
                    <h4>Testimonial</h4>
                    <h1>What Our Client Say</span></h1>
                </div>
            </div>
            <div class="container-lg">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="testimonial">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                                    tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec
                                                    turpis vel, semper malesuada ante.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-1.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Paula Wilson</b></div>
                                                        <div class="details">Media Analyst
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i
                                                                        class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="testimonial">
                                                <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit
                                                    tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut
                                                    magna consequat faucibus quam.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-2.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Antonio Moreno</b></div>
                                                        <div class="details">Web Developer</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i
                                                                        class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="testimonial">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                                    tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec
                                                    turpis vel, semper malesuada ante.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-3.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Michael Holz</b></div>
                                                        <div class="details">Web Developer</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i
                                                                        class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="testimonial">
                                                <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit
                                                    tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut
                                                    magna consequat faucibus quam.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-4.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Mary Saveley</b></div>
                                                        <div class="details">Graphic Designer / MarsMedia</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i
                                                                        class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="testimonial">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                                    tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec
                                                    turpis vel, semper malesuada ante.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-5.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Martin Sommer</b></div>
                                                        <div class="details">SEO Analyst</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i
                                                                        class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="testimonial">
                                                <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit
                                                    tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut
                                                    magna consequat faucibus quam.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-6.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>John Williams</b></div>
                                                        <div class="details">Web Designer</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i
                                                                        class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                                <i class="fa fa-chevron-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="contact-area inner-style" id="contact">
        <div class="container">
            <div class="row add-background">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h4>Contact us</h4>
                        <h1>Contact With Us</h1>
                        <p class="section-desc-2">Rapidiously myocardinate cross-platform intellectual capital after the
                            model. Appropriately create interactive infrastructures after maintance
                            Holisticly facilitate stand-alone
                        </p>
                    </div>
                    <div class="single-contact-box">
                        <div class="contact-icon">
                            <i class="fi fi-ts-phone-call"></i>
                        </div>
                        <div class="contact-title">
                            <h4>Call Us Now</h4>
                            <p>+980 436 (5374) 652</p>
                        </div>
                    </div>
                    <div class="single-contact-box">
                        <div class="contact-icon">
                            <i class="fi fi-ts-envelopes"></i>
                        </div>
                        <div class="contact-title">
                            <h4>Sent Email</h4>
                            <p>hotelroyal@gmail.com</p>
                        </div>
                    </div>
                    <div class="single-contact-box">
                        <div class="contact-icon">
                            <i class="fi fi-ts-marker"></i>
                        </div>
                        <div class="contact-title">
                            <h4>Our Locations</h4>
                            <p>Meridian Gate, Bute Terrace, <br> Cardiff CF10 2FL</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                            <button type="button" class="close" data-bs-dismiss="alert">X</button>
                        </div>
                    @endif

                    <form action="{{url('contact')}}" method="post" id="dreamit-form">
                        @csrf
                        <div class="single-contact-form">
                            <div class="contact-content">
                                <h4>Get In Touch</h4>
                            </div>
                            <div class="single-input-box">
                                <input type="text" name="name" placeholder="Your Name" required="">
                            </div>
                            <div class="single-input-box">
                                <input type="text" name="email" placeholder="Enter Your Email" required="">
                            </div>
                            <div class="single-input-box">
                                <input type="text" name="subject" placeholder="Subject" required="">
                            </div>
                            <div class="single-input-box">
                                <textarea name="message" id="Message" placeholder="Write Message"
                                    required=""></textarea>
                            </div>
                            <div class="single-input-box">
                                <button type="submit">Sent Message</button>
                            </div>
                        </div>
                    </form>
                    <div id="status"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget-logo">
                        <a class="footer-widget-logo" href="index.html">Hotel Royal</a>
                    </div>

                    <p class="footer-desc">Rapidiously myocardinate crossing the hotella
                        model. Appropriately create interesting area
                        Holisticly facilitat place done.</p>

                    <div class="footear-contact">
                        <span><i class="fi fi-sr-call-incoming"></i> +980 (1234) 567 220</span>
                    </div>
                    <div class="footer-widget-social-icon">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget-content">
                        <div class="footer-widget-title">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="footer-widget-menu">
                            <ul>
                                <li><a href="about.html">About Hotel</a></li>
                                <li><a href="room-list.html">Rooms &amp; Suites</a></li>
                                <li><a href="service-details.html">Reservations</a></li>
                                <li><a href="blog-details.html">News &amp; Blogs</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget-content">
                        <div class="footer-widget-title add">
                            <h4>Gallery</h4>
                        </div>
                        <div class="footer-widget-gallery">
                            <a class="place venobox vbox-item" data-gall="lace-imgs" href="assets/gallery-1.jpg"><img
                                    src="assets/gallery-1.jpg" alt=""></a>
                            <a class="place venobox vbox-item" data-gall="lace-imgs" href="assets/room-1.jpg"><img
                                    src="assets/room-1.jpg" alt=""></a>
                            <a class="place venobox vbox-item" data-gall="lace-imgs" href="assets/gallery-3.jpg"><img
                                    src="assets/gallery-3.jpg" alt=""></a>
                            <a class="place venobox vbox-item" data-gall="lace-imgs" href="assets/gallery-4.jpg"><img
                                    src="assets/gallery-4.jpg" alt=""></a>
                            <a class="place venobox vbox-item" data-gall="lace-imgs" href="assets/gallery-5.jpg"><img
                                    src="assets/gallery-5.jpg" alt=""></a>
                            <a class="place venobox vbox-item" data-gall="lace-imgs" href="assets/gallery-6.jpg"><img
                                    src="assets/gallery-6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget-content">
                        <div class="footer-widget-title">
                            <h4>Newsletter</h4>
                        </div>
                        <p>Subscribe our Newsletter</p>
                        <form action="#">
                            <div class="single-newsletter-box">
                                <input type="text" name="Email" placeholder="Enter E-Mail" required="">
                                <button type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row aa-boder align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="footer-bottom-content">
                        <h4>© 2024, Company Name. All Rights Reserved.</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="footer-bottom-content">
                        <ul>
                            <li><a href="#">Terms &amp; Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(function () {

            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();

            if (month < 10)
                month = '0' + month.toString();

            if (day < 10)
                day = '0' + day.toString();


            var maxDate = year + '-' + month + '-' + day;

            $('#book_date').attr('min', maxDate);

        });

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            freeMode: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                renderBullet: function (index, className) {
                    if (index >= 0 && index < 3) {
                        return '<span class="' + className + '"></span>';
                    }
                    return '';
                },
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });


        document.addEventListener('DOMContentLoaded', function () {
            let hasAnimated = false;

            function animateCounters() {
                const counters = document.querySelectorAll('.counter-number');
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-to');
                    const speed = +counter.getAttribute('data-speed');
                    const increment = target / (speed / 40);
                    let current = 0;

                    function updateCounter() {
                        current += increment;
                        if (current >= target) {
                            counter.textContent = target;
                        } else {
                            counter.textContent = Math.floor(current);
                            requestAnimationFrame(updateCounter);
                        }
                    }

                    updateCounter();
                });
            }

            function checkInView() {
                const counters = document.querySelectorAll('.counter-number');
                const windowHeight = window.innerHeight;
                counters.forEach(counter => {
                    const rect = counter.getBoundingClientRect();
                    if (rect.top <= windowHeight && !hasAnimated) {
                        animateCounters();
                        hasAnimated = true;
                    } else if (rect.top > windowHeight) {
                        hasAnimated = false;
                    }
                });
            }

            window.addEventListener('scroll', checkInView);
            window.addEventListener('load', checkInView);
        });
    </script>

</body>

</html>