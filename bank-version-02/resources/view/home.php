<?php App\App::view('top', ['title' => $title]); ?>
<?php App\App::view('header'); ?>
<section class="container container-row screen">
    <div>
        <h1>Welcome to bank!</h1>
        <h3>dont have account?</h3>
        <a href="" class="btn">Sign up Here!</a>
    </div>
</section>

<?phpApp\App::view('bottom'); ?>