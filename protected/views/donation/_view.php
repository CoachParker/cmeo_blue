<?php
/* @var $this DonationController */
/* @var $data Donation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EntityID')); ?>:</b>
	<?php echo CHtml::encode($data->EntityID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PersonID')); ?>:</b>
	<?php echo CHtml::encode($data->PersonID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DonationDate')); ?>:</b>
	<?php echo CHtml::encode($data->DonationDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Amount')); ?>:</b>
	<?php echo CHtml::encode($data->Amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ReasonID')); ?>:</b>
	<?php echo CHtml::encode($data->ReasonID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsThanked')); ?>:</b>
	<?php echo CHtml::encode($data->IsThanked); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Comments')); ?>:</b>
	<?php echo CHtml::encode($data->Comments); ?>
	<br />

	*/ ?>

</div>