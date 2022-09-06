<?php
/* @var $this KafedraController */
/* @var $model Kafedra */

$this->breadcrumbs=array(
	'Kafedras'=>array('index'),
	$model->id_kafedra,
);

$this->menu=array(
	array('label'=>'List Kafedra', 'url'=>array('index')),
	array('label'=>'Create Kafedra', 'url'=>array('create')),
	array('label'=>'Update Kafedra', 'url'=>array('update', 'id'=>$model->id_kafedra)),
	array('label'=>'Delete Kafedra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kafedra),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kafedra', 'url'=>array('admin')),
);
?>

<h1>View Kafedra #<?php echo $model->id_kafedra; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_kafedra',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'img',
		'tj_info',
		'ru_info',
		'en_info',
		'tj_infokaf',
		'ru_infokaf',
		'en_infokaf',
	),
)); ?>
