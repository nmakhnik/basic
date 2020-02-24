<?php
use yii\helpers\Html;
?>
<p>Введите инфорфицию:</p>

<ul>
    <li><label>Nema</label>:<?= Html::encode($model->name) ?></li>
    <li><label>email</label>:<?= Html::encode($model->email) ?></li>
</ul>