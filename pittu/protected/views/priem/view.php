<?php
/* @var $this PriemController */
/* @var $model Priem */

$this->breadcrumbs=array(
	'Priems'=>array('index'),
	$model->id_priem,
);

$this->menu=array(
	array('label'=>'List Priem', 'url'=>array('index')),
	array('label'=>'Create Priem', 'url'=>array('create')),
	array('label'=>'Update Priem', 'url'=>array('update', 'id'=>$model->id_priem)),
	array('label'=>'Delete Priem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_priem),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Priem', 'url'=>array('admin')),
);
?>

<h1>View Priem #<?php echo $model->id_priem; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_priem',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_info',
		'ru_info',
		'en_info',
	),
)); ?>
