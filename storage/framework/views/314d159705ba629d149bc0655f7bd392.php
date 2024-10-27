<!doctype html>
<html lang="en">

<head>
    <?php echo $__env->make('home.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('home.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('home.room', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('home.about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="amenities-area" id="facilities">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header text-center">
                        <h4>Hotel Facilities</h4>
                        <h1>Our Hotel’s Facilities</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-amenity-box">
                        <div class="amenity-icon">
                            <img src="assets/facilities-1.png" alt="">
                        </div>
                        <div class="amenity-content">
                            <h4>Air Condition</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-amenity-box">
                        <div class="amenity-icon">
                            <img src="assets/facilities-2.png" alt="">
                        </div>
                        <div class="amenity-content">
                            <h4>Speed Internet</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-amenity-box">
                        <div class="amenity-icon">
                            <img src="assets/facilities-3.png" alt="">
                        </div>
                        <div class="amenity-content">
                            <h4>Breakfast</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-amenity-box">
                        <div class="amenity-icon">
                            <img src="assets/facilities-4.png" alt="">
                        </div>
                        <div class="amenity-content">
                            <h4>Gym Center</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-amenity-box">
                        <div class="amenity-icon">
                            <img src="assets/facilities-5.png" alt="">
                        </div>
                        <div class="amenity-content">
                            <h4>Smart Lock</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-amenity-box">
                        <div class="amenity-icon">
                            <img src="assets/facilities-6.png" alt="">
                        </div>
                        <div class="amenity-content">
                            <h4>Swimming Pool</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h4>Watch Our Hotel</h4>
                        <h1>Promotional Video</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Sapiente in ullam quae itaque deserunt blanditiis, voluptas
                            ad numquam? Consequuntur autem doloribus dicta est dolorem
                            dolorum ratione excepturi tenetur nihil alias.
                        </p>
                    </div>
                    <div class="video-button">
                        <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
                            href="https://www.youtube.com/watch?v=1fDn7a4TvwI"><i class="fi fi-ts-play-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-services padding-tb-50" id="services">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-12">
                    <div class="rx-banner text-center rx-banner-effects">
                        <h4>Our Services</h4>
                        <h1>Our Best <span>Services</span></h1>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="assets/service-1.png" alt="">
                        </div>
                        <div class="services-contact">
                            <h5>Basic Facilities</h5>
                            <ul>
                                <li>- Reception/Front Desk</li>
                                <li>- Room Service</li>
                                <li>- Housekeeping</li>
                                <li>- Wi-Fi &amp; Parking</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="assets/service-2.png" alt="">
                        </div>
                        <div class="services-contact">
                            <h5>Room Amenities</h5>
                            <ul>
                                <li>- Comfortable Bedding</li>
                                <li>- Bathroom &amp; Pool</li>
                                <li>- Tv, Ac &amp; Heathing</li>
                                <li>- Mini Bar &amp; Safe</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="assets/service-3.png" alt="">
                        </div>
                        <div class="services-contact">
                            <h5>Dining Options</h5>
                            <ul>
                                <li>- Restaurant &amp; Cafe</li>
                                <li>- Bar &amp; Lounge</li>
                                <li>- Cafe &amp; Canteen</li>
                                <li>- Room service</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="assets/service-4.png" alt="">
                        </div>
                        <div class="services-contact">
                            <h5>Leisure Facilities</h5>
                            <ul>
                                <li>- Swimming pool</li>
                                <li>- Gym / Fitness center</li>
                                <li>- Spa &amp; Beauty</li>
                                <li>- Sauna &amp; Steam Room</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="assets/service-5.png" alt="">
                        </div>
                        <div class="services-contact">
                            <h5>Business Services</h5>
                            <ul>
                                <li>- Conference Hall</li>
                                <li>- Meeting Rooms</li>
                                <li>- Business Center</li>
                                <li>- Wi-Fi &amp; Internet</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="assets/service-6.png" alt="">
                        </div>
                        <div class="services-contact">
                            <h5>Family Facilities</h5>
                            <ul>
                                <li>- Kids Club</li>
                                <li>- Babysitting Services</li>
                                <li>- Family Rooms</li>
                                <li>- Game zone</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="assets/service-7.png" alt="">
                        </div>
                        <div class="services-contact">
                            <h5>Additional Services</h5>
                            <ul>
                                <li>- Concierge</li>
                                <li>- Laundry &amp; Dry Cleaning</li>
                                <li>- Shuttle Service</li>
                                <li>- Pet-Friendly</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb-24 rx-575-50">
                    <div class="rx-services">
                        <div class="services-ico">
                            <img src="assets/service-8.png" alt="">
                        </div>
                        <div class="services-contact">
                            <h5>Special Features</h5>
                            <ul>
                                <li>- Custom Rooms</li>
                                <li>- Garden &amp; Golf</li>
                                <li>- Terrace</li>
                                <li>- Event Spaces</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="offer-section-padding" id="offer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="offer-section__content">
                        <p class="section__subheader">Special Offer</p>
                        <h2 class="section__header">Enjoy The Offer</h2>
                        <p class="section__description">
                            Suspendisse commodo bibendum purus at hendrerit. Vivamus aliquam bibendum fringilla.
                            Praesent cursus felis nunc, quis vulputate sapien posuere vitae. Aliquam erat volutpat.
                            Cras egestas porta massa eget pulvinar. Cras non enim et dui pharetra hendrerit mattis.
                        </p>
                        <p class="section__description-2">
                            PAYMENT OPTIONS :
                        </p>
                        <ul class="payment">
                            <li><a href="#"><i class="fa-brands fa-cc-visa"></i></li>
                            <li><a href="#"><i class="fa-brands fa-cc-paypal"></i></li>
                            <li><a href="#"><i class="fab fa-cc-mastercard"></i></a></li>
                            <li><a href="#"><i class="fab fa-cc-stripe"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="circle">
                        <?php $__currentLoopData = $discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <div class="content">
                            <h6>UP TO</h6>
                            <h1><?php echo e($data->percentage); ?>%</h1>
                            <p>On Selected Rooms</p>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="count-section" id="#offer">
        <div class="counter-wrapper">
            <div class="counter">
                <h1 class="count" data-target="120">0+</h1>
                <p>New Listing Every Week</p>
            </div>
            <div class="counter">
                <h1 class="count" data-target="220">0+</h1>
                <p>New Visitors Every Week</p>
            </div>
            <div class="counter">
                <h1 class="count" data-target="540">0+</h1>
                <p>Exceptional Food</p>
            </div>
            <div class="counter">
                <h1 class="count" data-target="2560">0+</h1>
                <p>Happy customers every year</p>
            </div>
        </div>
    </section>

    <?php echo $__env->make('home.gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                            <!-- Carousel controls -->
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

    <?php echo $__env->make('home.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">

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

            $('#check_in').attr('min', maxDate);
            $('#check_out').attr('min', maxDate);

        });

    </script>
</body>

</html><?php /**PATH /Users/mithilarahman/Desktop/LARAVEL/Hotel_Managment/resources/views/home/index.blade.php ENDPATH**/ ?>