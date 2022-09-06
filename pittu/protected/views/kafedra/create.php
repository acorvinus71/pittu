<?php
/* @var $this KafedraController */
/* @var $model Kafedra */

$this->breadcrumbs=array(
	'Kafedras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kafedra', 'url'=>array('index')),
	array('label'=>'Manage Kafedra', 'url'=>array('admin')),
);
?>

<h1>Create Kafedra</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>