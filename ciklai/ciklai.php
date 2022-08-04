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
        <div style="display: flex;
    flex-wrap: wrap;
    flex-direction: row;">
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
                        <p class="color"><?php echo str_repeat('*' , 50); ?></p>
                    <?php } ?> 
                    
        </div>
    </section>
    <section class="container">2. uzduotis
        <div style="display: flex; flex-wrap: wrap; flex-direction: row; gap: 8px;">
            <?php
                $numbers = '';
                
                $daugiauUz150 = 0;
                for($i = 0; $i < 300; $i++){
                    $numbers = $numbers . ' ' . + rand(0, 300);
                }
                
                $splitNumbers = explode(' ', $numbers);
                foreach($splitNumbers as $number){
                    if($number > 150){
                        echo '<p>' . $number . '</p>';
                        $daugiauUz150++;
                    }else{
                        echo '<p>' . $number . '</p>';
                    }
                    if($number > 275){
                        echo '<p style="color: red;">' . $number . '</p>';
                    }
                }
                echo 'Daugiau uz 150:' . $daugiauUz150;
            ?>
        </div>
    </section>
    <section style="display: flex;
    flex-wrap: wrap;
    flex-direction: row;">3. uzduotis
        <div style="display: flex;
    flex-wrap: wrap;
    flex-direction: row;">
            <?php 
                $emptyNumbers = '';
                for($i = 0;$i < rand(3000, 4000); $i++){
                    if($i % 77 === 0){
                        $emptyNumbers .= "$i, ";
                    }
                }
                echo substr($emptyNumbers, 0, -2) ;
            ?>
        </div>
    </section>
    <section style="display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;">4. uzduotis
        <div style="line-height: 3.5px; font-size: 10px">
            <?php 
                for($i = 0; $i < 100;$i++){
                    echo '<p style="margin: 1px;">' . str_repeat('*', 100) . '</p>';
                }
            ?>
        </div>
            
        
    </section>
</body>
</html>