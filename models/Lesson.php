<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lesson".
 *
 * @property integer $id
 * @property string $date
 * @property string $materials
 * @property string $link
 * @property integer $year
 * @property string $subject
 */
class Lesson extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lesson';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'materials', 'link', 'year', 'subject'], 'required'],
            [['date'], 'safe'],
            [['materials', 'link', 'subject'], 'string'],
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
            'date' => 'Дата',
            'materials' => 'Материалы',
            'link' => 'Ссылка',
            'year' => 'Год',
            'subject' => 'Предмет',
        ];
    }
}
