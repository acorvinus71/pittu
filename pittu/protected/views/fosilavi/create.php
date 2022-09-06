<?php
/* @var $this FosilaviController */
/* @var $model Fosilavi */

$this->breadcrumbs=array(
	'Fosilavis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fosilavi', 'url'=>array('index')),
	array('label'=>'Manage Fosilavi', 'url'=>array('admin')),
);
?>

<h1>Create Fosilavi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>