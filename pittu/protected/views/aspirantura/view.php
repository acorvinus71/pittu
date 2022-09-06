<?php
/* @var $this AspiranturaController */
/* @var $model Aspirantura */

$this->breadcrumbs=array(
	'Aspiranturas'=>array('index'),
	$model->id_asp,
);

$this->menu=array(
	array('label'=>'List Aspirantura', 'url'=>array('index')),
	array('label'=>'Create Aspirantura', 'url'=>array('create')),
	array('label'=>'Update Aspirantura', 'url'=>array('update', 'id'=>$model->id_asp)),
	array('label'=>'Delete Aspirantura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_asp),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Aspirantura', 'url'=>array('admin')),
);
?>

<h1>View Aspirantura #<?php echo $model->id_asp; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_asp',
		'shifr',
		'tj_ilm',
		'ru_ilm',
		'en_ilm',
	),
)); ?>
