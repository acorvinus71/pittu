<?php
/* @var $this PravilaController */
/* @var $model Pravila */

$this->breadcrumbs=array(
	'Pravilas'=>array('index'),
	$model->id_pravila=>array('view','id'=>$model->id_pravila),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pravila', 'url'=>array('index')),
	array('label'=>'Create Pravila', 'url'=>array('create')),
	array('label'=>'View Pravila', 'url'=>array('view', 'id'=>$model->id_pravila)),
	array('label'=>'Manage Pravila', 'url'=>array('admin')),
);
?>

<h1>Update Pravila <?php echo $model->id_pravila; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>