<?php
/* @var $this PersonController */
/* @var $data Person */
?>

<div class="view">

    <?php 
        $this->widget('zii.widgets.CDetailView', array(
	'data'=>$data,
	'attributes'=>array(
            array(
                'label' => 'ID',
                'value' => CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)),
                'type' => 'raw'
                ),
            'FirstName',
            'LastName',
            'BirthDate',
            'TypeID',
            'Address1',
            array(
			'label' => 'Entities',
                    /*Some progress; prints first entity, but not sure how to
                     *  get others; */
			'value' => $data->getEntityList(),
			'type' => 'raw'
		),
	   
	),
));
 ?>
    <!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FirstName')); ?>:</b>
	<?php echo CHtml::encode($data->FirstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LastName')); ?>:</b>
	<?php echo CHtml::encode($data->LastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BirthDate')); ?>:</b>
	<?php echo CHtml::encode($data->BirthDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TypeID')); ?>:</b>
	<?php echo CHtml::encode($data->TypeID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Address1')); ?>:</b>
	<?php echo CHtml::encode($data->Address1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Address2')); ?>:</b>
	<?php echo CHtml::encode($data->Address2); ?>
	<br />
        
	<b><?php         /* Trying to load a person's entities, added 2013-07-23, it works */
        $person = Person::model()->with('entities')->findbyPk($data->ID);
        echo CHtml::encode("Entity " . $data->getAttributeLabel('Entity.Name')) ."(s)"; ?>:</b>
        <?php 
                foreach($person->entities as $entity)
                {
                        echo CHtml::encode($entity->Name . ", ");
                }
        ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('City')); ?>:</b>
	<?php echo CHtml::encode($data->City); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('State')); ?>:</b>
	<?php echo CHtml::encode($data->State); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Zip')); ?>:</b>
	<?php echo CHtml::encode($data->Zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Phone')); ?>:</b>
	<?php echo CHtml::encode($data->Phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comments')); ?>:</b>
	<?php echo CHtml::encode($data->Comments); ?>
	<br />

	*/ ?>
-->
</div>