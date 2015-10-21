<?php

/* @var $this yii\web\View */

$this->title = '';
use kartik\tabs\TabsX;
// Above

    $items = [
        [
            'label'=>'<i ></i> ALL',
            'content'=>$this->render('resultmapp'),
            'active'=>true
        ],
        [
            'label'=>'<i ></i> Profile',
            'content'=>$this->render('resultmapp'),
            
        ],
        [
            'label'=>'<i ></i> Profile',
            'content'=>$this->render('resultmapp'),
            
        ],
        [
            'label'=>'<i ></i> Profile',
            'content'=>$this->render('resultmapp'),
            
        ],
        [
            'label'=>'<i ></i> Profile',
            'content'=>$this->render('resultmapp'),
            
        ],
        [
            'label'=>'<i ></i> Profile',
            'content'=>$this->render('resultmapp'),
            
        ],
        [
            'label'=>'<i ></i> Profile',
            'content'=>$this->render('resultmapp'),
            
        ],
        [
            'label'=>'<i ></i> Profile',
            'content'=>$this->render('resultmapp'),
            
        ],
       
    ];
echo TabsX::widget([
    'items'=>$items,
    'position'=>TabsX::POS_ABOVE,
    'encodeLabels'=>false
]);

?>

