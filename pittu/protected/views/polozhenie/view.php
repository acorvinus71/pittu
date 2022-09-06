<?php
/* @var $this PolozhenieController */
/* @var $model Polozhenie */

$this->breadcrumbs=array(
	'Polozhenies'=>array('index'),
	$model->id_polozhenie,
);

$this->menu=array(
	array('label'=>'List Polozhenie', 'url'=>array('index')),
	array('label'=>'Create Polozhenie', 'url'=>array('create')),
	array('label'=>'Update Polozhenie', 'url'=>array('update', 'id'=>$model->id_polozhenie)),
	array('label'=>'Delete Polozhenie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_polozhenie),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Polozhenie', 'url'=>array('admin')),
);
?>

<h1>View Polozhenie #<?php echo $model->id_polozhenie; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_polozhenie',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_info',
		'ru_info',
		'en_info',
	),
)); ?>
