<?php
/* @var $this MagistraturaController */
/* @var $model Magistratura */

$this->breadcrumbs=array(
	'Magistraturas'=>array('index'),
	$model->id_mag=>array('view','id'=>$model->id_mag),
	'Update',
);

$this->menu=array(
	array('label'=>'List Magistratura', 'url'=>array('index')),
	array('label'=>'Create Magistratura', 'url'=>array('create')),
	array('label'=>'View Magistratura', 'url'=>array('view', 'id'=>$model->id_mag)),
	array('label'=>'Manage Magistratura', 'url'=>array('admin')),
);
?>

<h1>Update Magistratura <?php echo $model->id_mag; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>