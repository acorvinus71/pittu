<?php
/* @var $this MunosibatController */
/* @var $model Munosibat */

$this->breadcrumbs=array(
	'Munosibats'=>array('index'),
	$model->id_munosibat=>array('view','id'=>$model->id_munosibat),
	'Update',
);

$this->menu=array(
	array('label'=>'List Munosibat', 'url'=>array('index')),
	array('label'=>'Create Munosibat', 'url'=>array('create')),
	array('label'=>'View Munosibat', 'url'=>array('view', 'id'=>$model->id_munosibat)),
	array('label'=>'Manage Munosibat', 'url'=>array('admin')),
);
?>

<h1>Update Munosibat <?php echo $model->id_munosibat; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>