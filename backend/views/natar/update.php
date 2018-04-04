<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Natars */

$this->title = Yii::t('app', 'Update Natars: {nameAttribute}', [
    'nameAttribute' => $model->_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Natars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->_id, 'url' => ['view', 'id' => (string)$model->_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="natars-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
