<section class="container-padding container-row">
    <header class="header">
        <div>
            <div>
                <img class="logo" src="<?=URL?>assets/img/logo.png" alt="logo">
            </div>
            <div class="nav">
                <a class="btn btn-green" href="<?=URL?>login">Login</a>
                <a class="btn" href="<?=URL?>">Home</a>
                <a class="btn" href="<?=URL?>create">Create</a>
                <a class="btn" href="<?=URL?>list">List</a>
                <form action="<?=URL?>logout" method="post">
                    <button class="btn btn-red" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </header>
</section>