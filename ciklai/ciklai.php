<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ciklai/style.css">
    <title>Ciklai</title>
</head>
<body>
    <section>1. a) uzduotis
        <div class="container">
                <?php for($i = 0; $i < 400; $i++){ ?>
                        <p class="color"><?php echo '*' ; ?></p>
                    <?php } ?>        
        </div>
    </section>
    <section class="container">1. b) uzduotis
        <div class="color">
                    <!-- <?php
                        $x = 0;
                        do{
                            echo '<br>';
                            $x++;

                            $y = 0;
                            while($y < 50) {
                                echo '*';
                                $y++;
                            }
                        }while($x < 8);
                    
                    ?> -->
                    <?php for($i = 0; $i < 8; $i++){ ?>
                        <p class="color"><?php echo str_repeat('*' , 50) ; ?></p>
                    <?php } ?> 
                    
        </div>
    </section>
    <section class="container">2. uzduotis
        <div>
            <?php
                $numbers = '';
                
                $daugiauUz150 = 0;
                for($i = 0; $i < 300; $i++){
                    $numbers = $numbers . ' ' . + rand(0, 300);
                }
                echo $numbers . '<br>';
                echo '<br>';
                $splitNumbers = explode(' ', $numbers);
                foreach($splitNumbers as $number){
                    if($number > 150){
                        $daugiauUz150++;
                    }
                }
                echo 'Daugiau uz 150:' . $daugiauUz150 . '<br>';
            ?>
        </div>
    </section>
</body>
</html>