<?php 
use mdm\admin\components\MenuHelper;
use yii\bootstrap\Nav;
 
echo Nav::widget([
    'items' => MenuHelper::getAssignedMenu(Yii::$app->user->id)
]);

return ['title'=>'Title of Your Link Here'];