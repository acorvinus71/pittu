<?php
/* @var $this HujjatController */
/* @var $model Hujjat */

$this->breadcrumbs=array(
	'Hujjats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hujjat', 'url'=>array('index')),
	array('label'=>'Manage Hujjat', 'url'=>array('admin')),
);
?>

<h1>Create Hujjat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>