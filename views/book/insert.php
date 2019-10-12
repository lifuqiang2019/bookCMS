<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BookInfomation */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="book-infomation-form">
    <h1 style="margin-top:-35px;color:#CD5C5C;">增加图书信息</h1>
    <?php $form = ActiveForm::begin([
        'action' => ['insert'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'book_id')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', ]) ?>

    <?= $form->field($model, 'book_isbn')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', ]) ?>

    <?= $form->field($model, 'book_name')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', ]) ?>

    <?= $form->field($model, 'book_version')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', ]) ?>

    <?= $form->field($model, 'book_type')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', ]) ?>

    <?= $form->field($model, 'book_press')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', ]) ?>

    <?= $form->field($model, 'book_author')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', ]) ?>

    <?= $form->field($model, 'book_status')->textInput(['maxlength'=>10,'style'=>'width:470px;margin-left:30px;', ]) ?>

    <div class="form-group">
        <?= Html::submitButton('添加数据', ['class' => 'btn btn-success', 'data' => ['confirm' => '你确定要增加吗？']]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>