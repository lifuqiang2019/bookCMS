<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BookInfomation */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="book-infomation-form">
    <h1 style="margin-top:-35px;color:#CD5C5C;">图书信息</h1>
    <?php $form = ActiveForm::begin([
        'action' => ['updata'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($searchModel, 'book_id')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', 'value'=>$dataProvider->getModels()[0]['book_id']]) ?>

    <?= $form->field($searchModel, 'book_isbn')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', 'value'=>$dataProvider->getModels()[0]['book_isbn']]) ?>

    <?= $form->field($searchModel, 'book_name')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', 'value'=>$dataProvider->getModels()[0]['book_name']]) ?>

    <?= $form->field($searchModel, 'book_version')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', 'value'=>$dataProvider->getModels()[0]['book_version']]) ?>

    <?= $form->field($searchModel, 'book_type')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', 'value'=>$dataProvider->getModels()[0]['book_type']]) ?>

    <?= $form->field($searchModel, 'book_press')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', 'value'=>$dataProvider->getModels()[0]['book_press']]) ?>

    <?= $form->field($searchModel, 'book_author')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', 'value'=>$dataProvider->getModels()[0]['book_author']]) ?>

    <?= $form->field($searchModel, 'book_status')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', 'value'=>$dataProvider->getModels()[0]['book_status']]) ?>

    <div class="form-group">
        <?= Html::submitButton('更新数据', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>