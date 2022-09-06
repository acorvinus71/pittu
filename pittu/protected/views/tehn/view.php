<?php
/* @var $this TehnController */
/* @var $model Tehn */

$this->breadcrumbs=array(
	'Tehns'=>array('index'),
	$model->id_tehn,
);

$this->menu=array(
	array('label'=>'List Tehn', 'url'=>array('index')),
	array('label'=>'Create Tehn', 'url'=>array('create')),
	array('label'=>'Update Tehn', 'url'=>array('update', 'id'=>$model->id_tehn)),
	array('label'=>'Delete Tehn', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tehn),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tehn', 'url'=>array('admin')),
);
?>

<h1>View Tehn #<?php echo $model->id_tehn; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tehn',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_text1',
		'ru_text1',
		'en_text1',
		'img1',
		'tj_text2',
		'ru_text2',
		'en_text2',
		'img2',
		'tj_text3',
		'ru_text3',
		'en_text3',
		'img3',
		'tj_text4',
		'ru_text4',
		'en_text4',
		'img4',
		'tj_text5',
		'ru_text5',
		'en_text5',
	),
)); ?>
