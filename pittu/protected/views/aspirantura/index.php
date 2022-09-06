<?php
/* @var $this AspiranturaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Aspiranturas',
);

$this->menu=array(
	array('label'=>'Create Aspirantura', 'url'=>array('create')),
	array('label'=>'Manage Aspirantura', 'url'=>array('admin')),
);
?>

<h1>Aspiranturas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
