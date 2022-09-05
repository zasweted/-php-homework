<?php App\App::view('top', ['title'=>$title]);?>

<section class="container container-row form">
    <fieldset>
        <legend><h1>Prideti</h1></legend>
        <form action="<?=URL?>update/<?=$user['id']?>" method="post">
            <h2>Vardas: </h2> <input class="input-bordless" type="text" name="vardas" value="<?=$user['vardas']?>" readonly>
            <h2>Pavarde: </h2> <input class="input-bordless" type="text" name="pavarde" value="<?=$user['pavarde']?>" readonly>
            <h2>Asmens Kodas: </h2> <input class="input-bordless" type="text" name="asmensKodas" value="<?=$user['asmensKodas']?>" readonly>
            <h2>IBAN: </h2> <input class="input-bordless" type="text" name="iban" value="<?=$user['iban']?>" readonly>
            <h2>Saskaitos likutis:</h2> <input class="input-bordless" type="text" name="pinigai" value="<?=$user['pinigai']?>" readonly>    
            <input type="text" name="pinigai">  
            <button class="btn" type="submit">Prideti</button>
        </form>
    </fieldset>
</section>
<?php App\App::view('bottom');?>