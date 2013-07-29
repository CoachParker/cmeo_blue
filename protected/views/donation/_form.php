<?php
/* @var $this DonationController */
/* @var $model Donation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'donation-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'EntityID'); ?>
		<?php echo $form->textField($model,'EntityID'); ?>
		<?php echo $form->error($model,'EntityID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PersonID'); ?>
		<?php echo $form->textField($model,'PersonID'); ?>
		<?php echo $form->error($model,'PersonID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DonationDate'); ?>
		<?php echo $form->textField($model,'DonationDate'); ?>
		<?php echo $form->error($model,'DonationDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Amount'); ?>
		<?php echo $form->textField($model,'Amount'); ?>
		<?php echo $form->error($model,'Amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ReasonID'); ?>
		<?php echo $form->textField($model,'ReasonID'); ?>
		<?php echo $form->error($model,'ReasonID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IsThanked'); ?>
		<?php echo $form->textField($model,'IsThanked',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'IsThanked'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Comments'); ?>
		<?php echo $form->textArea($model,'Comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Comments'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->