<?php
/* @var $this OtzivController */
/* @var $model Otziv */

$this->breadcrumbs=array(
	'Otzivs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Otziv', 'url'=>array('index')),
	array('label'=>'Create Otziv', 'url'=>array('create')),
	array('label'=>'Update Otziv', 'url'=>array('update', 'id'=>$model->id_otziv)),
	array('label'=>'Delete Otziv', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_otziv),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Otziv', 'url'=>array('admin')),
);
?>

<h1>View Otziv #<?php echo $model->id_otziv; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_otziv',
		'name',
		'email',
		'subject',
		'body',
		'date',
	),
)); ?>
