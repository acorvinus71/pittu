<?php
/* @var $this NovostiController */
/* @var $model Novosti */

$this->breadcrumbs=array(
	'Novostis'=>array('index'),
	$model->id_novost=>array('view','id'=>$model->id_novost),
	'Update',
);

$this->menu=array(
	array('label'=>'List Novosti', 'url'=>array('index')),
	array('label'=>'Create Novosti', 'url'=>array('create')),
	array('label'=>'View Novosti', 'url'=>array('view', 'id'=>$model->id_novost)),
	array('label'=>'Manage Novosti', 'url'=>array('admin')),
);
?>

<h1>Update Novosti <?php echo $model->id_novost; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>