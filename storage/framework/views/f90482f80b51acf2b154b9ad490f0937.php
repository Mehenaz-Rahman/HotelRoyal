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
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.5.1/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="room.css">
    <style>
        .single-input-box input {
            background-color: transparent;
            color: #999;
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .single-input-box label {
            margin-bottom: 10px;
        }

        .close {
            margin-left: 80px;
        }
    </style>
</head>

<body>
    <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h4>Room Details</h4>
                        <ul>
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li>/</li>
                            <li>Room Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="room-details-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="room-details-thumb">
                                <img src="/room/<?php echo e($room->image); ?>" alt="">
                            </div>
                            <div class="room-details-content">
                                <h4><?php echo e($room->room_type); ?> Room</h4>
                                <h1><?php echo e($room->room_title); ?></h1>
                                <div class="room-details-item">
                                    <span><img src="assets/service-2.png" alt=""> <?php echo e($room->bed); ?></span>
                                    <span><img src="assets/icon-1.png" alt=""> <?php echo e($room->size); ?> SQFT</span>
                                    <span><img src="assets/icon-2.png" alt=""> <?php echo e($room->bath); ?> Bathroom</span>
                                    <span><img src="assets/icon-3.png" alt=""> 1 Kitchen</span>
                                </div>
                                <p class="room-detils-desc">
                                    Rapidiously myocardinate cross-platform intellectual capital after
                                    marketing model. Appropriately create interactive infrastructures after maintainable
                                    are
                                    Holisticly facilitate stand-alone inframe extend state of the art benefits via
                                    web-enabled value.
                                    Completely fabricate extensible infomediaries rather than reliable e-services.
                                    Dramatically
                                    whiteboard alternative
                                </p>

                                <p class="room-detils-desc">
                                    Conveniently fashion pandemic potentialities for team driven technologies.
                                    Proactively orchestrate robust systems rather than user-centric vortals.
                                    Distinctively seize
                                    top-line e-commerce with premier intellectual capital. Efficiently strategize
                                    goal-oriented
                                </p>
                            </div>
                            <div class="room-details-check-wrapper">
                                <div class="room-details-check-box">
                                    <div class="room-details-check-content">
                                        <span><img src="assets/exit.png" alt="">Check In</span>
                                        <p class="check-item"><i class="fi fi-br-check"></i>Check-in from 9:00 AM -
                                            anytime</p>
                                        <p class="check-item"><i class="fi fi-br-check"></i>Early check-in subject to
                                            availability</p>
                                    </div>
                                </div>
                                <div class="room-details-check-box upper">
                                    <div class="room-details-check-content">
                                        <span><img src="assets/exit-right.png" alt="">Check Out</span>
                                        <p class="check-item"><i class="fi fi-br-check"></i>Check-out before noon</p>
                                        <p class="check-item"><i class="fi fi-br-check"></i>Check-out from 9:00 AM -
                                            anytime</p>
                                    </div>
                                </div>
                            </div>
                            <div class="room-rules">
                                <a href="#">Room Rules</a>
                                <p>Rapidiously myocardinate cross-platform intellectual capital after marketing model.
                                    Appropriately create reliable e-services. Dramatically whiteboard alternative</p>
                                <div class="rules">
                                    <ul>
                                        <li>Check - in: 2.00 PM</li>
                                        <li>Check - out: 11.00 AM</li>
                                        <li>No smoking in the room</li>
                                    </ul>
                                    <ul>
                                        <li>No Pets are allowed ( if they have to be sent at the reception )</li>
                                        <li>Lost room key (10$ fine)</li>
                                        <li>Damage the item (depending on the value of the item)</li>
                                    </ul>
                                </div>
                                <h4>Cancellation Policy</h4>
                                <p>Conveniently fashion pandemic potentialities for team driven technologies.
                                    Proactively orchestrate robust systems rather than user-centric vortals.
                                    Distinctively seize top-line e-commerce with premier intellectual capital.
                                    Efficiently strategize goal-oriented</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="room-details-sidebar">
                                <div class="room-details-sidebar-form">
                                    <div class="room-sidebar-title">
                                        <span>Booking</span>
                                        <p>$<?php echo e($room->price); ?><span class="two">/NIGHT</span></p>
                                    </div>

                                    <div>
                                        <?php if(session()->has('message')): ?>
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <?php echo e(session()->get('message')); ?>

                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        <?php endif; ?>
                                    </div>


                                    <?php if($errors): ?>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li style=" color:white;">
                                                <?php echo e($errors); ?>

                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>

                                    <form action="<?php echo e(url('add_booking', $room->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="single-input-box">
                                            <label>Name</label>
                                            <input type="text" required="" placeholder="Enter Your Name" name="name"
                                                <?php if(Auth::user()): ?> value="<?php echo e(Auth::user()->name); ?>" <?php endif; ?>>
                                        </div>
                                        <div class="single-input-box">
                                            <label>Email</label>
                                            <input type="email" required="" placeholder="Enter Your Email" name="email"
                                                <?php if(Auth::user()): ?> value="<?php echo e(Auth::user()->email); ?>" <?php endif; ?>>
                                        </div>
                                        <div class="single-input-box">
                                            <label>Phone</label>
                                            <input type="text" required="" placeholder="Your Number" name="phone"
                                                <?php if(Auth::user()): ?> value="<?php echo e(Auth::user()->phone); ?>" <?php endif; ?>>
                                        </div>

                                        <div class="single-input-box">
                                            <label>Check In</label>
                                            <input type="date" required="" name="check_in" id="check_in">
                                        </div>
                                        <div class="single-input-box">
                                            <label>Check Out</label>
                                            <input type="date" required="" name="check_out" id="check_out">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single-input-box">
                                                    <label> Adults</label>
                                                    <select name="rooms_no">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single-input-box">
                                                    <label>Children</label>
                                                    <select name="children">
                                                        <option value="default" disabled selected>Select</option>
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04 </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="room-details-extra-service">
                                                <h4>Extra Service</h4>
                                            </div>
                                            <div class="single-extra-box">
                                                <div class="extra-check">
                                                    <input type="checkbox"><label>Room Clean</label>
                                                </div>
                                                <div class="txtra-title">
                                                    <h4>$10 / Night</h4>
                                                </div>
                                            </div>
                                            <div class="single-extra-box">
                                                <div class="extra-check">
                                                    <input type="checkbox"><label>Massage</label>
                                                </div>
                                                <div class="txtra-title">
                                                    <label>$10 / Person</label>
                                                    <select name="place">
                                                        <option value="saab">01</option>
                                                        <option value="opel">02</option>
                                                        <option value="audi">03</option>
                                                        <option value="audi">04 </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="single-extra-box">
                                                <div class="extra-check">
                                                    <input type="checkbox"><label>Day SPA</label>
                                                </div>
                                                <div class="txtra-title">
                                                    <label>$20 / Person</label>
                                                    <select name="place">
                                                        <option value="saab">01</option>
                                                        <option value="opel">02</option>
                                                        <option value="audi">03</option>
                                                        <option value="audi">04 </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="single-extra-box two">
                                                <div class="extra-check">
                                                    <h4>Total Cost </h4>
                                                </div>
                                                <div class="txtra-price">
                                                    <span>$<?php echo e($room->price); ?></span>
                                                </div>
                                            </div>
                                            <div class="info-submit-button">
                                                <button type="submit">Book Room</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="room-details-amenities">
                                    <div class="room-details-amenities-content">
                                        <h4>Amenities</h4>
                                    </div>
                                    <div class="room-amenities-item">
                                        <ul>
                                            <li><img src="assets/user.png" alt="">2 - 5 Persons</li>
                                            <li><img src="assets/facilities-2.png" alt="">Free WiFi Available</li>
                                            <li><img src="assets/facilities-6.png" alt="">Swiming pools</li>
                                            <li><img src="assets/facilities-3.png" alt="">Breakfast</li>
                                            <li><img src="assets/icon-1.png" alt=""><?php echo e($room->size); ?> SQFT Rooms</li>
                                            <li><img src="assets/facilities-4.png" alt="">Gym facilities</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="script.js"></script>
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

</html><?php /**PATH /Users/mithilarahman/Desktop/LARAVEL/Hotel_Managment/resources/views/home/room_details.blade.php ENDPATH**/ ?>