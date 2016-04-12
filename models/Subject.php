<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property integer $id
 * @property string $subject_name
 * @property string $subject_term
 * @property string $subject_topic
 * @property integer $subject_year
 * @property string subject_link
 */
class Subject extends \yii\db\ActiveRecord
{
    public $pdfFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_name', 'subject_term', 'subject_topic', 'subject_year'], 'required'],
            [['subject_name', 'subject_term', 'subject_topic','subject_link'], 'string'],
            [['subject_year'], 'integer'],
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
            'subject_name' => 'Дисциплина',
            'subject_term' => 'Семестр',
            'subject_topic' => 'Тема',
            'subject_year' => 'Год обучения',
            'pdfFile'=>'Выберите файл',
            'subject_link'=>'Ссылка',
        ];
    }
}
