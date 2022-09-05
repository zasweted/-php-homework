<?php
use App\Middlewares\UserValidator as V;
use App\DB\Json;
use App\App;

if(isset($_POST)){
    $validation = new V($_POST);
    $errors = $validation->validateForm();
}

if(!empty($errors)) {
    $formError =  'Forma Neužpildita';
}else {
    Json::connect()->create([
                    'vardas' => $_POST['vardas'],
                    'pavarde' => $_POST['pavarde'],
                    'asmensKodas' => $_POST['asmensKodas'],
                    'pinigai' => $_POST['pinigai']
                ]);
                return App::redirect('list');
}




App::view('top', ['title'=>$title]);?>

<section class="container container-row form">
    <fieldset>
        <legend>User Create Form</legend>
        <form action="<?= URL?>create" method="post">
        Vardas: <input type="text" name="vardas">
        <div class="errors">
            <?= $errors['vardas'] ?? ''?>
        </div>
        Pavarde: <input type="text" name="pavarde">
        <div class="errors">
            <?= $errors['pavarde'] ?? ''?>
        </div>
        Asmens Kodas: <input type="text" name="asmensKodas">
        <div class="errors">
            <?= $errors['asmensKodas'] ?? ''?>
        </div>
        <input type="text" name="pinigai" value="0" hidden>
        <button class="btn" type="submit">Create</button>
        </form>
    </fieldset>
</section>

<?php App::view('bottom');?>