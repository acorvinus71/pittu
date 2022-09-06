<?php
/* @var $this TarihController */
/* @var $model Tarih */

$this->breadcrumbs=array(
	'Tarihs'=>array('index'),
	$model->id_tarih=>array('view','id'=>$model->id_tarih),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tarih', 'url'=>array('index')),
	array('label'=>'Create Tarih', 'url'=>array('create')),
	array('label'=>'View Tarih', 'url'=>array('view', 'id'=>$model->id_tarih)),
	array('label'=>'Manage Tarih', 'url'=>array('admin')),
);
?>

<h1>Update Tarih <?php echo $model->id_tarih; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>