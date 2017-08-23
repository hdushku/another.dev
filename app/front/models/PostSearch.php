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
use front\models\Post;

/**
 * PostSearch represents the model behind the search form about `front\models\Post`.
 */
class PostSearch extends Post
{

	/**
	 *
	 * @inheritdoc
	 * @return unknown
	 */
	public function rules() {
		return [
			[['id', 'category_id', 'type_id', 'views', 'publish_status', 'created_at', 'updated_at'], 'integer'],
			[['title', 'title_seo', 'alias', 'meta_description', 'preview', 'content'], 'safe'],
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
		$query = Post::find();

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
				'category_id' => $this->category_id,
				'type_id' => $this->type_id,
				'views' => $this->views,
				'publish_status' => $this->publish_status,
				'created_at' => $this->created_at,
				'updated_at' => $this->updated_at,
			]);

		$query->andFilterWhere(['like', 'title', $this->title])
		->andFilterWhere(['like', 'title_seo', $this->title_seo])
		->andFilterWhere(['like', 'alias', $this->alias])
		->andFilterWhere(['like', 'meta_description', $this->meta_description])
		->andFilterWhere(['like', 'preview', $this->preview])
		->andFilterWhere(['like', 'content', $this->content]);

		return $dataProvider;
	}


}
