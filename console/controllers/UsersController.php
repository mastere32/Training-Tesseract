<?php
namespace console\controllers;

use yii\console\Controller;
use common\models\User;

class UsersController extends Controller
{
    public function actionCreate($username, $email, $password, $status = User::STATUS_ACTIVE){
        $user = new User();
        $user->username = $username;
        $user->email = $email;
        $user->setPassword($password);
        $user->generateAuthKey();
        $user->status = $status;
        return $user->save();
    }
}