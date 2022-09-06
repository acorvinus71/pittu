<?php
/* @var $this ZakonController */
/* @var $model Zakon */

$this->breadcrumbs=array(
	'Zakons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Zakon', 'url'=>array('index')),
	array('label'=>'Manage Zakon', 'url'=>array('admin')),
);
?>

<h1>Create Zakon</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>