<?php
$str_json = file_get_contents('php://input');
if (isset($_POST['email']) && $_POST['email'] && isset($_POST['password']) && $_POST['password']) {
    if($_POST['email']==="ainimal@123" && $_POST['password'] === '123123' ){
        echo json_encode('success');
    }else{
        echo json_encode('fail');
    }
} else {
    echo json_encode('empty');
}