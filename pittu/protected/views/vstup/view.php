<?php
/* @var $this VstupController */
/* @var $model Vstup */

$this->breadcrumbs=array(
	'Vstups'=>array('index'),
	$model->id_vstup,
);

$this->menu=array(
	array('label'=>'List Vstup', 'url'=>array('index')),
	array('label'=>'Create Vstup', 'url'=>array('create')),
	array('label'=>'Update Vstup', 'url'=>array('update', 'id'=>$model->id_vstup)),
	array('label'=>'Delete Vstup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_vstup),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vstup', 'url'=>array('admin')),
);
?>

<h1>View Vstup #<?php echo $model->id_vstup; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_vstup',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_text',
		'ru_text',
		'en_text',
	),
)); ?>
