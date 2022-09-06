<?php
/* @var $this HujjatController */
/* @var $model Hujjat */

$this->breadcrumbs=array(
	'Hujjats'=>array('index'),
	$model->id_huj,
);

$this->menu=array(
	array('label'=>'List Hujjat', 'url'=>array('index')),
	array('label'=>'Create Hujjat', 'url'=>array('create')),
	array('label'=>'Update Hujjat', 'url'=>array('update', 'id'=>$model->id_huj)),
	array('label'=>'Delete Hujjat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_huj),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hujjat', 'url'=>array('admin')),
);
?>

<h1>View Hujjat #<?php echo $model->id_huj; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_huj',
		'img',
		'tj_text',
		'ru_text',
		'en_text',
	),
)); ?>
