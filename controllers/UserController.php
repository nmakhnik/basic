<?php


namespace app\controllers;


use app\models\LoginForm;
use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $model = new LoginForm();
        return $this->render('entry', ['model'=>$model,]);
    }
}

