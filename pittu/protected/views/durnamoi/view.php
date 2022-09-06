<?php
/* @var $this DurnamoiController */
/* @var $model Durnamoi */

$this->breadcrumbs=array(
	'Durnamois'=>array('index'),
	$model->id_durnamoi,
);

$this->menu=array(
	array('label'=>'List Durnamoi', 'url'=>array('index')),
	array('label'=>'Create Durnamoi', 'url'=>array('create')),
	array('label'=>'Update Durnamoi', 'url'=>array('update', 'id'=>$model->id_durnamoi)),
	array('label'=>'Delete Durnamoi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_durnamoi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Durnamoi', 'url'=>array('admin')),
);
?>

<h1>View Durnamoi #<?php echo $model->id_durnamoi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_durnamoi',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_info',
		'ru_info',
		'en_info',
	),
)); ?>
