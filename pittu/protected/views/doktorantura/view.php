<?php
/* @var $this DoktoranturaController */
/* @var $model Doktorantura */

$this->breadcrumbs=array(
	'Doktoranturas'=>array('index'),
	$model->id_dok,
);

$this->menu=array(
	array('label'=>'List Doktorantura', 'url'=>array('index')),
	array('label'=>'Create Doktorantura', 'url'=>array('create')),
	array('label'=>'Update Doktorantura', 'url'=>array('update', 'id'=>$model->id_dok)),
	array('label'=>'Delete Doktorantura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dok),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Doktorantura', 'url'=>array('admin')),
);
?>

<h1>View Doktorantura #<?php echo $model->id_dok; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_dok',
		'shifr',
		'tj_ilm',
		'ru_ilm',
		'en_ilm',
	),
)); ?>
