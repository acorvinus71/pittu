<?php
/* @var $this TarihController */
/* @var $model Tarih */

$this->breadcrumbs=array(
	'Tarihs'=>array('index'),
	$model->id_tarih,
);

$this->menu=array(
	array('label'=>'List Tarih', 'url'=>array('index')),
	array('label'=>'Create Tarih', 'url'=>array('create')),
	array('label'=>'Update Tarih', 'url'=>array('update', 'id'=>$model->id_tarih)),
	array('label'=>'Delete Tarih', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tarih),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tarih', 'url'=>array('admin')),
);
?>

<h1>View Tarih #<?php echo $model->id_tarih; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tarih',
		'tj_zagolovok',
		'ru_zagolovok',
		'en_zagolovok',
		'tj_text',
		'ru_text',
		'en_text',
	),
)); ?>
