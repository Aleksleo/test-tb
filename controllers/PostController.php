<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 25.07.2017
 * Time: 1:38
 */

namespace app\controllers;
use app\models\Posts;

class PostController extends AppController
{

    public function actionIndex($name = 'Guest')
    {
        $hello = 'Hi, ' . $name . '! Suck my big black penis. (C) PHP';

        $posts = Posts::find()->select('id, title, text')->all();
        return $this->render('index', [
            'hello_var' => $hello,
            'posts' => $posts,
            ]);
    }

    public function actionTest()
    {
        return $this->render('test');
    }
}