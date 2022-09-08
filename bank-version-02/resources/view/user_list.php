<?php App\App::view('top', ['title'=>$title]);?>

<section class="container container-row form">
    <h1 class="title">Klientų sąrašas :</h1>
    <ul>
        <?php foreach($users as $user) : ?>

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
            <?php if(isset($kek) && $user['id'] == $kek) : ?>
            <div class="errors"><?=$errors['add'] ?? '' ?></div>
            <?php endif ?>

            <div class="btn-inner">
                <div>
                    <form action="<?= URL ?>prideti/<?=$user['id']?>" method="get">
                        <button type="submit" class="btn add">Prideti</button>
                    </form>
                </div>
                <div>
                    <form action="<?= URL ?>atimti/<?=$user['id']?>" method="get">
                        <button type="submit" class="btn dec">Atimti</button>
                    </form>
                </div>
                <div>
                    <form action="<?= URL ?>delete/<?=$user['id']?>" method="post">
                        <button type="submit" class="btn del">Istrinti</button>
                    </form>
                </div>
            </div>
        </div>
        
        
        <?php endforeach ?>
    </ul>
</section>


<?php App\App::view('bottom');?>