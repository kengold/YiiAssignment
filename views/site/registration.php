<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Registration';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-registration">
    <h1><?= Html::encode($this->title) ?></h1>

    
        <p>
            To become a member, please fill out the following  registration form.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'registration-form']); ?>

                    <legend> <font color="blue", strong>BASIC INFORMATION</font></legend>
                    <?= $form->field($model, 'fullName')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'gender')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'dateOfBirth')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'yearsOfExperience')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'industry')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'location')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'aboutMe')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'profilePicture')->textInput(['autofocus' => true]) ?>

                <legend> <font color="blue", strong>SKILLS</font> </legend>
                 <?= $form->field($model, 'ProfessionalTitle')->textInput(['autofocus' => true]) ?>
                 <?= $form->field($model, 'CareerLevel')->textInput(['autofocus' => true]) ?>
                 <?= $form->field($model, 'CommunicationLevel')->textInput(['autofocus' => true]) ?>
                 <?= $form->field($model, 'OrganizationalLevel')->textInput(['autofocus' => true]) ?>
                 <?= $form->field($model, 'JobRelatedLevel')->textInput(['autofocus' => true]) ?>

           
                


                
                    <legend> <font color="blue", strong>CONTACT</font>  </legend>
                
                
                    <?= $form->field($model, 'Address') ?>
                    <?= $form->field($model, 'PhoneNumber') ?>
                    <?= $form->field($model, 'Website') ?>
                    <?= $form->field($model, 'email') ?>
               
            

                  

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

</div>
