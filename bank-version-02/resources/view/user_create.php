<?php App\App::view('top', ['title'=>$title]);?>

<section class="container container-row form">
    <fieldset>
        <legend>User Create Form</legend>
        <form action="<?= URL?>store" method="post">
        Vardas: <input type="text" name="vardas" value="<?= $_POST['vardas'] ?? ''?>">
        <div class="errors">
            <?= $errors['vardas'] ?? ''?>
        </div>
        Pavarde: <input type="text" name="pavarde" value="<?= $_POST['pavarde'] ?? ''?>">
        <div class="errors">
            <?= $errors['pavarde'] ?? ''?>
        </div>
        Asmens Kodas: <input type="text" name="asmensKodas" value="<?= $_POST['asmensKodas'] ?? ''?>">
        <div class="errors">
            <?= $errors['asmensKodas'] ?? ''?>
        </div>
        <input type="text" name="pinigai" value="0" hidden>
        <button class="btn" type="submit">Create</button>
        </form>
    </fieldset>
</section>

<?php App\App::view('bottom');?>