<?php 

$getColor = $_GET['color'] ?? 'white';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web_Mechanika_03</title>
</head>
<body style="background-color:<?= $getColor ?>; display: flex; flex-direction: column; justify-content: center; align-items: center; margin: 40px 0 0 0;">
    
    <form style="flex-direction: column;" method="GET">
        <input type="text" name="color" value="" />
        <div>
            <button type="submit">Patvirtink Spalva</button>
        </div>
    </form>

</body>
</html>