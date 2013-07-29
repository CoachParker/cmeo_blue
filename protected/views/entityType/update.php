<?php
/* @var $this EntityTypeController */
/* @var $model EntityType */

$this->breadcrumbs=array(
	'Entity Types'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List EntityType', 'url'=>array('index')),
	array('label'=>'Create EntityType', 'url'=>array('create')),
	array('label'=>'View EntityType', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage EntityType', 'url'=>array('admin')),
);
?>

<h1>Update EntityType <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>