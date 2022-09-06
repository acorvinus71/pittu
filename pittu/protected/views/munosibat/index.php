<?php
/* @var $this MunosibatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Munosibats',
);

$this->menu=array(
	array('label'=>'Create Munosibat', 'url'=>array('create')),
	array('label'=>'Manage Munosibat', 'url'=>array('admin')),
);
?>

<h1>Munosibats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
