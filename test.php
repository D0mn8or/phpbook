<?php
    $nutrition = [
        'fat' => 16,
        'sugar' => 51,
        'honey' => 34,
    ];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Nutrition (per 100g)</h2>
    <p><?php echo $nutrition['fat']; ?></p>
    <p><?php echo $nutrition['sugar']; ?></p>
    <p><?php echo $nutrition['honey']; ?></p>
</body>
</html>