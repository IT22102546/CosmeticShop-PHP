<?php
include 'connect.php';

if (isset($_POST['sub'])) {
    $Clensername = isset($_POST['Clensername']) ? $_POST['Clensername'] : "";
    $price = isset($_POST['price']) ? $_POST['price'] : "";
    $size = isset($_POST['size']) ? $_POST['size'] : "";

 
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType, $allowTypes)) {
      
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
           
            $sql = "INSERT INTO clenser (Clenser_name, Clenser_price, Clenser_size, image) VALUES ('$Clensername', '$price', '$size', '$fileName')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("location:Clenser.php");
            } else {
                header("location:AddClensers.php");
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.";
    }
}
?>
