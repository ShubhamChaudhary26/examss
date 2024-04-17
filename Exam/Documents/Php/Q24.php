<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Vehicle Registration Data</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $make = $_POST["make"];
        $model = $_POST["model"];
        $year = $_POST["year"];
        $color = $_POST["color"];

        echo "Make: $make <br>";
        echo "Model: $model <br>";
        echo "Year: $year <br>";
        echo "Color: $color <br>";
    }
    ?>
</body>
</html>
