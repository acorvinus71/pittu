<?php
/* @var $this StrukturaController */
/* @var $model Struktura */

$this->breadcrumbs=array(
	'Strukturas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Struktura', 'url'=>array('index')),
	array('label'=>'Manage Struktura', 'url'=>array('admin')),
);
?>

<h1>Create Struktura</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>