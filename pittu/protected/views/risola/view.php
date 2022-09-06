<?php
/* @var $this RisolaController */
/* @var $model Risola */

$this->breadcrumbs=array(
	'Risolas'=>array('index'),
	$model->id_risola,
);

$this->menu=array(
	array('label'=>'List Risola', 'url'=>array('index')),
	array('label'=>'Create Risola', 'url'=>array('create')),
	array('label'=>'Update Risola', 'url'=>array('update', 'id'=>$model->id_risola)),
	array('label'=>'Delete Risola', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_risola),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Risola', 'url'=>array('admin')),
);
?>

<h1>View Risola #<?php echo $model->id_risola; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_risola',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_info',
		'ru_info',
		'en_info',
	),
)); ?>
