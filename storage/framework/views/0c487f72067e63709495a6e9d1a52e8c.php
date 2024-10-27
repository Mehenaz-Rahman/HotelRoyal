<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

        table .booking_title {
            background-color: #c4a676;
            color: white;
            font-weight: 600;
        }

        table .booking_title td {
            padding: 10px;
            text-align: center;
        }

        table .booking_del td {
            padding: 10px;
            text-align: center;
            background-color: transparent;
            color: white;
        }
        table .booking_del .btn-warning{
            margin-top: 10px;
            padding: 8px 18px;
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

    <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="add_section">
                    <div class="header_name">
                        <h1> View Bookings</h1>
                    </div>

                    <table>
                        <tr class="booking_title">
                            <td>Room ID</td>
                            <td>Customer Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Check In</td>
                            <td>Check Out</td>
                            <td>Room Type</td>
                            <td>Adults</td>
                            <td>Children</td>
                            <td>Status</td>
                            <td>Approve</td>
                            <td>Delete</td>
                        </tr>

                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr class="booking_del">
                                <td><?php echo e($data->room_id); ?></td>
                                <td><?php echo e($data->name); ?></td>
                                <td><?php echo e($data->email); ?></td>
                                <td><?php echo e($data->phone); ?></td>
                                <td><?php echo e($data->check_in); ?></td>
                                <td><?php echo e($data->check_out); ?></td>
                                <td><?php echo e($data->room->room_type); ?></td>
                                <td><?php echo e($data->rooms_no); ?></td>
                                <td><?php echo e($data->children); ?></td>
                                <td>
                                    <?php if($data->status == 'approved'): ?>
                                    <span style="color:green;">Approved</span>
                                    <?php endif; ?>

                                    <?php if($data->status == 'canceled'): ?>
                                    <span style="color:red;">Canceled</span>
                                    <?php endif; ?>
                                    <?php if($data->status == 'waiting'): ?>
                                    <span style="color:yellow;">Waiting</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a class="btn btn-success" href="<?php echo e(url('approve_booking', $data->id)); ?>">Approve</a>
                                    <a class="btn btn-warning" href="<?php echo e(url('cancel_booking', $data->id)); ?>">Cancel</a>
                                </td>
                                <td>
                                    <a onclick="return confirm ('Are sure to delete this');"
                                        href="<?php echo e(url('delete_booking', $data->id)); ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH /Users/mithilarahman/Desktop/LARAVEL/Hotel_Managment/resources/views/admin/bookings.blade.php ENDPATH**/ ?>