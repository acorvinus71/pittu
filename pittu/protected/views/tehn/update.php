<?php
/* @var $this TehnController */
/* @var $model Tehn */

$this->breadcrumbs=array(
	'Tehns'=>array('index'),
	$model->id_tehn=>array('view','id'=>$model->id_tehn),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tehn', 'url'=>array('index')),
	array('label'=>'Create Tehn', 'url'=>array('create')),
	array('label'=>'View Tehn', 'url'=>array('view', 'id'=>$model->id_tehn)),
	array('label'=>'Manage Tehn', 'url'=>array('admin')),
);
?>

<h1>Update Tehn <?php echo $model->id_tehn; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>