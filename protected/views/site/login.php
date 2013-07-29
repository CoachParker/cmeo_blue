<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php 
//$form=$this->beginWidget('CActiveForm', array(
$form=$this->beginWidget('foundation.widgets.FounActiveForm', array(

	'id'=>'login-form',
        'type'=>'nice',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

<div class="row">
   <div class="six columns">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
    </div>
</div>    
        <div class="row">
            <div class="four columns">
		<?php //echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordFieldRow($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>    
            </div>
        </div>
		<p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login', array("class" => "small radius button")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
