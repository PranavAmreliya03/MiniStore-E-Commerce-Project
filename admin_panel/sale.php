<?php
session_start();
include 'dbconfig.php';
include 'check_session.php';

$sql = mysqli_query($conn, "SELECT * FROM product");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sale</title>
<style>
    * {
        margin: 0;
        padding: 0;
        font-weight: 600;
        font-family: system-ui, sans-serif;
        color: antiquewhite;
        box-sizing: border-box;
    }

    body {
        background-color: #79A7D3;
        background-image: url(../images/adminproduct.jpg);
        background-size: cover;
        background-position: center;
        backdrop-filter: blur(12px);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        padding-top: 50px;
    }

    a.back {
        display: inline-block;
        text-decoration: none;
        font-weight: 600;
        font-size: 20px;
        margin-left: 200px;
        margin-bottom: 20px;
        color: antiquewhite;
        position: relative;
        top: 0;
    }
    a.back:hover {
        border-bottom: 2px solid #fff;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 2em;
        font-weight: 900;
    }

    .container {
        backdrop-filter: blur(12px);
        padding: 25px;
        border-radius: 15px;
        background-color: rgba(0,0,0,0.3);
        margin: auto;
        width: 95%;
        max-width: 1100px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        border-radius: 10px;
        overflow: hidden;
        text-align: center;
        backdrop-filter: blur(12px);
        background-color: rgba(255,255,255,0.05);
    }

    table th, table td {
        padding: 12px 15px;
        border-bottom: 1px solid rgba(255,255,255,0.2);
    }

    table th {
        background-color: rgba(255,50,70,0.4);
        color: #fff;
        text-transform: uppercase;
    }

    table tr:hover {
        background-color: rgba(255,50,70,0.2);
        transition: 0.3s;
    }

    button {
        border: none;
        background: none;
        cursor: pointer;
    }
    button a {
        color: rgb(255,50,70);
        font-weight: 600;
        text-decoration: none;
    }
    button a:hover {
        color: #fafafa;
    }

    @media screen and (max-width: 768px) {
        table th, table td {
            padding: 8px 5px;
            font-size: 0.9em;
        }
        h2 {
            font-size: 1.5em;
        }
        a.back {
            margin-left: 50px;
            font-size: 18px;
        }
    }
</style>
</head>
<body>
<div class="container">
    <a href="admin.php" class="back">&#8592; Back</a>
    <h2>Add For Sale</h2>
    <table>
        <tr>
            <th>S.no</th>
            <th>Name</th>
            <th>Type</th>
            <th>Brand</th>
            <th>Price</th>
            <th>Sale amount</th>
            <th>Action</th>
        </tr>
        <?php
        $i = 1;
        while($row = mysqli_fetch_assoc($sql)){
            $id = $row['pid'];
            $q = mysqli_query($conn,"SELECT * FROM sale WHERE pid = $id");
            $sale = mysqli_fetch_assoc($q);
            echo "<tr>
                <td>{$i}</td>
                <td>{$row['product']}</td>
                <td>{$row['p_type']}</td>
                <td>{$row['brand']}</td>
                <td>{$row['price']}</td>
                <td>";
                if(!$sale){
                    echo "Not For Sale";
                } else {
                    echo $sale['sale_amt'];
                }
            echo "</td>
                <td><button><a href='addsale.php?pid={$id}'>EDIT</a></button></td>
            </tr>";
            $i++;
        }
        ?>
    </table>
</div>
</body>
</html>
