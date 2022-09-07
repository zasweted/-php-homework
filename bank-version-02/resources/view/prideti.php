<?php App\App::view('top', ['title'=>$title]);?>
<section class="container container-row form">
    <h1>Prideti</h1>
        <form action="<?=URL?>addMoney/<?=$user['id']?>" method="post">
        <div class="form-inner">
            <li>
                <p class="list-title">Vardas:</p> <p class="list-content"><?=$user['vardas']?></p>
            </li>
            <li>
                <p class="list-title">Pavarde:</p class="list-content"> <p class="list-content"><?=$user['pavarde']?></p>
            </li>
            <li>
                <p class="list-title">Asmens Kodas:</p class="list-content"> <p class="list-content"><?=$user['asmensKodas']?></p>
            </li>
            <li>
                <p class="list-title">IBAN:</p class="list-content"> <p class="list-content"><?=$user['iban']?></p>
            </li>
            <li>
                <p class="list-title">Saskaitos likutis:</p class="list-content"> <p class="list-content"><?=$user['pinigai'] . ' $'?></p> 
            </li>
    
            <input type="text" name="pinigai">  
            <button class="btn" type="submit">Prideti</button>
        </form>
        <div class="errors"><?=$errors['add'] ?? '' ?></div>
    
</section>
<?php App\App::view('bottom');?>