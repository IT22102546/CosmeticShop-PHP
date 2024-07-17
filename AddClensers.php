<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Add Cleansers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="" href="">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        input[type="file"] {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #27cb5b;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #27cb5b; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Cleansers</h2>
        <?php include "connect.php"; ?>
        <form action="validateClensers.php" method="post" enctype="multipart/form-data">
            <label for="Clensername">Enter Cleanser Name</label>
            <input type="text" name="Clensername" id="Clensername" required>

            <label for="price">Enter Price</label>
            <input type="number" name="price" id="price" required>

            <label for="size">Enter size (ml)</label>
            <input type="text" name="size" id="size" required>

            <label for="image">Upload Image</label>
            <input type="file" name="image" id="image">

            <input type="submit" name="sub" value="Add Cleanser">
        </form>
    </div>
</body>
</html>
