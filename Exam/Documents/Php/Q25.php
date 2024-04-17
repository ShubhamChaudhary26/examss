<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Vehicle Registration Data</h2>
    <?php
    if (isset($_GET["make"]) && isset($_GET["model"]) && isset($_GET["year"]) && isset($_GET["color"])) {
        $make = $_GET["make"];
        $model = $_GET["model"];
        $year = $_GET["year"];
        $color = $_GET["color"];

        echo "Make: $make <br>";
        echo "Model: $model <br>";
        echo "Year: $year <br>";
        echo "Color: $color <br>";
    } else {
        echo "No data received.";
    }
    ?>
</body>
</html>
