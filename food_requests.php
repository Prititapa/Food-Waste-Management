<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 2px solid red;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>NAME OF FOOD</th>
                <th>NO.OF ORDERED FOOD</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
        include "requestfooditem_conn.php";
        $sql = "SELECT `sno`,`name`,`name_of_fooditem`,`no_of_orderfood` FROM `order_list`";
        $table = mysqli_query($conn, $sql);

        if (mysqli_num_rows($table) > 0) {
            while ($row = mysqli_fetch_array($table)) {
        ?>
        <tr>
            <td><?php echo $row["sno"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["name_of_fooditem"]; ?></td>
            <td><?php echo $row["no_of_orderfood"]; ?></td>
            
        </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
        ?>
        </tbody>
    </table>

   
    
</body>
</html>
