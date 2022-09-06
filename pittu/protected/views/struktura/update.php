<?php
/* @var $this StrukturaController */
/* @var $model Struktura */

$this->breadcrumbs=array(
	'Strukturas'=>array('index'),
	$model->id_struktura=>array('view','id'=>$model->id_struktura),
	'Update',
);

$this->menu=array(
	array('label'=>'List Struktura', 'url'=>array('index')),
	array('label'=>'Create Struktura', 'url'=>array('create')),
	array('label'=>'View Struktura', 'url'=>array('view', 'id'=>$model->id_struktura)),
	array('label'=>'Manage Struktura', 'url'=>array('admin')),
);
?>

<h1>Update Struktura <?php echo $model->id_struktura; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>