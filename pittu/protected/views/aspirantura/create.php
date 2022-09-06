<?php
/* @var $this AspiranturaController */
/* @var $model Aspirantura */

$this->breadcrumbs=array(
	'Aspiranturas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Aspirantura', 'url'=>array('index')),
	array('label'=>'Manage Aspirantura', 'url'=>array('admin')),
);
?>

<h1>Create Aspirantura</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>