<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\cist\models\search\PermohonanCutiNontahunanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="permohonan-cuti-nontahunan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pmhnn_cuti_nthn_id') ?>

    <?= $form->field($model, 'tgl_mulai') ?>

    <?= $form->field($model, 'tgl_akhir') ?>

    <?= $form->field($model, 'alasan_cuti') ?>

    <?= $form->field($model, 'lama_cuti') ?>

    <?php // echo $form->field($model, 'kategori_id') ?>

    <?php // echo $form->field($model, 'pengalihan_tugas') ?>

    <?php // echo $form->field($model, 'status_oleh_hrd') ?>

    <?php // echo $form->field($model, 'status_oleh_atasan') ?>

    <?php // echo $form->field($model, 'status_oleh_wr2') ?>

    <?php // echo $form->field($model, 'pegawai_id') ?>

    <?php // echo $form->field($model, 'deleted') ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <?php // echo $form->field($model, 'deleted_by') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
