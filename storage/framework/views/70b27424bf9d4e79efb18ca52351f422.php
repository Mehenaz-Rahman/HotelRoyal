<!DOCTYPE html>
<html>
  <head> 
  <?php echo $__env->make('manager.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
    .header_name h1 {
    font-family: "Lora", serif;
    font-size: 30px;
    text-align: center;
    font-weight: bold;
    color: #fff;
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 16px;
    border: 2px solid gray;
    color: white;
    font-family: "Lora", serif;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

table .view_title {
    background-color: #c4a676;  
    color: white;
    font-weight: 600;
}

table .view_title td {
    padding: 12px 15px;
    text-align: center;
}

table .view_del td {
    padding: 12px 15px;
    text-align: center;
    background-color: transparent;  
    color: white;  
}

table tr {
    border-bottom: 2px solid #999;
}

table td {
    text-transform: capitalize;
    border-right: 1px solid #ddd;
}

table td:last-child {
    border-right: none;  
}

table tr:nth-child(even) .view_del {
    background-color: transparent;  
}

@media (max-width: 768px) {
    table {
        font-size: 14px;
    }

    table th,
    table td {
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

            <table>
            <div class="header_name">
                <h1> All Menu Item</h1>
            </div>

                <tr class="view_title">
                    <td>Menu Title</td>
                    <td>Category</td>
                    <td>Upload Image</td>
                    <td>Ingredients</td>
                    <td>Price</td>
                    <td>Original Price (Optional)</td>
                    <td>Review (Optional)</td>
                    <td>Delete</td>
                    <td>Update</td>
                </tr>

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <tr class="view_del">
                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->category); ?></td>
                    <td>
                        <img width="120px" src="menu/<?php echo e($data->image); ?>" alt="">
                    </td>
                    <td><?php echo e($data->ingredients); ?></td>
                    <td>$<?php echo e($data->price); ?></td>
                    <td>$<?php echo e($data->original_price); ?></td>
                    <td><?php echo e($data->review); ?></td>

                    <td>
                        <a onclick="return confirm ('Are sure to delete this');"
                        href="<?php echo e(url('item_delete', $data -> id)); ?>" class="btn btn-danger">Delete</a>
                    </td>

                    <td>
                        <a class="btn btn-warning" href="<?php echo e(url('update_item', $data -> id)); ?>" >Update</a>
                    </td>

                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
    
            </div>
        </div>
    </div>

    <?php echo $__env->make('manager.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH /Users/mithilarahman/Desktop/LARAVEL/Hotel_Managment/resources/views/manager/view_menu.blade.php ENDPATH**/ ?>