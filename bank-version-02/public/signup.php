<?php
require_once __DIR__ .'/../vendor/autoload.php';
if (!file_exists(__DIR__ . '/data/data.json')){
    file_put_contents(__DIR__ . '/data/data.json', json_encode([]));
}

if(isset($_POST['submit'])){

    $userName = $_POST['userName'];
    $pass = $_POST['pass'];
    $passRe = $_POST['passRe'];


    $signup = new \App\SignUpContoller();
    
    
}
$signup = new SignUpContoller($userName, $pass, $passRe);
$userData = $_POST;
$data = json_decode(file_get_contents(__DIR__ .'/data/data.json'));
$data[] = $userData;
file_put_contents(__DIR__ . '/data/data.json', json_encode($data));

print_r($_POST);
print_r($signup);



?>
<?php require 'top.php'; ?>
<div class="form">
    <form class="form-inner" action="signup.php" method="post">
        User Name: <input type="text" name="userName">
        Password: <input type="password" name="pass">
        Repeat Password: <input type="password" name="passRe">
        <button class="btn btn-green" type="submit">Create</button>
    </form>
    <a class="btn" href="home.php">Back To Home</a>
</div>
<?php require 'bottom.php'; ?>