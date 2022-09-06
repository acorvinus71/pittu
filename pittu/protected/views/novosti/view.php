<?php
/* @var $this NovostiController */
/* @var $model Novosti */

$this->breadcrumbs=array(
	'Novostis'=>array('index'),
	$model->id_novost,
);

$this->menu=array(
	array('label'=>'List Novosti', 'url'=>array('index')),
	array('label'=>'Create Novosti', 'url'=>array('create')),
	array('label'=>'Update Novosti', 'url'=>array('update', 'id'=>$model->id_novost)),
	array('label'=>'Delete Novosti', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_novost),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Novosti', 'url'=>array('admin')),
);
?>

<h1>View Novosti #<?php echo $model->id_novost; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_novost',
		'tj_zagolovok',
		'ru_zagolovok',
		'en_zagolovok',
		'tj_text',
		'ru_text',
		'en_text',
		'sanai_hamroh',
		'prosmotr',
		'img',
	),
)); ?>
