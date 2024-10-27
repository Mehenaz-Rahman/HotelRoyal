<div class="room-area" id="room">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h4>Rooms & Suites</h4>
                    <h1>our best room and suites <br> luxury hotels</h1>
                </div>
            </div>
        </div>

        <div class="row col-lg-12 col-md-6 col-sm-12">
            <?php $__currentLoopData = $room; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rooms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <div class="single-room-box">
                        <div class="single-room-thumb">
                            <img src="room/<?php echo e($rooms->image); ?>" alt="">
                        </div>
                        <div class="room-icon">
                            <a class="place venobox vbox-item" data-gall="lace-imgs" href="assets/room-1.jpg">
                                <i class="fi fi-br-copy-image"></i>
                            </a>
                        </div>
                        <div class="room-content">
                            <h4><?php echo e($rooms->room_title); ?></h4>
                            <h5>$<?php echo e($rooms->price); ?></h5>
                            <ul>
                                <li><i class="fi fi-br-check"></i><?php echo e($rooms->size); ?> SQ.FT/Rooms</li>
                                <li><i class="fi fi-br-check"></i><?php echo e($rooms->bed); ?></li>
                                <li><i class="fi fi-br-check"></i>3+ Guests Allowed</li>
                            </ul>
                        </div>
                        <div class="room-bottom">
                            <div class="room-button">
                                <a href="<?php echo e(url('room_details', $rooms->id)); ?>">view details<i class="bi bi-plus"></i></a>
                            </div>
                            <div class="room-rewiew">
                                <ul>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star-sharp-half"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH /Users/mithilarahman/Desktop/LARAVEL/Hotel_Managment/resources/views/home/room.blade.php ENDPATH**/ ?>