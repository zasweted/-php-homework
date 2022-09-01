<?php App\App::view('top', ['title' => $title]); ?>
<section class="container container-row screen">
    <div>
        <?php if(App\Middlewares\Auth::isLoged()) : ?>
        <div>
            <h1><?= $_SESSION['user']['userName']. ' ' ?>Sekmingai prisijunge</h1>

        </div>
        <?php else : ?>
        <h1>Sveiki atvike. Prasome prisijungti</h1>

        <?php endif ?>
    </div>
</section>

<?phpApp\App::view('bottom'); ?>