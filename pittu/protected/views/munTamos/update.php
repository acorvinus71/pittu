<?php
/* @var $this MunTamosController */
/* @var $model MunTamos */

$this->breadcrumbs=array(
	'Mun Tamoses'=>array('index'),
	$model->id_tam=>array('view','id'=>$model->id_tam),
	'Update',
);

$this->menu=array(
	array('label'=>'List MunTamos', 'url'=>array('index')),
	array('label'=>'Create MunTamos', 'url'=>array('create')),
	array('label'=>'View MunTamos', 'url'=>array('view', 'id'=>$model->id_tam)),
	array('label'=>'Manage MunTamos', 'url'=>array('admin')),
);
?>

<h1>Update MunTamos <?php echo $model->id_tam; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>