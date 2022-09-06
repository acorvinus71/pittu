<?php
/* @var $this DurnamoiController */
/* @var $model Durnamoi */

$this->breadcrumbs=array(
	'Durnamois'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Durnamoi', 'url'=>array('index')),
	array('label'=>'Manage Durnamoi', 'url'=>array('admin')),
);
?>

<h1>Create Durnamoi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>