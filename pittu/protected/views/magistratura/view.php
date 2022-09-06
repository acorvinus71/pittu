<?php
/* @var $this MagistraturaController */
/* @var $model Magistratura */

$this->breadcrumbs=array(
	'Magistraturas'=>array('index'),
	$model->id_mag,
);

$this->menu=array(
	array('label'=>'List Magistratura', 'url'=>array('index')),
	array('label'=>'Create Magistratura', 'url'=>array('create')),
	array('label'=>'Update Magistratura', 'url'=>array('update', 'id'=>$model->id_mag)),
	array('label'=>'Delete Magistratura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mag),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Magistratura', 'url'=>array('admin')),
);
?>

<h1>View Magistratura #<?php echo $model->id_mag; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_mag',
		'tj_ixtisos',
		'tj_ruzona',
		'tj_goibona',
		'tj_bujavi',
		'tj_shartnomavi',
		'ru_ixtisos',
		'ru_ruzona',
		'ru_goibona',
		'ru_bujavi',
		'ru_shartnomavi',
		'en_ixtisos',
		'en_ruzona',
		'en_goibona',
		'en_bujavi',
		'en_shartnomavi',
	),
)); ?>
