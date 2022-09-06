<?php
/* @var $this MtestiController */
/* @var $model Mtesti */

$this->breadcrumbs=array(
	'Mtestis'=>array('index'),
	$model->id_mtesti=>array('view','id'=>$model->id_mtesti),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mtesti', 'url'=>array('index')),
	array('label'=>'Create Mtesti', 'url'=>array('create')),
	array('label'=>'View Mtesti', 'url'=>array('view', 'id'=>$model->id_mtesti)),
	array('label'=>'Manage Mtesti', 'url'=>array('admin')),
);
?>

<h1>Update Mtesti <?php echo $model->id_mtesti; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>