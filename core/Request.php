<?php

namespace app\core;

class Request
{

    public function getPath()
    {
        //如果$_SERVER['REQUEST_URI']沒有的話可能是錯誤或者是在跟目錄('/')
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        //看 ? 在 path 的哪個位置
        $position = strpos($path, '?');
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function method()
    {
        echo strtolower($_SERVER['REQUEST_METHOD']);
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
    public function isGet(){
        return $this->method() === 'get';
    }
    public function isPost(){
        return $this->method() === 'post';
    }

    public function getBody()
    {
        $body = [];
        if ($this->method() === 'get') {
            //sanitize :把錯誤或惡意的輸入排除
            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        if ($this->method() === 'post') {
            //sanitize :把錯誤或惡意的輸入排除
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        return $body;
    }
}
