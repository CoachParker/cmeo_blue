<?php
/* @var $this DonationController */
/* @var $model Donation */

$this->breadcrumbs=array(
	'Donations'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Donation', 'url'=>array('index')),
	array('label'=>'Create Donation', 'url'=>array('create')),
	array('label'=>'View Donation', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Donation', 'url'=>array('admin')),
);
?>

<h1>Update Donation <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>