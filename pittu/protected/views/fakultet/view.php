<?php
/* @var $this FakultetController */
/* @var $model Fakultet */

$this->breadcrumbs=array(
	'Fakultets'=>array('index'),
	$model->id_fakultet,
);

$this->menu=array(
	array('label'=>'List Fakultet', 'url'=>array('index')),
	array('label'=>'Create Fakultet', 'url'=>array('create')),
	array('label'=>'Update Fakultet', 'url'=>array('update', 'id'=>$model->id_fakultet)),
	array('label'=>'Delete Fakultet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_fakultet),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fakultet', 'url'=>array('admin')),
);
?>

<h1>View Fakultet #<?php echo $model->id_fakultet; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_fakultet',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'img',
		'tj_info',
		'ru_info',
		'en_info',
		'tj_infofak',
		'ru_infofak',
		'en_infofak',
	),
)); ?>
