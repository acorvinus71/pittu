<?php
/* @var $this KafedraController */
/* @var $model Kafedra */

$this->breadcrumbs=array(
	'Kafedras'=>array('index'),
	$model->id_kafedra=>array('view','id'=>$model->id_kafedra),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kafedra', 'url'=>array('index')),
	array('label'=>'Create Kafedra', 'url'=>array('create')),
	array('label'=>'View Kafedra', 'url'=>array('view', 'id'=>$model->id_kafedra)),
	array('label'=>'Manage Kafedra', 'url'=>array('admin')),
);
?>

<h1>Update Kafedra <?php echo $model->id_kafedra; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>