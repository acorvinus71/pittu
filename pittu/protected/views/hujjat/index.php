<?php
/* @var $this HujjatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hujjats',
);

$this->menu=array(
	array('label'=>'Create Hujjat', 'url'=>array('create')),
	array('label'=>'Manage Hujjat', 'url'=>array('admin')),
);
?>

<h1>Hujjats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
