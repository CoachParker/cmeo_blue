<?php
/* @var $this EntityController */
/* @var $model Entity */

$this->breadcrumbs=array(
	'Entities'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Entity', 'url'=>array('index')),
	array('label'=>'Create Entity', 'url'=>array('create')),
	array('label'=>'View Entity', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Entity', 'url'=>array('admin')),
);
?>

<h1>Update Entity <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>