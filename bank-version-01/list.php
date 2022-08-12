<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Klientu sarasas</h1>
        <ul>
            <?php foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $val): ?>
                <?php foreach($val as $i => $a): ?>
                    <li><?= $i. ': '.$a?></li>
                    <?php endforeach ?>
                        <form action="">
                            <button>Koreguoti</button>
                            <button>Istrinti</button>
                            <button>issauguoti</button>
                        </form>
                <?php endforeach ?>
        </ul>
        
    </div>
<a href="http://localhost/-php-homework-/-php-homework/bank-version-01/main.php">Grizti i pradzia</a>
</body>
</html>