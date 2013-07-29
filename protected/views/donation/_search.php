<?php
/* @var $this DonationController */
/* @var $model Donation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EntityID'); ?>
		<?php echo $form->textField($model,'EntityID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PersonID'); ?>
		<?php echo $form->textField($model,'PersonID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DonationDate'); ?>
		<?php echo $form->textField($model,'DonationDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Amount'); ?>
		<?php echo $form->textField($model,'Amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ReasonID'); ?>
		<?php echo $form->textField($model,'ReasonID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsThanked'); ?>
		<?php echo $form->textField($model,'IsThanked',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Comments'); ?>
		<?php echo $form->textArea($model,'Comments',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->