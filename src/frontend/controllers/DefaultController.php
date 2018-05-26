<?php

namespace luya\account\frontend\controllers;

use luya\web\Controller;
use luya\account\frontend\actions\IndexAction;

class DefaultController extends Controller
{
    public function actions()
    {
        return [
            'index' => IndexAction::class,
        ];
    }
}