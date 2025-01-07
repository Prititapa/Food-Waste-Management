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
                <th>EMAIL</th>
                <th>Phoneno.</th>
                <th>MESSAGE</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include "contact_conn.php";
        $sql = "SELECT * FROM contact";
        $table = mysqli_query($conn, $sql);

        if (mysqli_num_rows($table) > 0) {
            while ($row = mysqli_fetch_array($table)) {
        ?>
        <tr>
            <td><?php echo $row["sno"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["phn"]; ?></td>
            <td><?php echo $row["message"]; ?></td>
            
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
