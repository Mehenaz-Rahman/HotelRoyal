<!doctype html>
<html lang="en">
  <head>
    @include('home.css')
  </head>
  <body>
    @include('home.header')

    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h4>Faqs</h4>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>/</li>
                            <li>Faqs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="faqs" id="faq">
        <div class="col-lg-12 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="rx-banner text-center rx-banner-effects">
                <h4>Faqs</h4>
                <h1>Frequently Asked Questions</h1>
            </div>
        </div>
        <div class="row">
            <div class="image">
                <img src="assets/test-bg.jpg" alt="">
            </div>
            <div class="content">
                <div class="box">
                    <h3>How can I confirm that you have received my reservation?
                        <span class="icon">+</span>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cupiditate mollitia.</p>
                </div>
        
                <div class="box">
                    <h3>Up to what age are they considered children?
                        <span class="icon">+</span>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cupiditate mollitia.</p>
                </div>
        
                <div class="box">
                    <h3>Do you have any discount code?
                        <span class="icon">+</span>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cupiditate mollitia.</p>
                </div>
        
                <div class="box">
                    <h3>How can I get in touch with my hotel?
                        <span class="icon">+</span>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cupiditate mollitia.</p>
                </div>
        
                <div class="box">
                    <h3>On the last day, can I leave the room later?
                        <span class="icon">+</span>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cupiditate mollitia.</p>
                </div>
    
                <div class="box">
                    <h3>How can I pay for my booking?
                        <span class="icon">+</span>
                    </h3>
                    <p>We accept Visa, MasterCard, and American Express credit and debit cards for your convenience.</p>
                </div>
                <div class="box">
                    <h3>Do you have hotels with a spa?
                        <span class="icon">+</span>
                    </h3>
                    <p>Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. 
                    </p>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-1.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Paula Wilson</b></div>
                                                        <div class="details">Media Analyst
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>										
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="testimonial">
                                                <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-2.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Antonio Moreno</b></div>
                                                        <div class="details">Web Developer</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-3.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Michael Holz</b></div>
                                                        <div class="details">Web Developer</div>											
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>										
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="testimonial">
                                                <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-4.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Mary Saveley</b></div>
                                                        <div class="details">Graphic Designer / MarsMedia</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-5.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Martin Sommer</b></div>
                                                        <div class="details">SEO Analyst</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>										
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="testimonial">
                                                <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-6.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>John Williams</b></div>
                                                        <div class="details">Web Designer</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
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

    <section class="newsletter-section">
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-xl-9 col-lg-9">
                    <div class="title-section center-align mb-40 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s" style="visibility: visible; animation-name: fadeInDown;">
                        <h5>Newsletter</h5>
                        <h2>
                            Get Best Offers On The Hotel
                        </h2>
                        <p>With the subscription, enjoy your favourite Hotels without having to think about it</p>
                    </div>
                    <form name="ajax-form" id="newsletter-form" action="#" method="post" class="contact-form newsletter">
                        <div class="input-group">
                            <input class="form-control" id="email-input" name="email" type="email" placeholder="Your Email Address" value="" required=""> 
                            <button type="submit" class="btn btn-custom" id="subscribe-button">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('home.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>

  </body>
</html>