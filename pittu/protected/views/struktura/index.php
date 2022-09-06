<?php
/* @var $this StrukturaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Strukturas',
);

$this->menu=array(
	array('label'=>'Create Struktura', 'url'=>array('create')),
	array('label'=>'Manage Struktura', 'url'=>array('admin')),
);
?>

<h1>Strukturas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
