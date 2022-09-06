<?php
/* @var $this DoktoranturaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Doktoranturas',
);

$this->menu=array(
	array('label'=>'Create Doktorantura', 'url'=>array('create')),
	array('label'=>'Manage Doktorantura', 'url'=>array('admin')),
);
?>

<h1>Doktoranturas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
