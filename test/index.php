<?php

require_once __DIR__.'/../vendor/autoload.php';

//var_dump(dirname(__DIR__));

use app\controllers\SiteController;
use app\controllers\AuthController;
use app\core\Application ;

$app = new Application(dirname(__DIR__));

$app->router->get('/',[SiteController::class, 'home']);

$app->router->get('/logintest', function(){
    echo json_encode('success get');
});
$app->router->post('/logintest', function(){
    if (isset($_POST['email']) && $_POST['email'] && isset($_POST['password']) && $_POST['password']) {
        if($_POST['email']==="ainimal@123" && $_POST['password'] === '123123' ){
            echo json_encode('success');
        }else{
            echo json_encode('fail');
        }
    } else {
        echo json_encode('empty');
    }
}
);

$app->router->get('/register',[AuthController::class, 'register']);
$app->router->post('/register',[AuthController::class, 'register']);

$app->run();
?>>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AInimal 網頁工程招募 | 後端工程測驗題</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="bg">
        <div class="mask">
            <div class="title">
                <h1>AInimal測驗介面</h1>
            </div>
            <div class="formation">
                <div class="key-value-container">
                    <h1 class="key">帳號</h1>
                    <input type="email" id="email" name="email" placeholder="請輸入 email">
                </div>
                <div class="key-value-container">
                    <h1 class="key">密碼</h1>
                    <input type="password" id="password" name="password" placeholder="請輸入密碼">
                </div>
                <button type="submit" class="submit" id="submit-btn">確定</button>
            </div>
        </div>

    </div>
    <script src="app.js"></script>
</body>

</html>