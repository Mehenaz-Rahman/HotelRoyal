<section class="gallery-section" id="gallery">
        <div class="container gal-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="gallery-section__content">
                        <h2 class="section__header">Our Gallery</h2>
                        <h1 class="section__subheader">Explore Our Hotel</h1>
                        <p class="section__description">
                            Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="col-lg-4 col-md-8 mb-4 mb-lg-0">
                    <img src="/gallery/<?php echo e($gallery-> image); ?>" class="w-100 shadow-1-strong rounded mb-4" />

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

        </div>
    </section><?php /**PATH /Users/mithilarahman/Desktop/LARAVEL/Hotel_Managment/resources/views/home/gallery.blade.php ENDPATH**/ ?>