<?php
/* @var $this PersonTypeController */
/* @var $model PersonType */

$this->breadcrumbs=array(
	'Person Types'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List PersonType', 'url'=>array('index')),
	array('label'=>'Create PersonType', 'url'=>array('create')),
	array('label'=>'View PersonType', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage PersonType', 'url'=>array('admin')),
);
?>

<h1>Update PersonType <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>