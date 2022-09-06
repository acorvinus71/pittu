<?php
/* @var $this ImtihonController */
/* @var $model Imtihon */

$this->breadcrumbs=array(
	'Imtihons'=>array('index'),
	$model->id_imtihon,
);

$this->menu=array(
	array('label'=>'List Imtihon', 'url'=>array('index')),
	array('label'=>'Create Imtihon', 'url'=>array('create')),
	array('label'=>'Update Imtihon', 'url'=>array('update', 'id'=>$model->id_imtihon)),
	array('label'=>'Delete Imtihon', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_imtihon),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Imtihon', 'url'=>array('admin')),
);
?>

<h1>View Imtihon #<?php echo $model->id_imtihon; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_imtihon',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_text',
		'ru_text',
		'en_text',
		'img',
		'tj_inf',
		'ru_inf',
		'en_inf',
	),
)); ?>
