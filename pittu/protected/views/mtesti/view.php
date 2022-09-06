<?php
/* @var $this MtestiController */
/* @var $model Mtesti */

$this->breadcrumbs=array(
	'Mtestis'=>array('index'),
	$model->id_mtesti,
);

$this->menu=array(
	array('label'=>'List Mtesti', 'url'=>array('index')),
	array('label'=>'Create Mtesti', 'url'=>array('create')),
	array('label'=>'Update Mtesti', 'url'=>array('update', 'id'=>$model->id_mtesti)),
	array('label'=>'Delete Mtesti', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mtesti),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mtesti', 'url'=>array('admin')),
);
?>

<h1>View Mtesti #<?php echo $model->id_mtesti; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_mtesti',
		'mtesti',
		'maksad',
		'ahborot',
		'doc',
		'soxt',
		'vazifa',
		'jadval',
	),
)); ?>
