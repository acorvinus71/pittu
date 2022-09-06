<?php
/* @var $this MailController */
/* @var $data Mail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mail')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mail), array('view', 'id'=>$data->id_mail)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />


</div>