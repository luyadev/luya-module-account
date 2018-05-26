<?php

namespace luya\account\frontend\actions;

use Yii;
use yii\base\Action;

class LoginAction extends Action
{
    public $modelClass;
    
    public function run()
    {
        $model = Yii::createObject($this->modelClass);
        
        return $this->controller->render('login', [
            'model' => $model,
        ]);
    }
}