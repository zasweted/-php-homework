<?php App\App::view('top', ['title'=>$title]);?>

<section class="container container-row form">
    <ul>
        <?php foreach($users as $user) : ?>
        <fieldset class="form-inner">
            <div class="form-inner">
                <li>
                    <p class="list-title">Vardas:</p> <?=$user['vardas']?>
                </li>
                <li>
                    <p class="list-title">Pavarde:</p> <?=$user['pavarde']?>
                </li>
                <li>
                    <p class="list-title">Asmens Kodas:</p> <?=$user['asmensKodas']?>
                </li>
                <li>
                    <p class="list-title">Saskaitos likutis:</p> <?=$user['pinigai']?> $
                </li>
                <li>
                    <p class="list-title">IBAN:</p> <?=$user['iban']?>
                </li>

                
                <div>
                    <form action="<?= URL ?>prideti/<?=$user['id']?>" method="get">
                        <button type="submit" class="btn btn-red">Prideti</button>
                    </form>
                </div>
                <div>
                    <form action="<?= URL ?>atimti/<?=$user['id']?>" method="get">
                        <button type="submit" class="btn btn-red">Atimti</button>
                    </form>
                </div>
                <div>
                    <form action="<?= URL ?>delete/<?=$user['id']?>" method="post">
                        <button type="submit" class="btn btn-red">Istrinti</button>
                    </form>
                </div>
            </div>
        </fieldset>
        

        <?php endforeach ?>
    </ul>
</section>


<?php App\App::view('bottom');?>