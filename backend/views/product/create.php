<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Product */

$this->title = Yii::t('app', 'Create Product');
?>
<div class="product-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
