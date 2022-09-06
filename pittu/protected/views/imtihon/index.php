<?php
/* @var $this ImtihonController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Imtihons',
);

$this->menu=array(
	array('label'=>'Create Imtihon', 'url'=>array('create')),
	array('label'=>'Manage Imtihon', 'url'=>array('admin')),
);
?>

<h1>Imtihons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
