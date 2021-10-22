<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>tìm kiểm</title>
</head>

<body>
    <div class="bg-gray-light ">
        <h4 class="px-5 mx-4 fw-bolder d-flex justify-content-center ">
            Danh sách Xe
        </h4>
    </div>
    <div class="btn-group" role="group" aria-label="Basic example" >
  <button type="button" class="btn btn-primary"><a class = "text-black" href="add.php">Thêm thông tin</a></button>
</div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">vehicle_id</th>
                <th scope="col">license_no</th>
                <th scope="col">model</th>
                <th scope="col">car_year</th>
                <th scope="col">ctype</th>
                <th scope="col">drate</th>
                <th scope="col">wrate</th>
                <th scope="col">car_status</th>
                <th scope="col">bd_update</th>
                <th scope="col">bd_delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'db_cars');
            if (!$conn) {
                die('Không thể kết nối');
            }
            ?>
            <?php
            $sql = "SELECT vehicle_id,license_no,model,car_year,ctype,drate, wrate, car_status FROM cars";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<th scope="row">' . $row['vehicle_id'] . '</th>';
                    echo '<td>' . $row['license_no'] . '</td>';
                    echo '<td>' . $row['model'] . '</td>';
                    echo '<td>' . $row['car_year'] . '</td>';
                    echo '<td>' . $row['ctype'] . '</td>';
                    echo '<td>' . $row['drate'] . '</td>';
                    echo '<td>' . $row['wrate'] . '</td>';
                    echo '<td>' . $row['car_status'] . '</td>';
                    echo '<td><a href="update.php?id='.$row['vehicle_id'].'"><i class="fas fa-user-edit"></i></a></td>';
                    echo '<td><a href="delete.php?id='.$row['vehicle_id'].'"><i class="fas fa-user-times"></i></a></td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>