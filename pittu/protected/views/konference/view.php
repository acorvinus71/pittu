<?php
/* @var $this KonferenceController */
/* @var $model Konference */

$this->breadcrumbs=array(
	'Konferences'=>array('index'),
	$model->id_konf,
);

$this->menu=array(
	array('label'=>'List Konference', 'url'=>array('index')),
	array('label'=>'Create Konference', 'url'=>array('create')),
	array('label'=>'Update Konference', 'url'=>array('update', 'id'=>$model->id_konf)),
	array('label'=>'Delete Konference', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_konf),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Konference', 'url'=>array('admin')),
);
?>

<h1>View Konference #<?php echo $model->id_konf; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_konf',
		'tj_tema',
		'ru_tema',
		'en_tema',
		'tj_adres',
		'ru_adres',
		'en_adres',
	),
)); ?>
