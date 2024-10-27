<style>
    .close {
        margin-left: 300px;
    }
</style>
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

                <?php if(session()->has('message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('message')); ?>

                        <button type="button" class="close" data-bs-dismiss="alert">X</button>
                    </div>
                <?php endif; ?>

                <form action="<?php echo e(url('contact')); ?>" method="post" id="dreamit-form">
                    <?php echo csrf_field(); ?>
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
</section><?php /**PATH /Users/mithilarahman/Desktop/LARAVEL/Hotel_Managment/resources/views/home/contact.blade.php ENDPATH**/ ?>