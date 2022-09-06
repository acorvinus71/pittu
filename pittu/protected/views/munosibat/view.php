<?php
/* @var $this MunosibatController */
/* @var $model Munosibat */

$this->breadcrumbs=array(
	'Munosibats'=>array('index'),
	$model->id_munosibat,
);

$this->menu=array(
	array('label'=>'List Munosibat', 'url'=>array('index')),
	array('label'=>'Create Munosibat', 'url'=>array('create')),
	array('label'=>'Update Munosibat', 'url'=>array('update', 'id'=>$model->id_munosibat)),
	array('label'=>'Delete Munosibat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_munosibat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Munosibat', 'url'=>array('admin')),
);
?>

<h1>View Munosibat #<?php echo $model->id_munosibat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_munosibat',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_text',
		'ru_text',
		'en_text',
	),
)); ?>
