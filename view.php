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
                <th>FULL NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include "crud_conn.php";
        $sql = "SELECT * FROM users";
        $table = mysqli_query($conn, $sql);

        if (mysqli_num_rows($table) > 0) {
            while ($row = mysqli_fetch_array($table)) {
        ?>
        <tr>
            <td><?php echo $row["sno"]; ?></td>
            <td><?php echo $row["fullname"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["password"]; ?></td>
            <td>
                <a href="update.php?updateid=<?php echo $row['sno']; ?>">UPDATE</a>
                <br>
                <a href="delete.php?deleteid=<?php echo $row['sno']; ?>" onclick="return confirm('Are you sure you want to delete this record?');">DELETE</a>
            </td>
        </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
        ?>
        </tbody>
    </table>

    <a href="create.php">ADD DATA</a>
    
</body>
</html>
