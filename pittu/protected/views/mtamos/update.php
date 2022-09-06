<?php
/* @var $this MtamosController */
/* @var $model Mtamos */

$this->breadcrumbs=array(
	'Mtamoses'=>array('index'),
	$model->id_tamos=>array('view','id'=>$model->id_tamos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mtamos', 'url'=>array('index')),
	array('label'=>'Create Mtamos', 'url'=>array('create')),
	array('label'=>'View Mtamos', 'url'=>array('view', 'id'=>$model->id_tamos)),
	array('label'=>'Manage Mtamos', 'url'=>array('admin')),
);
?>

<h1>Update Mtamos <?php echo $model->id_tamos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>