<?php
/* @var $this TamosController */
/* @var $model Tamos */

$this->breadcrumbs=array(
	'Tamoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tamos', 'url'=>array('index')),
	array('label'=>'Create Tamos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tamos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tamoses</h1>

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
	'id'=>'tamos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tamos',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'img',
		'tj_text',
		/*
		'ru_text',
		'en_text',
		'tj_zag',
		'ru_zag',
		'en_zag',
		'tj_info',
		'ru_info',
		'en_info',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
