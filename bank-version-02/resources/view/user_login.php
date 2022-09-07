<?php App\App::view('top', ['title'=>$title]);?>

<section class="container container-row form">

    <h1 class="title">Login</h1>
    <form action="<?=URL?>login" method="post">
        <div class="form">
            User Name: <input class="form-input" type="text" name="userName">
            Password: <input class="form-input" type="password" name="pass">
            <button class="btn back submit" type="submit">Login</button>
        </div>
    </form>

</section>

<?php App\App::view('bottom');?>