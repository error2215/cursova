<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакти';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

    <div class="alert alert-success">
        Дякую за звернення. Ми зробимо все можливе, щоб відповісти як можна скоріше.
    </div>
    <?php else: ?>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1 class="text-center" style="padding: 20px; font-size: 24px"><?= Html::encode($this->title) ?></h1>
            <p style="font-size: 16px">
                Ви можете написати лист і ми спробуємо зв'язатися в найближчий час.
            </p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="form-wrap">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'class' => 'form-control input-class']) ?>

                <?= $form->field($model, 'email') ->textInput(['class' => 'form-control input-class'])?>

                <?= $form->field($model, 'subject') ->textInput(['class' => 'form-control input-class'])?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '
                        <div class="row">
                        <div class="col-lg-3">
                        {image}
                        </div>
                        <div class="col-lg-3 align-middle">
                        {input}
                        
                        </div>
                        </div>',
                        'options' => ['class' => 'input-custom']
                    ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

    <?php endif; ?>
</div>