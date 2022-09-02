<?php App\App::view('top', ['title'=>$title]);?>


<section class="container container-row form">
    <fieldset>
        <legend>User Create Form</legend>
        <form action="<?=URL?>update/<?=$user['id']?>" method="post">
        Vardas: <input type="text" name="vardas" value="<?=$user['vardas']?>">
        Pavarde: <input type="text" name="pavarde" value="<?=$user['pavarde'] ?>">
        Asmens Kodas: <input type="text" name="asmensKodas" value="<?=$user['asmensKodas'] ?>">
        IBAN: <input type="text" name="iban" value="<?=$user['iban'] ?>">
        Saskaitos likutis: <input type="text" name="pinigai" value="<?=$user['pinigai'] ?>" readonly>
        <a id="playBtn" class="btn" href="#">Money operations</a>
        <button class="btn" type="submit">Save Changes</button>
        </form>
    </fieldset>
</section>

<?php App\App::view('modal');?>
<?php App\App::view('bottom');?>