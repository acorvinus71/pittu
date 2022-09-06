<?php
/* @var $this ZakonController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Zakons',
);

$this->menu=array(
	array('label'=>'Create Zakon', 'url'=>array('create')),
	array('label'=>'Manage Zakon', 'url'=>array('admin')),
);
?>

<h1>Zakons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
