<?php
/* @var $this PriemController */
/* @var $model Priem */

$this->breadcrumbs=array(
	'Priems'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Priem', 'url'=>array('index')),
	array('label'=>'Manage Priem', 'url'=>array('admin')),
);
?>

<h1>Create Priem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>