

<?php

/* @var $this yii\web\View */

$this->title = 'Home‌';
?>

<div class="site-index" >
    <h1 style="font-family: IRANSans"><?= Yii::t('app', 'Home') ; ?></h1>
    <ul style="font-size: 20px;text-decoration: none;color: black">
        <li><a href="brand/index"><?= Yii::t('app', 'برندها') ; ?></a></li>
        <li><a href="car/index"><?= Yii::t('app', 'Cars') ; ?></a></li>
    </ul>
</div>
