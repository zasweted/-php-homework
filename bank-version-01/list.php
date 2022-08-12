<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <?php foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $val): ?>
            <?php foreach($val as $a): ?>
            <li><?= $a ?></li>
                <?php endforeach ?>
            <?php endforeach ?>
    </ul>

</body>
</html>