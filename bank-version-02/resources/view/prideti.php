<?php App\App::view('top', ['title'=>$title]);?>
<section class="container container-row form">
    <fieldset>
        <legend><h1>Prideti</h1></legend>
        <form action="<?=URL?>addMoney/<?=$user['id']?>" method="post">
            <h2>Vardas: </h2> <p><?=$user['vardas']?></p>
            <h2>Pavarde: </h2> <p><?=$user['pavarde']?></p>
            <h2>Asmens Kodas: </h2> <p><?=$user['asmensKodas']?></p>
            <h2>IBAN: </h2> <p><?=$user['iban']?></p>
            <h2>Saskaitos likutis:</h2> <p><?=$user['pinigai']?></p>    
            <input type="text" name="pinigai">  
            <button class="btn" type="submit">Prideti</button>
        </form>
        <div class="errors"><?=$errors['add'] ?? '' ?></div>
    </fieldset>
</section>
<?php App\App::view('bottom');?>