<?php
/* @var $this PersonController */
/* @var $model Person */

$this->breadcrumbs=array(
	'People'=>array('index'),
	$model->ID,
);

$id = $model->ID;
$entity=$this->ListEntities($id);

$this->menu=array(
	array('label'=>'List Person', 'url'=>array('index')),
	array('label'=>'Create Person', 'url'=>array('create')),
	array('label'=>'Update Person', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Person', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Person', 'url'=>array('admin')),
);
?>

<h1>View Person #<?php echo $model->ID; ?></h1>

<?php 
        $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'FirstName',
		'LastName',
		'BirthDate',
		'TypeID',
		'Address1',
		'Address2',
		'City',
		'State',
		'Zip',
		'Email',
		'Phone',
		'Comments',
            array(
			'label' => 'Entities',
                    /*Some progress; prints first entity, but not sure how to
                     *  get others; */
			'value' => $model->getEntityList(),
			'type' => 'raw'
		),
	   
	),
));
/* This did not work above;also tried the foreach in the array, 2013-07-24
        foreach ($model->entities as $stuff){
            array(
                'label' => 'Entities',
                'value' => CHtml::link(CHtml::encode($stuff->Name),
                    array('entity/view','id'=>$stuff->ID)),
                    'type' => 'raw'
                ),
        }
        
        
        # what was I doing here?
# CHtml::activeListBox($model, 'entities', CHtml::listData($entity, 'id', 'name'), array('multiple' => 'multiple'));
### Trying to include a persons entities

#$this->widget('zii.widgets.CDetailView', array(
#	'data'=>$entity, #Not Set???
#	'attributes'=>'Entity',));
#echo $entity;
*/
 ?>
