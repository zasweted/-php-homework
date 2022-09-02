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

<section>
    <div id="lightBox" class="lightbox">
        <div id="playStop" class="lightbox-content">
            <button id="closeBtn" class="close-player"> &times;</button>
        </div>

        <div class="form modal-form">
            <form action="<?=URL?>updateMoney/<?=$user['id']?>" method="post">
                <input type="text" name="vardas" value="<?=$user['vardas']?>" hidden>
                <input type="text" name="pavarde" value="<?=$user['pavarde'] ?>"hidden>
                <input type="text" name="asmensKodas" value="<?=$user['asmensKodas'] ?>"hidden>
                <input type="text" name="iban" value="<?=$user['iban'] ?>"hidden>
                Saskaitos likutis: <input type="text" name="pinigai" value="<?=$user['pinigai'] ?>" readonly>
                <input type="text" name="pinigai">
                <button type="submit" class="btn">Atimti</button>
                <button type="submit" class="btn">Prideti</button>
            </form>
        </div>
    </div>

</section>


<?php App\App::view('bottom');?>