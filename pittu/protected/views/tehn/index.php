<?php
/* @var $this TehnController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tehns',
);

$this->menu=array(
	array('label'=>'Create Tehn', 'url'=>array('create')),
	array('label'=>'Manage Tehn', 'url'=>array('admin')),
);
?>

<h1>Tehns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
