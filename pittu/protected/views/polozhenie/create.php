<?php
/* @var $this PolozhenieController */
/* @var $model Polozhenie */

$this->breadcrumbs=array(
	'Polozhenies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Polozhenie', 'url'=>array('index')),
	array('label'=>'Manage Polozhenie', 'url'=>array('admin')),
);
?>

<h1>Create Polozhenie</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>