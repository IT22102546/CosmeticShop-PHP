<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="adminfood.css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Clenser Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" language="javascript" src="home.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        table img {
            max-width: 100px;
            height: auto;
        }

        table button {
            background-color: #27cb5b;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }

        table button:hover {
            background-color: #45a049;
        }

        #ftr {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php
    include "connect.php";

    $sql = "SELECT * FROM clenser";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<table border="1" cellspacing="0" cellpadding="10" align="center">
        <tr>
            <th>Cleanser ID</th>
            <th>Cleanser Name</th>
            <th>Cleanser Price</th>
            <th>Cleanser Size</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>';
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                <td>' . $row['Cl_ID'] . '</td>
                <td>' . $row['Clenser_name'] . '</td>
                <td>' . $row['Clenser_price'] . '</td>
                <td>' . $row['Clenser_size'] . '</td>
                <td><img src="uploads/' . $row['image'] . '" alt="' . $row['Clenser_name'] . '"></td>
                <td><button onclick="location.href=\'editClenser.php?Id=' . $row['Cl_ID'] . '\'">Edit</button></td>
                <td><button onclick="location.href=\'deletecleanser.php?Id=' . $row['Cl_ID'] . '\'">Delete</button></td>
            </tr>';
        }
        
        echo '</table>';
    }
    ?>
    
    <div id="ftr"></div>
</body>
</html>
