<?php
/* @var $this MunTamosController */
/* @var $model MunTamos */

$this->breadcrumbs=array(
	'Mun Tamoses'=>array('index'),
	$model->id_tam,
);

$this->menu=array(
	array('label'=>'List MunTamos', 'url'=>array('index')),
	array('label'=>'Create MunTamos', 'url'=>array('create')),
	array('label'=>'Update MunTamos', 'url'=>array('update', 'id'=>$model->id_tam)),
	array('label'=>'Delete MunTamos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tam),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MunTamos', 'url'=>array('admin')),
);
?>

<h1>View MunTamos #<?php echo $model->id_tam; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tam',
		'nom',
		'idora',
		'email',
		'tel',
		'dop',
	),
)); ?>
