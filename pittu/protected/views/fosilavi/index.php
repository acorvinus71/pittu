<?php
/* @var $this FosilaviController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fosilavis',
);

$this->menu=array(
	array('label'=>'Create Fosilavi', 'url'=>array('create')),
	array('label'=>'Manage Fosilavi', 'url'=>array('admin')),
);
?>

<h1>Fosilavis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
