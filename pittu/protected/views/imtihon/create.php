<?php
/* @var $this ImtihonController */
/* @var $model Imtihon */

$this->breadcrumbs=array(
	'Imtihons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Imtihon', 'url'=>array('index')),
	array('label'=>'Manage Imtihon', 'url'=>array('admin')),
);
?>

<h1>Create Imtihon</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>