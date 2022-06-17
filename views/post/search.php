<?php

/** @var yii\web\View $this */

$this->title = Yii::$app->name;
?>

<div class="body-content">
    <div class="row row-cols-1 row-cols-md-3">
        <?php foreach ($posts as $post): ?>
            <div class=" col mb-4">
                <div class="card" >
                    <a class="btn btn-outline-secondary" href="<?=$post->url?>">
                        <div class="card-body"></div>
                        <h4 class="card-title"><?=$post->name_project?></h4>
                        <h6 class="card-title">Author: <?=$post->author?></h6>
                        <h6 class="card-text">Star: <?=$post->stargazers?></h6>
                        <h6 class="card-text mb-3">Watching: <?=$post->watchers?></h6>
                    </a>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
