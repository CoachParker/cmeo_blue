<?php
/* @var $this PersonController */
/* @var $model Person */
/* @var $form CActiveForm */
?>

<div class="form">

<?php //$form=$this->beginWidget('foundation.widgets.FounActiveForm' DOESN'T LOOK AS NICE
        $form=$this->beginWidget('CActiveForm', array(
	'id'=>'person-form',
	'enableAjaxValidation'=>false,
    //'type' => 'custom',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FirstName'); ?>
		<?php echo $form->textField($model,'FirstName',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'FirstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LastName'); ?>
		<?php echo $form->textField($model,'LastName',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'LastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BirthDate'); ?>
		<?php echo $form->textField($model,'BirthDate'); ?>
		<?php echo $form->error($model,'BirthDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TypeID'); ?>
		<?php echo $form->radioButtonList($model,'TypeID',CHtml::listData(PersonType::model()->findAll(), 'ID', 'Name'),array('separator'=>'&nbsp; &nbsp;','labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'TypeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entities'); ?>
		<?php //echo $form->checkBoxList($model,'entities',CHtml::listData(Entity::model()->findAll(), 'ID', 'Name'),array('separator'=>'&nbsp; &nbsp;','labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->dropDownList($model,'entities',
                        CHtml::listData(Entity::model()->findAll(), 'ID', 'Name'),
                        array('prompt' => 'Select a Department', 'multiple' => 'multiple')); ?>
		<?php echo $form->error($model,'entities'); ?>
	</div>

<!-- the row here for the entity , but it doesn't create new entity with person -->

	<div class="row">
		<?php echo $form->labelEx($model,'entities'); ?>
		<?php echo $form->textField(Entity::model(),'Name'); ?>
		<?php echo $form->error($model,'entities'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Address1'); ?>
		<?php echo $form->textField($model,'Address1',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'Address1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Address2'); ?>
		<?php echo $form->textField($model,'Address2',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'Address2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'City'); ?>
		<?php echo $form->textField($model,'City',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'City'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'State'); ?>
		<?php echo $form->textField($model,'State',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'State'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Zip'); ?>
		<?php echo $form->textField($model,'Zip',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Phone'); ?>
		<?php echo $form->textField($model,'Phone',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'Phone'); ?>
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