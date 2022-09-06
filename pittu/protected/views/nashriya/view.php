<?php
/* @var $this NashriyaController */
/* @var $model Nashriya */

$this->breadcrumbs=array(
	'Nashriyas'=>array('index'),
	$model->id_nash,
);

$this->menu=array(
	array('label'=>'List Nashriya', 'url'=>array('index')),
	array('label'=>'Create Nashriya', 'url'=>array('create')),
	array('label'=>'Update Nashriya', 'url'=>array('update', 'id'=>$model->id_nash)),
	array('label'=>'Delete Nashriya', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_nash),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nashriya', 'url'=>array('admin')),
);
?>

<h1>View Nashriya #<?php echo $model->id_nash; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_nash',
		'img',
	),
)); ?>
