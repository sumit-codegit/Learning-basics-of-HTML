<!DOCTYPE html>
<html>
<head>
    <title>Simple Interest</title>
</head>
<body>
    <?php
        $principal = 1000;
        $rate = 5; // in percent
        $time = 2; // in years

        $interest = ($principal * $rate * $time) / 100;
        echo "Simple Interest is: $interest";
    ?>
</body>
</html>