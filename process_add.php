<?php
    $license_no = $_POST['license_no'];
    $model = $_POST['model'];
    $car_year = $_POST['car_year'];
    $ctype = $_POST['ctype'];
    $drate = $_POST['drate'];
    $wrate = $_POST['wrate'];
    $car_status = $_POST['car_status'];

    
    $conn = mysqli_connect('localhost', 'root', '', 'db_cars');
    if (!$conn) {
        die('Không thể kết nối');
    }


    $sql = "INSERT INTO cars (license_no, model, car_year, ctype, drate, wrate, car_status)
    VALUES ('$license_no','$model','$car_year','$ctype','$drate','$wrate','$car_status')";

    echo $sql;
    $result = mysqli_query($conn,$sql);

    if($result == true ){
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }

    mysqli_close($conn);
    

?>