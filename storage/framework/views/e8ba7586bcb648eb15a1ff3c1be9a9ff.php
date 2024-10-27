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
    .send_mail {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    color: white;
}

.send_mail .col-12, 
.send_mail .col-4, 
.send_mail .col-6 {
    display: flex;
    flex-direction: column;

}

.send_mail .col-12 {
    flex: 0 0 100%;
}

.send_mail .col-4 {
    flex: 0 0 32%;
}

.send_mail .col-6 {
    flex: 0 0 48%;
}

.send_mail label {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 5px;
    color: white;
}

.send_mail input[type="text"],
.send_mail textarea,
.send_mail select {
    background-color: transparent;
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 2px solid #bbb;  
    border-radius: 5px;
    box-sizing: border-box;
    color: white;
}

.send_mail input[type="file"] {
    padding: 7px;  
}

.send_mail select {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 2px solid #bbb;
    border-radius: 5px;
}

.send_mail input[type="submit"] {
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

.send_mail input[type="submit"]:hover {
    background-color: #c4a676;
    color: white;
}


@media (max-width: 768px) {
    .send_mail {
        flex-direction: column;
    }

    .send_mail .col-4,
    .send_mail .col-6,
    .send_mail .col-12 {
        flex: 0 0 100%;
    }

    .send_mail input[type="submit"] {
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
                        <h1> Add New Room</h1>
                    </div>

                    <form class="send_mail" action="" method="Post">

                    <?php echo csrf_field(); ?>
                    
                        <div class="col-6">
                            <label>Bed</label>
                            <input type="text" name="bed" value="">
                        </div>
                        <div class="col-6">
                            <label>Room Size</label>
                            <input type="text" name="size" value="">
                        </div>
                        <div class="col-12">
                            <label>Message</label>
                            <textarea name="message" ></textarea>
                        </div>

                        <div>
                            <input type="submit" value="Send Mail">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH /Users/mithilarahman/Desktop/LARAVEL/Hotel_Managment/resources/views/admin/send_mail.blade.php ENDPATH**/ ?>