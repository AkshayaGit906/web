<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "condb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data
$sql = "SELECT id, name, email FROM condb";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #aaa;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Student Details</h2>

<?php
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". htmlspecialchars($row["id"]) ."</td>";
        echo "<td>". htmlspecialchars($row["name"]) ."</td>";
        echo "<td>". htmlspecialchars($row["email"]) ."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p style='text-align: center;'>No records found.</p>";
}

$conn->close();
?>

</body>
</html>
