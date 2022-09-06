<?php
/* @var $this NashriyaController */
/* @var $model Nashriya */

$this->breadcrumbs=array(
	'Nashriyas'=>array('index'),
	$model->id_nash=>array('view','id'=>$model->id_nash),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nashriya', 'url'=>array('index')),
	array('label'=>'Create Nashriya', 'url'=>array('create')),
	array('label'=>'View Nashriya', 'url'=>array('view', 'id'=>$model->id_nash)),
	array('label'=>'Manage Nashriya', 'url'=>array('admin')),
);
?>

<h1>Update Nashriya <?php echo $model->id_nash; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>