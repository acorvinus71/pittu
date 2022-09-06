<?php
/* @var $this MagistraturaController */
/* @var $model Magistratura */

$this->breadcrumbs=array(
	'Magistraturas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Magistratura', 'url'=>array('index')),
	array('label'=>'Create Magistratura', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#magistratura-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Magistraturas</h1>

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
	'id'=>'magistratura-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_mag',
		'tj_ixtisos',
		'tj_ruzona',
		'tj_goibona',
		'tj_bujavi',
		'tj_shartnomavi',
		/*
		'ru_ixtisos',
		'ru_ruzona',
		'ru_goibona',
		'ru_bujavi',
		'ru_shartnomavi',
		'en_ixtisos',
		'en_ruzona',
		'en_goibona',
		'en_bujavi',
		'en_shartnomavi',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
