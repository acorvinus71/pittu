<?php
/* @var $this DoktoranturaController */
/* @var $model Doktorantura */

$this->breadcrumbs=array(
	'Doktoranturas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Doktorantura', 'url'=>array('index')),
	array('label'=>'Manage Doktorantura', 'url'=>array('admin')),
);
?>

<h1>Create Doktorantura</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>