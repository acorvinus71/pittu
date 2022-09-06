<?php
/* @var $this NashriyaController */
/* @var $data Nashriya */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_nash')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_nash), array('view', 'id'=>$data->id_nash)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img')); ?>:</b>
	<?php echo CHtml::encode($data->img); ?>
	<br />


</div>