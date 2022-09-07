<?php App\App::view('top', ['title'=>$title]);?>

<section class="container container-row form">
    
        <h1 class="title">User Create Form</h1>
        <form action="<?= URL?>store" method="post">
        <div class="form">
        Vardas: <input class="form-input" type="text" name="vardas" value="<?= $_POST['vardas'] ?? ''?>">
        <div class="errors">
            <?= $errors['vardas'] ?? ''?>
        </div>
        Pavarde: <input class="form-input" type="text" name="pavarde" value="<?= $_POST['pavarde'] ?? ''?>">
        <div class="errors">
            <?= $errors['pavarde'] ?? ''?>
        </div>
        Asmens Kodas: <input class="form-input" type="text" name="asmensKodas" value="<?= $_POST['asmensKodas'] ?? ''?>">
        <div class="errors">
            <?= $errors['asmensKodas'] ?? ''?>
        </div>
        <input type="text" name="pinigai" value="0" hidden>
        <button class="btn back submit" type="submit">Create</button>
        </div>
        </form>
    
</section>

<?php App\App::view('bottom');?>