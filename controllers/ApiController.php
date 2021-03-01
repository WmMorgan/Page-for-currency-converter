<?php

namespace app\controllers;

use yii\rest\ActiveController;

class ApiController extends ActiveController
{
    public $modelClass = 'app\models\Api';

   /* protected function verbs()
    {
        return [
            'index' => ['GET', 'HEAD'],
            'view' => ['GET', 'HEAD'],
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH'],
            'delete' => ['DELETE'],
        ];
    }*/

}