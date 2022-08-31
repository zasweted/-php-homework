<?php App\App::view('top', ['title'=>$title]);?>
<?php App\App::view('header');?>

<section class="container container-row form">
    <ul>
        <?php foreach($users as $user) : ?>
        <fieldset>
            <div>
                <li>Vardas: <?=$user['vardas']?></li>
                <li>Pavarde: <?=$user['pavarde']?></li>
                <li>Asmens Kodas: <?=$user['asmensKodas']?></li>
                <li>Saskaitos likutis: <?=$user['pinigai']?> $</li>
                <li>IBAN: <?=$user['iban']?></li>
            </div>
        </fieldset>

        <?php endforeach ?>
    </ul>
</section>
<?php App\App::view('bottom');?>