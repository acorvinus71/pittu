<?php
/* @var $this UstavController */
/* @var $model Ustav */

$this->breadcrumbs=array(
	'Ustavs'=>array('index'),
	$model->id_ustav,
);

$this->menu=array(
	array('label'=>'List Ustav', 'url'=>array('index')),
	array('label'=>'Create Ustav', 'url'=>array('create')),
	array('label'=>'Update Ustav', 'url'=>array('update', 'id'=>$model->id_ustav)),
	array('label'=>'Delete Ustav', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ustav),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ustav', 'url'=>array('admin')),
);
?>

<h1>View Ustav #<?php echo $model->id_ustav; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ustav',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_info',
		'ru_info',
		'en_info',
		'tj_ustavinfo',
		'ru_ustavinfo',
		'en_ustavinfo',
	),
)); ?>
