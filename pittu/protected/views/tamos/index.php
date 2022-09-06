<?php
/* @var $this TamosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tamoses',
);

$this->menu=array(
	array('label'=>'Create Tamos', 'url'=>array('create')),
	array('label'=>'Manage Tamos', 'url'=>array('admin')),
);
?>

<h1>Tamoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
