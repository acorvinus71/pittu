<?php
/* @var $this TamosController */
/* @var $model Tamos */

$this->breadcrumbs=array(
	'Tamoses'=>array('index'),
	$model->id_tamos,
);

$this->menu=array(
	array('label'=>'List Tamos', 'url'=>array('index')),
	array('label'=>'Create Tamos', 'url'=>array('create')),
	array('label'=>'Update Tamos', 'url'=>array('update', 'id'=>$model->id_tamos)),
	array('label'=>'Delete Tamos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tamos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tamos', 'url'=>array('admin')),
);
?>

<h1>View Tamos #<?php echo $model->id_tamos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tamos',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'img',
		'tj_text',
		'ru_text',
		'en_text',
		'tj_zag',
		'ru_zag',
		'en_zag',
		'tj_info',
		'ru_info',
		'en_info',
	),
)); ?>
