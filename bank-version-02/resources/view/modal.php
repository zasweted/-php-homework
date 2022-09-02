<section>
    <div id="lightBox" class="lightbox">
        <div id="playStop" class="lightbox-content">
            <button id="closeBtn" class="close-player"> &times;</button>
        </div>

        <div class="form modal-form">
            <form action="" method="post">
            Saskaitos likutis: <input type="text" name="pinigai" value="<?=$user['pinigai'] ?>" readonly>
            <input type="text" name="piniguOperacija">
            <button class="btn">Atimti</button>
            <button class="btn">Prideti</button>
            </form>
        </div>
    </div>

</section>