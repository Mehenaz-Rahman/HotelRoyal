<!doctype html>
<html lang="en">
  <head>
    <?php echo $__env->make('home.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h4>Gallery</h4>
                        <ul>
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li>/</li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('home.gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                        <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/watch?v=1fDn7a4TvwI"><i class="fi fi-ts-play-circle"></i></a>
                    </div>
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

    <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>

  </body>
</html><?php /**PATH /Users/mithilarahman/Desktop/LARAVEL/Hotel_Managment/resources/views/home/our_gallery.blade.php ENDPATH**/ ?>