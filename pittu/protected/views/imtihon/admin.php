<?php
/* @var $this ImtihonController */
/* @var $model Imtihon */

$this->breadcrumbs=array(
	'Imtihons'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Imtihon', 'url'=>array('index')),
	array('label'=>'Create Imtihon', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#imtihon-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Imtihons</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'imtihon-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_imtihon',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_text',
		'ru_text',
		/*
		'en_text',
		'img',
		'tj_inf',
		'ru_inf',
		'en_inf',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
