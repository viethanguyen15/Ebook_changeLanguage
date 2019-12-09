<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        //POST
        //$_POST[tham_so];
        //tham so truyen vao post thuong la name cua the input
        //luon luon kiem tra submit
        // if(isset($_POST["sbm"])) {
        //     $email = $_POST["email"];
        //     $pass = $_POST["pass"];
        //     echo $email."<br/>".$pass;
        // }

        //file_upload
        // $_FILES['tham_so']['name']; //lay ten file upload
        // $_FILES['tham_so']['type']; //lay duoi cua file
        // $_FILES['tham_so']['size']; //lay theo kich thuoc file

        // $_FILES['tham_so']['error']; //lay loi cua file
        // $_FILES['tham_so']['tmp_name']; //duong dan len khay nho tam khi upload
        // move_uploaded_file($tmp_name, 'upload/img.jpg');
        if(isset($_POST['sbm'])) {
            $file_name = $_FILES['file']['name'];
            $file_tmp_name = $_FILES['file']['tmp_name'];
            $file_error = $_FILES['file']['error'];
            if($file_error > 0){
                echo 'file upload loi';
            }
            else{
                move_uploaded_file($file_tmp_name, 'upload/'.$file_name);
                echo 'upload thanh cong';
            }
        }
    ?>
    <!-- <form action="" method="POST">
        <input type="email" name="email">
        <input type="password" name="pass">
        <input type="submit" name="sbm">
    </form> -->

    <!-- <img src="<?php echo 'upload/'.$file_name ?>" alt=""> -->
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="sbm">
    </form>

</body>
</html>