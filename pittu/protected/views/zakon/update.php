<?php
/* @var $this ZakonController */
/* @var $model Zakon */

$this->breadcrumbs=array(
	'Zakons'=>array('index'),
	$model->id_zakon=>array('view','id'=>$model->id_zakon),
	'Update',
);

$this->menu=array(
	array('label'=>'List Zakon', 'url'=>array('index')),
	array('label'=>'Create Zakon', 'url'=>array('create')),
	array('label'=>'View Zakon', 'url'=>array('view', 'id'=>$model->id_zakon)),
	array('label'=>'Manage Zakon', 'url'=>array('admin')),
);
?>

<h1>Update Zakon <?php echo $model->id_zakon; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>