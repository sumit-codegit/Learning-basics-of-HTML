<!DOCTYPE html>
<html>
<head>
    <title>Swap Numbers</title>
</head>
<body>
    <?php
        $a = 5;
        $b = 10;

        echo "Before swapping: a = $a, b = $b<br>";

        // Swapping logic
        $temp = $a;
        $a = $b;
        $b = $temp;

        echo "After swapping: a = $a, b = $b";
    ?>
</body>
</html>