<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'hahahaha',
            
        ];
        return $this->render('home',$params);
    }
    public static function contact()
    {
        return Application::$app->router->renderView('contact');
    }
    public static function handleContact(Request $request)
    {
        $body = $request->getBody() ;
        var_dump($body); 
    }

}