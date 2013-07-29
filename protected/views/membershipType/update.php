<?php
/* @var $this MembershipTypeController */
/* @var $model MembershipType */

$this->breadcrumbs=array(
	'Membership Types'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List MembershipType', 'url'=>array('index')),
	array('label'=>'Create MembershipType', 'url'=>array('create')),
	array('label'=>'View MembershipType', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage MembershipType', 'url'=>array('admin')),
);
?>

<h1>Update MembershipType <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>