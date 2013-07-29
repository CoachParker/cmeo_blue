<?php
/* @var $this PersonTypeController */
/* @var $model PersonType */

$this->breadcrumbs=array(
	'Person Types'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List PersonType', 'url'=>array('index')),
	array('label'=>'Create PersonType', 'url'=>array('create')),
	array('label'=>'Update PersonType', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete PersonType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PersonType', 'url'=>array('admin')),
);
?>

<h1>View PersonType #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Name',
	),
)); ?>
