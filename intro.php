<?php
$color = "red";
$bgColor = "blue";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro php</title>
</head>

<body>
    <h1 style="color: <?php echo $color ?>; background-color:<?php echo $bgColor ?>;">Header 1</h1>

    <?php echo "<h3 style=color:" . $color . ";background-color:" . $bgColor . ">Header3</h3>" ?>

</body>

</html>