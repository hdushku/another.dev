<?php
/**
 * /home/ubuntu/workspace/another.dev/app/front/runtime/giiant/e0080b9d6ffa35acb85312bf99a557f2
 *
 * @package default
 */


namespace front\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use front\models\Type;

/**
 * TypeSearch represents the model behind the search form about `front\models\Type`.
 */
class TypeSearch extends Type
{

	/**
	 *
	 * @inheritdoc
	 * @return unknown
	 */
	public function rules() {
		return [
			[['id', 'show_category'], 'integer'],
			[['title', 'alias'], 'safe'],
		];
	}


	/**
	 *
	 * @inheritdoc
	 * @return unknown
	 */
	public function scenarios() {
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}


	/**
	 * Creates data provider instance with search query applied
	 *
	 *
	 * @param array   $params
	 * @return ActiveDataProvider
	 */
	public function search($params) {
		$query = Type::find();

		$dataProvider = new ActiveDataProvider([
				'query' => $query,
			]);

		$this->load($params);

		if (!$this->validate()) {
			// uncomment the following line if you do not want to any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		$query->andFilterWhere([
				'id' => $this->id,
				'show_category' => $this->show_category,
			]);

		$query->andFilterWhere(['like', 'title', $this->title])
		->andFilterWhere(['like', 'alias', $this->alias]);

		return $dataProvider;
	}


}
