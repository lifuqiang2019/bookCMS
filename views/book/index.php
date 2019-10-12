<?php 

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;

$this -> registerCssFile('@web/css/book.css');
$this->registerJsFile("@web/js/jquery.min.js");
$this->registerJsFile("@web/js/book.js");
$this -> title = "图书管理系统";
$this -> params['breadcrumbs'][] = $this -> title;
?>
<?php 
    $gridViewButtons = [
        'class' => 'yii\grid\ActionColumn',
        'template' => '{update} {delete}',
        'header' => '操作',
        'headerOptions' => ['color' => 'blue', 'font-size'=> 'bold'],
        'buttons' => [
            'update' => function ($url, $model, $key) {
                return Html::a('查看 / 编辑', $url, [
                    'data-toggle' => 'modal',
                    'data-target' => '#update-modal',
                    'data-id' => $key,
                    'class'=> 'btn btn-primary data-update'
                ]);
            },
            'delete' => function ($url, $model) {
                return Html::a('删除', $url, ['class'=> 'btn btn-danger del','data' => ['confirm' => '你确定要删除吗？']]);
            } 
        ],
    ];

?>

<div class="book-container">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>


    <?= $form->field($searchModel, 'keyWords')->textInput()->hint('请输入您要查询的关键字')->label('搜索') ?>
    
    <div class="form-group">
        <?= Html::submitButton('搜索', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('重置', ['class' => 'btn btn-outline-secondary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

    <p>
        <?= Html::a('新增数据', ['#'], [
            'data-toggle' => 'modal',
            'data-target' => '#insert-modal',
            'class' => 'btn btn-success add-data']) ?>
        <?= Html::Button('批量删除', ['class' => 'btn btn-primary del-all', 'data' => ['confirm' => '你确定要删除吗？']]) ?>
    </p>

    <?= GridView::widget([
        "dataProvider" => $dataProvider,
        'options' => ['id' => 'grid'],
        'columns' => [
            [
                'class' => 'yii\grid\CheckboxColumn',
            ],
            'book_id',
            'book_isbn',
            'book_name',
            'book_version',
            'book_type',
            'book_press',
            'book_author',
            'book_status',
            $gridViewButtons
        ],
        "caption" => "图书列表",
        "rowOptions" => function($model, $key, $index){
            if($index%2 === 0){
                return ['style' => 'background: #D1BA74'];
            }
        },
        'pager' => [
            'firstPageLabel' => '首页',
            'lastPageLabel' => '尾页',
            'hideOnSinglePage' => false, 
        ],
        "layout" => "{items}\n{pager}"
    ]);
    ?>
</div>

<?php
    Modal::begin([
        'id' => 'update-modal',
        'header' => '<h4 class="modal-title">图书内容</h4>',
        'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>',
    ]); 
    Modal::end();
?>

<?php
    Modal::begin([
        'id' => 'insert-modal',
        'header' => '<h4 class="modal-title">新增图书内容</h4>',
        'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>',
    ]); 
    Modal::end();
?>