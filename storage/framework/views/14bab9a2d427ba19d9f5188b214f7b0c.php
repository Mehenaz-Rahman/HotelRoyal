<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
  <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <style>
    .header_name{
        font-family: "Lora", serif;
        font-size: 30px;
        text-align: center;
        font-weight: bold;
        color: #fff;
        margin-top: 20px;
    }
    .add_room {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    color: white;
}

.add_room .col-12, 
.add_room .col-4, 
.add_room .col-6 {
    display: flex;
    flex-direction: column;

}

.add_room .col-12 {
    flex: 0 0 100%;
}

.add_room .col-4 {
    flex: 0 0 32%;
}

.add_room .col-6 {
    flex: 0 0 48%;
}

.add_room label {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 5px;
    color: white;
}

.add_room input[type="text"],
.add_room input[type="file"],
.add_room select {
    background-color: transparent;
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 2px solid #bbb;  
    border-radius: 5px;
    box-sizing: border-box;
    color: white;
}

.add_room input[type="file"] {
    padding: 7px;  
}

.add_room select {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 2px solid #bbb;
    border-radius: 5px;
}

.add_room input[type="submit"] {
    background-color: #af9556;
    color: #fff;
    font-size: 16px;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    margin-left: 220px;
}

.add_room input[type="submit"]:hover {
    background-color: #c4a676;
    color: white;
}


@media (max-width: 768px) {
    .add_room {
        flex-direction: column;
    }

    .add_room .col-4,
    .add_room .col-6,
    .add_room .col-12 {
        flex: 0 0 100%;
    }

    .add_room input[type="submit"] {
        font-size: 14px;
        padding: 10px;
    }
}


  </style>
  </head>
<body>

    <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="add_section">
                    <div class="header_name">
                        <h1> Update Room</h1>
                    </div>

                    <form class="add_room" action="<?php echo e(url('edit_room', $data-> id)); ?>" method="Post" enctype="multipart/form-data">

                    <?php echo csrf_field(); ?>
                        <div class="col-12">
                            <label>Room Title</label>
                            <input type="text" name="title" value="<?php echo e($data->room_title); ?>">
                        </div>
                        <div class="col-6">
                            <label>Bed</label>
                            <input type="text" name="bed" value="<?php echo e($data->bed); ?>">
                        </div>
                        <div class="col-6">
                            <label>Room Size</label>
                            <input type="text" name="size" value="<?php echo e($data->size); ?>">
                        </div>
                        <div class="col-6">
                            <label>Bath</label>
                            <input type="text" name="bath" value="<?php echo e($data->bath); ?>">
                        </div>
                        <div class="col-6">
                            <label>Price</label>
                            <input type="text" name="price" value="<?php echo e($data->price); ?>">
                        </div>
                        <div class="col-6">
                            <label>Room Type</label>
                            <select name="type">
                                <option selected value="<?php echo e($data->room_type); ?>"><?php echo e($data->room_type); ?></option>
                                <option value="premium">Premium</option>
                                <option value="delux">Deluxe</option>
                                <option value="super_delux">Super Deluxe</option>
                                <option value="luxury">Luxury</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label>Upload Image</label>
                            <input type="file" name="image" value="<?php echo e($data->image); ?>">
                        </div>

                        <div class="col-12">
                            <label>Current Image</label>
                            <img style="margin: auto;" width="250px" src="/room/<?php echo e($data->image); ?>" alt="">
                        </div>


                        <div>
                            <input type="submit" value="Update Room">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH /Users/mithilarahman/Desktop/LARAVEL/Hotel_Managment/resources/views/admin/update_room.blade.php ENDPATH**/ ?>