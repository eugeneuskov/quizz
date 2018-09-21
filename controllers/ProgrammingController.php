<?php


namespace app\controllers;


use yii\web\Controller;

class ProgrammingController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}