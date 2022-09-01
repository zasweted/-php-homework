<?php App\App::view('top', ['title'=>$title]);?>

<section class="container container-row form">
    <fieldset>
        <legend>Login</legend>
        <form action="<?=URL?>login" method="post">
        User Name: <input type="text" name="userName">
        Password: <input type="password" name="pass">
        <button class="btn" type="submit">Login</button>
        </form>
    </fieldset>
</section>

<?php App\App::view('bottom');?>