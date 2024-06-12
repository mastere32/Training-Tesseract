<?php

namespace frontend\controllers;

use yii\web\Controller;
use common\models\Movie;

/**
 * Site controller
 */
class MoviesController extends Controller
{
    public function actionView($id)
    {
        $movie = Movie::findOne($id);
        return $this->render('view', [
            'movie' => $movie,
        ]);
    }
}
