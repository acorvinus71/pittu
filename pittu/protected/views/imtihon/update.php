<?php
/* @var $this ImtihonController */
/* @var $model Imtihon */

$this->breadcrumbs=array(
	'Imtihons'=>array('index'),
	$model->id_imtihon=>array('view','id'=>$model->id_imtihon),
	'Update',
);

$this->menu=array(
	array('label'=>'List Imtihon', 'url'=>array('index')),
	array('label'=>'Create Imtihon', 'url'=>array('create')),
	array('label'=>'View Imtihon', 'url'=>array('view', 'id'=>$model->id_imtihon)),
	array('label'=>'Manage Imtihon', 'url'=>array('admin')),
);
?>

<h1>Update Imtihon <?php echo $model->id_imtihon; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>