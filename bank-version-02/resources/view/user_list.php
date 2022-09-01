<?php App\App::view('top', ['title'=>$title]);?>

<section class="container container-row form">
    <ul>
        <?php foreach($users as $user) : ?>
        <fieldset>
            <div>
                <li><p class="list-title">Vardas:</p>  <?=$user['vardas']?></li>
                <li><p class="list-title">Pavarde:</p>  <?=$user['pavarde']?></li>
                <li><p class="list-title">Asmens Kodas:</p>  <?=$user['asmensKodas']?></li>
                <li><p class="list-title">Saskaitos likutis:</p>  <?=$user['pinigai']?> $</li>
                <li><p class="list-title">IBAN:</p>  <?=$user['iban']?></li>
                <a href="<?=URL?>edit/<?=$user['id']?>" type="button" class="btn btn-green">Koreguoti</a>
                <form action="<?=URL?>delete/<?=$user['id']?>" method="post">
                    <button type="submit" class="btn btn-red">Istrinti</button>
                </form>
            </div>
        </fieldset>

        <?php endforeach ?>
    </ul>
</section>
<?php App\App::view('bottom');?>