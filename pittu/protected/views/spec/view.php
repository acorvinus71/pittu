<?php
/* @var $this SpecController */
/* @var $model Spec */

$this->breadcrumbs=array(
	'Specs'=>array('index'),
	$model->id_pravila,
);

$this->menu=array(
	array('label'=>'List Spec', 'url'=>array('index')),
	array('label'=>'Create Spec', 'url'=>array('create')),
	array('label'=>'Update Spec', 'url'=>array('update', 'id'=>$model->id_pravila)),
	array('label'=>'Delete Spec', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pravila),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Spec', 'url'=>array('admin')),
);
?>

<h1>View Spec #<?php echo $model->id_pravila; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pravila',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_text',
		'ru_text',
		'en_text',
	),
)); ?>
