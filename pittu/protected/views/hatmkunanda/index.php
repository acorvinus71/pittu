<?php
/* @var $this HatmkunandaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hatmkunandas',
);

$this->menu=array(
	array('label'=>'Create Hatmkunanda', 'url'=>array('create')),
	array('label'=>'Manage Hatmkunanda', 'url'=>array('admin')),
);
?>

<h1>Hatmkunandas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
