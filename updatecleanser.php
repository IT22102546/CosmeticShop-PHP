<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['clenser_id'];
    $name = $_POST['clenser_name'];
    $price = $_POST['clenser_price'];
    $size = $_POST['clenser_size'];
    $image = '';

    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $target = "uploads/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $query = "SELECT image FROM clenser WHERE Cl_ID = '$id'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $oldImage = 'uploads/' . $row['image'];
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        
        $query = "SELECT image FROM clenser WHERE Cl_ID = '$id'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $image = $row['image'];
    }

    $sql = "UPDATE clenser SET Clenser_name='$name', Clenser_price='$price', Clenser_size='$size', image='$image' WHERE Cl_ID='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Cleanser updated successfully');</script>";
        echo "<script>window.location.href = 'Clenser.php';</script>";
    } else {
        echo "<script>alert('Error updating cleanser');</script>";
        echo "<script>window.location.href = 'Clenser.php';</script>";
    }
}
?>
