<?php
/* @var $this TamosController */
/* @var $model Tamos */

$this->breadcrumbs=array(
	'Tamoses'=>array('index'),
	$model->id_tamos=>array('view','id'=>$model->id_tamos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tamos', 'url'=>array('index')),
	array('label'=>'Create Tamos', 'url'=>array('create')),
	array('label'=>'View Tamos', 'url'=>array('view', 'id'=>$model->id_tamos)),
	array('label'=>'Manage Tamos', 'url'=>array('admin')),
);
?>

<h1>Update Tamos <?php echo $model->id_tamos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>