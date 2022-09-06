<?php
/* @var $this MtamosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mtamoses',
);

$this->menu=array(
	array('label'=>'Create Mtamos', 'url'=>array('create')),
	array('label'=>'Manage Mtamos', 'url'=>array('admin')),
);
?>

<h1>Mtamoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
