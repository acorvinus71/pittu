<?php
/* @var $this ZakonController */
/* @var $model Zakon */

$this->breadcrumbs=array(
	'Zakons'=>array('index'),
	$model->id_zakon,
);

$this->menu=array(
	array('label'=>'List Zakon', 'url'=>array('index')),
	array('label'=>'Create Zakon', 'url'=>array('create')),
	array('label'=>'Update Zakon', 'url'=>array('update', 'id'=>$model->id_zakon)),
	array('label'=>'Delete Zakon', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_zakon),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Zakon', 'url'=>array('admin')),
);
?>

<h1>View Zakon #<?php echo $model->id_zakon; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_zakon',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_text',
		'ru_text',
		'en_text',
	),
)); ?>
