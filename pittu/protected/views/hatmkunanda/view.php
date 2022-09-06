<?php
/* @var $this HatmkunandaController */
/* @var $model Hatmkunanda */

$this->breadcrumbs=array(
	'Hatmkunandas'=>array('index'),
	$model->id_hatm,
);

$this->menu=array(
	array('label'=>'List Hatmkunanda', 'url'=>array('index')),
	array('label'=>'Create Hatmkunanda', 'url'=>array('create')),
	array('label'=>'Update Hatmkunanda', 'url'=>array('update', 'id'=>$model->id_hatm)),
	array('label'=>'Delete Hatmkunanda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hatm),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hatmkunanda', 'url'=>array('admin')),
);
?>

<h1>View Hatmkunanda #<?php echo $model->id_hatm; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_hatm',
		'fio',
		'ixtisos',
		'soli_hatm',
	),
)); ?>
