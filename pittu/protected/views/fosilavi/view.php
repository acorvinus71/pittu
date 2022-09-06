<?php
/* @var $this FosilaviController */
/* @var $model Fosilavi */

$this->breadcrumbs=array(
	'Fosilavis'=>array('index'),
	$model->id_fosilavi,
);

$this->menu=array(
	array('label'=>'List Fosilavi', 'url'=>array('index')),
	array('label'=>'Create Fosilavi', 'url'=>array('create')),
	array('label'=>'Update Fosilavi', 'url'=>array('update', 'id'=>$model->id_fosilavi)),
	array('label'=>'Delete Fosilavi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_fosilavi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fosilavi', 'url'=>array('admin')),
);
?>

<h1>View Fosilavi #<?php echo $model->id_fosilavi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_fosilavi',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_text',
		'ru_text',
		'en_text',
	),
)); ?>
