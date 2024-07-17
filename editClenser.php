<?php
include 'connect.php';
$id = $_GET['Id'];
$clenser_name = "";
$clenser_price = "";
$clenser_size = "";
$image = "";

$sql = "SELECT * FROM clenser WHERE Cl_ID='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $clenser_id = $row['Cl_ID'];
        $clenser_name = $row['Clenser_name'];
        $clenser_price = $row['Clenser_price'];
        $clenser_size = $row['Clenser_size'];
        $image = $row['image'];
    }
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="adminfood.css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin | Cleanser Update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 800px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input[type="text"],
        .form-group input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group input[type="file"] {
            padding: 10px 0;
        }

        .form-group img {
            max-width: 100px;
            margin-top: 10px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #27cb5b;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }

            .form-group input[type="text"],
            .form-group input[type="number"] {
                padding: 8px;
            }

            .form-group button {
                padding: 8px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Update Cleanser</h1>
        <form action="updatecleanser.php" method="post" class="reg" enctype="multipart/form-data">
            <div class="form-group">
                <label for="clenser_id">Cleanser ID</label>
                <input type="text" name="clenser_id" id="clenser_id" value="<?php echo $clenser_id; ?>" readonly="readonly"/>
            </div>
            <div class="form-group">
                <label for="clenser_name">Enter Cleanser Name</label>
                <input type="text" name="clenser_name" id="clenser_name" value="<?php echo $clenser_name; ?>" required/>
            </div>
            <div class="form-group">
                <label for="clenser_price">Enter Cleanser Price</label>
                <input type="number" name="clenser_price" id="clenser_price" value="<?php echo $clenser_price; ?>" required/>
            </div>
            <div class="form-group">
                <label for="clenser_size">Enter Cleanser Size</label>
                <input type="text" name="clenser_size" id="clenser_size" value="<?php echo $clenser_size; ?>" required/>
            </div>
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" name="image" id="image" accept="image/*"/>
                <?php if ($image) { echo '<img src="uploads/' . $image . '" alt="Current Image">'; } ?>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Update Cleanser</button>
            </div>
        </form>
    </div>
</body>
</html>
