<?php 

namespace app\models;

use Yii;

/**
 * 这是一个 model 类用来链接 book_infomation 的数据表
 * 
 * @property int $book_id
 * @property string $book_isbn
 * @property string $book_name
 * @property string $book_version
 * @property string $book_type
 * @property string $book_press
 * @property string $book_author
 * @property string $book_status
 */
class BookInfomation extends \yii\db\ActiveRecord
{
    /**
     * 链接的数据表
     */
    public static function tableName()
    {
        return "book_infomation";
    }

    /**
     * model rules
     */
    public function rules()
    {
        return [
            [['book_id'], 'required'],
            [['book_id'], 'integer'],
            [['book_isbn', 'book_name', 'book_version', 'book_type', 'book_press', 'book_author', 'book_status'], 'string', 'max' => 20],
            [['book_id'], 'unique'],
        ];
    }

    /**
     * 友好数据
     */
    public function attributeLabels()
    {
        return [
            'book_id' => 'Book ID',
            'book_isbn' => '图书出版号',
            'book_name' => '图书名字',
            'book_version' => '图书版本',
            'book_type' => '图书类型',
            'book_press' => '图书价格',
            'book_author' => '图书作者',
            'book_status' => '图书状态',
        ];
    }
}



?>