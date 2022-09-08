<section class="container-padding container-row">
<header>
    <div class="header">
        <img class="logo" src="<?=URL?>assets/img/logo.png" alt="logo">
        <nav class="nav">
            <ul class="links">
                <a class="links-inner" href="<?=URL?>">Home</a>
                <a class="links-inner" href="<?=URL?>create">Create</a>
                <a class="links-inner" href="<?=URL?>list">List</a>
                <?php if(App\Middlewares\Auth::isLoged()): ?>
                <form action="<?=URL?>logout" method="post">
                    <button class="btn back logout" type="submit">Logout</button>
                </form>
                <?php else : ?>
                <a class="links-inner" href="<?=URL?>login">Login</a>
                <?php endif ?>
            </ul>
        </nav>
    </div>
</header>
</section>
