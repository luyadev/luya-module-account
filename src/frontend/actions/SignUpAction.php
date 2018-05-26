<?php

namespace luya\account\frontend\actions;

use Yii;
use yii\base\Action;

class SignUpAction extends Action
{
    public $modelClass;
    
    public function run()
    {
        $model = Yii::createObject($this->modelClass);
        
        return $this->controller->render('signup', [
            'model' => $model,
        ]);
    }
}