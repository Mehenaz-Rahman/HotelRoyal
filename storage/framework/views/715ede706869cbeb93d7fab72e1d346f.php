<!DOCTYPE html>
<html>

<head>
    <?php echo $__env->make('manager.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        .header_name {
            font-family: "Lora", serif;
            font-size: 30px;
            text-align: center;
            font-weight: bold;
            color: #fff;
            margin-top: 20px;
        }

        .add_image {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            color: white;
        }

        .view_image {
            display: flex;
            flex-direction: row;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1200px;
        }

        .image-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .view_image img {
            margin-top: 50px;
            width: 320px;
            height: 200px;
            margin-bottom: 10px;
            margin-right: 20px;
        }


        .add_image .col-8,
        .add_image .col-6 {
            flex: 0 0 100%;
            margin-left: 120px;
        }

        .add_image label {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
            color: white;
        }
        .view_image h1,
        .view_image h2{
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
            color: white;
        } 

        .add_image input[type="file"],
        .add_image input[type="text"] {
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

        .add_image input[type="submit"] {
            background-color: #af9556;
            color: #fff;
            font-size: 16px;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 50%;
            margin-left: 300px;
        }

        .add_image input[type="submit"]:hover {
            background-color: #c4a676;
            color: white;
        }


        @media (max-width: 768px) {
            .add_image {
                flex-direction: column;
            }

            .add_image .col-8 .add_image input[type="submit"] {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>

    <?php echo $__env->make('manager.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('manager.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="add_section">
                    <div class="header_name">
                        <h1>Gallery</h1>
                    </div>



                    <form class="add_image" action="<?php echo e(url('update_gallery')); ?>" method="Post"
                        enctype="multipart/form-data">

                        <?php echo csrf_field(); ?>
                        <div class="col-8">
                            <label>Upload Image</label>
                            <input type="file" name="image">
                        </div>
                        <div class="col-8">
                            <label>Title</label>
                            <input type="text" name="food_title">
                        </div>
                        <div class="col-8">
                            <label>Description</label>
                            <input type="text" name="food_description">
                        </div>

                        <div>
                            <input type="submit" value="Add Image">
                        </div>
                    </form>
                    
                    <div class="view_image">
                        <?php $__currentLoopData = $food_gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food_gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="image-container">
                                <img src="/food_gallery/<?php echo e($food_gallery->image); ?>" alt="">
                                <h1><?php echo e($food_gallery->food_title); ?></h1>
                                <h2><?php echo e($food_gallery->food_description); ?></h2>
                                <a onclick="return confirm ('Are sure to delete this');"
                        href="<?php echo e(url('delete_food_image', $food_gallery ->id)); ?>" class="btn btn-danger">Delete</a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('manager.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH /Users/mithilarahman/Desktop/LARAVEL/Hotel_Managment/resources/views/manager/add_food_gallery.blade.php ENDPATH**/ ?>