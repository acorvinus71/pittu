<?php
/* @var $this HujjatController */
/* @var $data Hujjat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_huj')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_huj), array('view', 'id'=>$data->id_huj)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img')); ?>:</b>
	<?php echo CHtml::encode($data->img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_text')); ?>:</b>
	<?php echo CHtml::encode($data->tj_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_text')); ?>:</b>
	<?php echo CHtml::encode($data->ru_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_text')); ?>:</b>
	<?php echo CHtml::encode($data->en_text); ?>
	<br />


</div>