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
                        <h4>Contact Us</h4>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>/</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                <textarea name="message" id="Message" placeholder="Write Message" required=""></textarea>
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