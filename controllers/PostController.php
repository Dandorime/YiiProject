<?php

namespace app\controllers;

use app\models\GitSearch;
use yii\web\Controller;

class PostController extends Controller
{

    public function actionIndex()
    {
        $search = \Yii::$app->request->post('search');
        $posts = GitSearch::find()->orFilterWhere(['like', 'name_project', $search])->orFilterWhere(['like', 'author', $search])->orFilterWhere(['like', 'stargazers', $search])->orFilterWhere(['like', 'watchers', $search])->all();
        if ($search = $posts)
        return $this-> render('index', ['posts'=>$posts]);
        else {
            $this->redirect('https://api.github.com/search/repositories?q='.$search = \Yii::$app->request->post('search'))  ;}
    }



}