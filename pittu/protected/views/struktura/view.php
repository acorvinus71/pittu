<?php
/* @var $this StrukturaController */
/* @var $model Struktura */

$this->breadcrumbs=array(
	'Strukturas'=>array('index'),
	$model->id_struktura,
);

$this->menu=array(
	array('label'=>'List Struktura', 'url'=>array('index')),
	array('label'=>'Create Struktura', 'url'=>array('create')),
	array('label'=>'Update Struktura', 'url'=>array('update', 'id'=>$model->id_struktura)),
	array('label'=>'Delete Struktura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_struktura),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Struktura', 'url'=>array('admin')),
);
?>

<h1>View Struktura #<?php echo $model->id_struktura; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_struktura',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'img',
	),
)); ?>
