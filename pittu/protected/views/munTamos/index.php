<?php
/* @var $this MunTamosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mun Tamoses',
);

$this->menu=array(
	array('label'=>'Create MunTamos', 'url'=>array('create')),
	array('label'=>'Manage MunTamos', 'url'=>array('admin')),
);
?>

<h1>Mun Tamoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
