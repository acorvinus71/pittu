<?php
/* @var $this BarnomaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Barnomas',
);

$this->menu=array(
	array('label'=>'Create Barnoma', 'url'=>array('create')),
	array('label'=>'Manage Barnoma', 'url'=>array('admin')),
);
?>

<h1>Barnomas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
