<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task_creative".
 *
 * @property integer $id
 * @property string $essaytext
 * @property string $smallessaytext
 * @property string $topic
 * @property string $presentationtext
 * @property string $projecttext
 * @property integer $year
 * @property string $subject_name
 */
class TaskCreative extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task_creative';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['essaytext', 'smallessaytext', 'topic', 'presentationtext', 'projecttext', 'year', 'subject_name'], 'required'],
            [['essaytext', 'smallessaytext', 'topic', 'presentationtext', 'projecttext', 'subject_name'], 'string'],
            [['year'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'essaytext' => 'Сочинение',
            'smallessaytext' => 'Мини-сочинение',
            'topic' => 'Тема',
            'presentationtext' => 'Презентация',
            'projecttext' => 'Проект',
            'year' => 'Год',
            'subject_name' => 'Предмет',
        ];
    }
}
