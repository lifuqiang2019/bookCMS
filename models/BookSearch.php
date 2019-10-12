<?php

namespace app\models;

use yii\base\Model;
use yii\data\Pagination;
use yii\data\ActiveDataProvider;
use app\models\BookInfomation;

/**
 * 显示数据库 book_infomation 中的数据
 */
class BookSearch extends BookInfomation
{
    public $keyWords;
    /**
     * 数据处理规则
     */
    public function rules()
    {
        return [
            [['book_id'], 'integer'],
            [['book_isbn', 'book_name', 'book_version', 'book_type', 'book_press', 'book_author', 'book_status'], 'safe'],
            [['keyWordes'], 'safe'],
        ];
    }

    /**
     * 设置场景
     */
    public function scenarios()
    {
        return Model::scenarios();
    }

    /**
     * 查询函数 seach
     */
    public function search($params)
    {   
        if(!array_key_exists('BookSearch', $params)){
            $params['BookSearch'] = [ 'keyWords' => null];
        }
        
        $query = BookInfomation::find();

        $this -> load($params);

        if(!$this->validate()){
            return $query;
        }

        // 加入分页
        $pagination = new Pagination([
            'defaultPageSize' => 6,
            'totalCount' => $query -> count(),
        ]);

        // DataProvider 包裹数据
        $dataProvider = new ActiveDataProvider([
            "query" => $query,
            'pagination' => $pagination
        ]);

        // 接入查询过滤器
        // $query -> andFilterWhere([
        //     'book_id' => $this->book_id
        // ]);

        // $query->andFilterWhere(['like', 'book_isbn', $this->book_isbn])
        // ->andFilterWhere(['like', 'book_name', $this->book_name])
        // ->andFilterWhere(['like', 'book_version', $this->book_version])
        // ->andFilterWhere(['like', 'book_type', $this->book_type])
        // ->andFilterWhere(['like', 'book_press', $this->book_press])
        // ->andFilterWhere(['like', 'book_author', $this->book_author])
        // ->andFilterWhere(['like', 'book_status', $this->book_status]);

        $query->andFilterWhere([
            "or",
            ['like', 'book_id', $params['BookSearch']['keyWords']],
            ['like', 'book_isbn', $params['BookSearch']['keyWords']],
            ['like', 'book_name', $params['BookSearch']['keyWords']],
            ['like', 'book_version', $params['BookSearch']['keyWords']],
            ['like', 'book_type', $params['BookSearch']['keyWords']],
            ['like', 'book_press', $params['BookSearch']['keyWords']],
            ['like', 'book_author', $params['BookSearch']['keyWords']],
            ['like', 'book_status', $params['BookSearch']['keyWords']]
        ]);

        // $query->andFilterWhere(['like', 'book_version', $this->keyWords]);

        return [
            'dataProvider' => $dataProvider,
            'pagination' => $pagination,
        ];
    }

    /**
     * searchById
     */
    function searchById($params)
    {
        $this -> load($params);

        $query = BookInfomation::find()
        ->where(['book_id' => $params['book_id']]);  

        if(!$this->validate()){
            return $query;
        }

        // DataProvider 包裹数据
        $dataProvider = new ActiveDataProvider([
            "query" => $query,
        ]);

        // 接入查询过滤器
        // $query -> andFilterWhere([
        //     'book_id' => $this->book_id
        // ]);

        return $dataProvider;
    }
}

?>