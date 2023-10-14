<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-container {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
<h2>Student List</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Telephone</th>
    </tr>

    <?php
    $host = "127.0.0.1";
    $dbname = "t2210a_exam";
    $dbuser = "root";
    $dbpass = ""; // Xampp: ""   Mamp: "root"

    $conn = new mysqli($host,$dbuser,$dbpass,$dbname); // host user pass dbname
    if($conn->connect_error){
        die("Connection refused!");
    }

    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["age"] . "</td>
                        <td>" . $row["address"] . "</td>
                        <td>" . $row["telephone"] . "</td>
                      </tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

</table>
<div class="btn-container">
    <a href="form.php" class="btn">Add New Student</a>
</div>
</body>

</html>
