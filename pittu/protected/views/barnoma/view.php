<?php
/* @var $this BarnomaController */
/* @var $model Barnoma */

$this->breadcrumbs=array(
	'Barnomas'=>array('index'),
	$model->id_bar,
);

$this->menu=array(
	array('label'=>'List Barnoma', 'url'=>array('index')),
	array('label'=>'Create Barnoma', 'url'=>array('create')),
	array('label'=>'Update Barnoma', 'url'=>array('update', 'id'=>$model->id_bar)),
	array('label'=>'Delete Barnoma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_bar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Barnoma', 'url'=>array('admin')),
);
?>

<h1>View Barnoma #<?php echo $model->id_bar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_bar',
		'nom',
		'adres',
		'img',
	),
)); ?>
