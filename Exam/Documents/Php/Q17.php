<!-- 17)Write a program to create login page take username and password and save data in database. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login Page</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>

    <h2>Registered Users</h2>
    <ul>
        <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "login_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert user data into database if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $_POST['username'];
            $pass = $_POST['password'];

            $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";

            if ($conn->query($sql) === TRUE) {
                echo "<li>New user added: " . $user . "</li>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Retrieve and display registered users
        $sql = "SELECT username FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["username"] . "</li>";
            }
        } else {
            echo "<li>No registered users yet.</li>";
        }

        $conn->close();
        ?>
    </ul>
</body>
</html>