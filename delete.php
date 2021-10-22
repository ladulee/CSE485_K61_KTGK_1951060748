<?php
    $conn = mysqli_connect('localhost', 'root', '', 'db_cars');
    if (!$conn) {
        die('Không thể kết nối');
    }
    ?>
<?php
$vehicle_id = $_GET['id'];
$sql = "DELETE FROM cars WHERE vehicle_id = '$vehicle_id'";
$result = mysqli_query($conn, $sql);
if ($result == true) {
    header("Location:index.php");
} else {
    echo "Error";
}
?>