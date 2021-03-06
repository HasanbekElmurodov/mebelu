<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ProductImage */

$this->title = Yii::t('app', 'Update Product Image: {name}', [
    'name' => $model->image_url,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Images'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->image_url, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="product-image-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
