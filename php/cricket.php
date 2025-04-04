<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #444;
        }
        th {
            background-color:rgb(203, 212, 23);
            color: white;
        }
        tr:nth-child(even) {
            background-color:rgb(172, 120, 120);
        }
        h2 {
            text-align: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

<h2>List of Indian Cricket Players</h2>

<?php
// Step 1: Create an array of Indian cricket players
$players = [
    "Sachin Tendulkar",
    "Virat Kohli",
    "Rohit Sharma",
    "MS Dhoni",
    "Jasprit Bumrah",
    "Hardik Pandya",
    "Shubman Gill",
    "KL Rahul",
    "Ravindra Jadeja",
    "Suryakumar Yadav",
];

// Step 2: Display the array in a HTML table
echo "<table>";
echo "<tr><th>S.No</th><th>Player Name</th></tr>";

foreach ($players as $index => $player) {
    echo "<tr>";
    echo "<td>" . ($index + 1) . "</td>";
    echo "<td>" . $player . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
