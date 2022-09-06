<?php
/* @var $this MtamosController */
/* @var $model Mtamos */

$this->breadcrumbs=array(
	'Mtamoses'=>array('index'),
	$model->id_tamos,
);

$this->menu=array(
	array('label'=>'List Mtamos', 'url'=>array('index')),
	array('label'=>'Create Mtamos', 'url'=>array('create')),
	array('label'=>'Update Mtamos', 'url'=>array('update', 'id'=>$model->id_tamos)),
	array('label'=>'Delete Mtamos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tamos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mtamos', 'url'=>array('admin')),
);
?>

<h1>View Mtamos #<?php echo $model->id_tamos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tamos',
		'nom',
		'kor',
		'tel',
		'email',
		'img',
	),
)); ?>
