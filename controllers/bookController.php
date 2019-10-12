<?php 

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\BookSearch;
use app\models\BookInfomation;

/**
 * bookConstroller 接口用于对 book_information 表的 CRUD 操作
 */

 class BookController extends Controller
 {
   /**
    * actionIndex 显示主页数据的操作
    * @return page
    */
   function actionIndex()
   {
      $searchModel = new BookSearch();
      $dataProviderArr = $searchModel -> search(Yii::$app->request->queryParams);
     
      return $this -> render('index', [
         'searchModel' => $searchModel,
         'dataProvider' => $dataProviderArr['dataProvider'],
         'pagination' => $dataProviderArr['pagination'],
      ]);
   }

   /**
    * actionUpdata 查看数据
    * @return page
    */
   function actionShow()
   {
      $searchModel = new BookSearch();
      $dataProvider = $searchModel -> searchById(Yii::$app->request->queryParams);
      
      return $this -> render('updata', [
         'searchModel' => $searchModel,
         'dataProvider' => $dataProvider,
      ]);
   }

   /**
     * Updates 图书馆的内容
     * @param integer $id
     * @return mixed
     */
    public function actionUpdata()
    {
        $model = new BookInfomation();
        $params = Yii::$app->request->queryParams;
        $model->load($params);

        $query = BookInfomation::updateAll([
            'book_isbn' => $params['BookSearch']['book_isbn'],
            'book_name' => $params['BookSearch']['book_name'],
            'book_version' => $params['BookSearch']['book_version'],
            'book_type' => $params['BookSearch']['book_type'],
            'book_press' => $params['BookSearch']['book_press'],
            'book_author' => $params['BookSearch']['book_author'],
            'book_status' => $params['BookSearch']['book_status'],
         ], ['book_id' => $params['BookSearch']['book_id']]);
        
      // return $this->render('show',['params'=>$params]);
      return $this->redirect('http://lfq.localhost/index.php?r=book/index');
    }

    /**
     * delete 删除对应图书内容
     * @return url
     */
    public function actionDelete()
    {
      $model = new BookInfomation();
      $params = Yii::$app->request->queryParams;
      $model->load($params);

      $query = BookInfomation::deleteAll(['book_id'=> $params['id']]);

      // return ["data" => "成功！"];
      return $this->redirect('http://lfq.localhost/index.php?r=book/index');
      // return $this->render('show', ['params' => $params]);
    }

    /**
     * delall 删除所有内容
     * @return url
     */
    public function actionDelall($id)
    {
      $model =new BookInfomation();
      if($model->deleteAll("book_id in ($id)")){
          // return $this->render('index',['id'=>3,'mark'=>2]);
          return $this->redirect(['book/index']);
      }else{
          echo $id;
      }
    }

    /**
     * Showadd 添加内容
     * @return url
     */
    public function actionShowadd()
    {      
      $model =new BookInfomation();
      return $this -> render('insert', [
         'model' => $model,
      ]);
    }

    /**
     * Showadd 添加内容
     * @return url
     */
    public function actionInsert()
    {
      $model =new BookInfomation();
      $params = Yii::$app->request->queryParams;

      Yii::$app->db->createCommand()->insert('book_infomation', [ 
         "book_id" => $params['BookInfomation']['book_id'],
         "book_isbn" => $params['BookInfomation']['book_isbn'],
         "book_name" => $params['BookInfomation']['book_name'],
         "book_version" => $params['BookInfomation']['book_version'],
         "book_type" => $params['BookInfomation']['book_type'],
         "book_press" => $params['BookInfomation']['book_press'],
         "book_author" => $params['BookInfomation']['book_author'],
         "book_status" => $params['BookInfomation']['book_status'],  
     ])->execute();
      
        
      
      return $this->redirect(['book/index']);
      // return $this->render('show', ['params' => $params['BookInfomation']]);
    }
 }
?>