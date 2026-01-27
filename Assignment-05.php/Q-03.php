<!DOCTYPE html>
<html>
<head>
    <title>Area of Circle</title>
</head>
<body>
    <?php
        $radius = 7;
        $area = pi() * $radius * $radius;
        echo "Area of the circle with radius $radius is: " . round($area, 2);
    ?>
</body>
</html>