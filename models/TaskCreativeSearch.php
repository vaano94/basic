<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TaskCreative;

/**
 * TaskCreativeSearch represents the model behind the search form about `app\models\TaskCreative`.
 */
class TaskCreativeSearch extends TaskCreative
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'year'], 'integer'],
            [['essaytext', 'smallessaytext', 'topic', 'presentationtext', 'projecttext', 'subject_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TaskCreative::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'year' => $this->year,
        ]);

        $query->andFilterWhere(['like', 'essaytext', $this->essaytext])
            ->andFilterWhere(['like', 'smallessaytext', $this->smallessaytext])
            ->andFilterWhere(['like', 'topic', $this->topic])
            ->andFilterWhere(['like', 'presentationtext', $this->presentationtext])
            ->andFilterWhere(['like', 'projecttext', $this->projecttext])
            ->andFilterWhere(['like', 'subject_name', $this->subject_name]);

        return $dataProvider;
    }
}
