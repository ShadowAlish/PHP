<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            color: #888;
        }

        .footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Data</h2>
        <table>
            <tr>
                <th>ID</th> <!-- Add the ID column -->
                <th>Full Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <?php
            // Include the database connection file
            include("connection.php");

            // SQL query to select data from the database
            $query = "SELECT * FROM signup";

            // Execute the query
            $result = mysqli_query($conn, $query);

            // Check if the query executed successfully
            if ($result) {
                // Check if there are any rows returned
                if (mysqli_num_rows($result) > 0) {
                    // Loop through each row of data
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Access each column value using the column name
                        $id = $row['id']; // Get ID
                        $fullname = $row['fullname'];
                        $email = $row['email'];
                        $password = $row['password'];
                        // Display the data in a table row
                        echo "<tr>";
                        echo "<td>$id</td>"; // Display ID
                        echo "<td>$fullname</td>";
                        echo "<td>$email</td>";
                        echo "<td>$password</td>";
                        echo "</tr>";
                    }
                } else {
                    // If no rows are returned
                    echo "<tr><td colspan='4'>No records found</td></tr>";
                }
            } else {
                // If the query execution fails
                echo "<tr><td colspan='4'>Error: " . mysqli_error($conn) . "</td></tr>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </table>
    </div>
    <div class="footer">
        <p>&copy; 2024 CINETWIIN. All rights reserved.</p>
    </div>
</body>
</html>

