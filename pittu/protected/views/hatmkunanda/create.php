<?php
/* @var $this HatmkunandaController */
/* @var $model Hatmkunanda */

$this->breadcrumbs=array(
	'Hatmkunandas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hatmkunanda', 'url'=>array('index')),
	array('label'=>'Manage Hatmkunanda', 'url'=>array('admin')),
);
?>

<h1>Create Hatmkunanda</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>