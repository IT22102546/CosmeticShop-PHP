<?php
include "connect.php";

if (isset($_GET['Id'])) {
    $id = $_GET['Id'];

    // Delete the image file from the uploads folder
    $query = "SELECT image FROM clenser WHERE Cl_ID = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $imagePath = 'uploads/' . $row['image'];
    if (file_exists($imagePath)) {
        unlink($imagePath); // Delete the file
    }

    // Delete the cleanser from the database
    $sql = "DELETE FROM clenser WHERE Cl_ID = '$id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Cleanser deleted successfully');</script>";
        echo "<script>window.location.href = 'Clenser.php';</script>";
    } else {
        echo "<script>alert('Error deleting cleanser');</script>";
        echo "<script>window.location.href = 'Clenser.php';</script>";
    }
}
?>
