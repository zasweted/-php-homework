<?php App\App::view('top', ['title'=>$title]);?>
<?php App\App::view('header');?>

<section class="container container-row form">
    <fieldset>
        <legend>User Create Form</legend>
        <form action="<?=URL?>create" method="post">
        Vardas: <input type="text" name="vardas">
        Pavarde: <input type="text" name="pavarde">
        Asmens Kodas: <input type="text" name="asmensKodas">
        <button class="btn" type="submit">Create</button>
        </form>
    </fieldset>
</section>
<?php App\App::view('bottom');?>