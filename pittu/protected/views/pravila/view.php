<?php
/* @var $this PravilaController */
/* @var $model Pravila */

$this->breadcrumbs=array(
	'Pravilas'=>array('index'),
	$model->id_pravila,
);

$this->menu=array(
	array('label'=>'List Pravila', 'url'=>array('index')),
	array('label'=>'Create Pravila', 'url'=>array('create')),
	array('label'=>'Update Pravila', 'url'=>array('update', 'id'=>$model->id_pravila)),
	array('label'=>'Delete Pravila', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pravila),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pravila', 'url'=>array('admin')),
);
?>

<h1>View Pravila #<?php echo $model->id_pravila; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pravila',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_text',
		'ru_text',
		'en_text',
	),
)); ?>
