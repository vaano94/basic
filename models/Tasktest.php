<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "task_test".
 *
 * @property integer $id
 * @property resource $text
 * @property integer $course
 * @property string $topic
 * @property string $subject_name
 */
class Tasktest extends \yii\db\ActiveRecord
{

    public $pdfFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task_test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'course', 'topic', 'subject_name'], 'required'],
            [['text', 'topic', 'subject_name'], 'string'],
            [['course'], 'integer'],
            [['pdfFile'], 'file'],
        ];
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'адрес файла',
            'course' => 'Курс',
            'topic' => 'Тема',
            'subject_name' => 'Предмет',
            'pdfFile'=>'Выберите файл',
        ];
    }
}
