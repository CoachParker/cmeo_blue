<?php
/* @var $this EntityTypeController */
/* @var $model EntityType */

$this->breadcrumbs=array(
	'Entity Types'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List EntityType', 'url'=>array('index')),
	array('label'=>'Create EntityType', 'url'=>array('create')),
	array('label'=>'Update EntityType', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete EntityType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EntityType', 'url'=>array('admin')),
);
?>

<h1>View EntityType #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Name',
	),
)); ?>
