<?php

/** @var yii\web\View $this */
use yii\widgets\Pjax;

$this->title = Yii::$app->name;
?>
<script> document.addEventListener("DOMContentLoaded", function() { // событие загрузки страницы

// выбираем на странице все элементы типа textarea и input
document.querySelectorAll('input').forEach(function(e) {

if(e.value === '') e.value = window.sessionStorage.getItem(e.name, e.value);

e.addEventListener('input', function() {

window.sessionStorage.setItem(e.name, e.value);
})
})

});</script>

<?php Pjax::begin();?>
<?= \yii\helpers\Html::beginForm(['index'],'post');?>
<div class="site-index">
    <div class="jumbotron text-center bg-transparent">
        <div class="input-group mb-3">
            <input type="text" id="search" name="search" class="form-control" placeholder="Поиск..." aria-label="" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
            </div>
        </div>
    </div>
</div>

<?= \yii\helpers\Html::endForm() ?>
    <?php require 'search.php'?>
<?php Pjax::end(); ?>
