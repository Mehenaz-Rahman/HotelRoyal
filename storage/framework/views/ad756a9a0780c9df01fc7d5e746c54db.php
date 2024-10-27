<!DOCTYPE html>
<html>

<head>
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

.add_room .col-8 {
    flex: 0 0 100%;
    margin-left: 120px;
}

.add_room label {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 5px;
    color: white;
}

.add_room input[type="text"],
.add_room input[type="date"],
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

    .add_room .col-8{
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
                        <h1> Discount</h1>
                    </div>

                    <form class="add_room" action="<?php echo e(url('add_room')); ?>" method="Post" enctype="multipart/form-data">

                        <?php echo csrf_field(); ?>
                        <div class="col-8">
                            <label>Percentage</label>
                            <input type="text" name="title">
                        </div>
                        <div class="col-8">
                            <label>Time</label>
                            <input type="date" name="bed">
                        </div>

                        <div>
                            <input type="submit" value="Add Discount">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH /Users/mithilarahman/Desktop/LARAVEL/Hotel_Managment/resources/views/admin/add_discount.blade.php ENDPATH**/ ?>