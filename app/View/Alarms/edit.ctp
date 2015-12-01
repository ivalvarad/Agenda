<div class="alarms form">
<?php echo $this->Form->create('Alarm'); ?>
	<fieldset>
		<legend><?php echo __('Edit Alarm'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('state');
		echo $this->Form->input('date');
		echo $this->Form->input('sound_id');
		echo $this->Form->input('event_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Alarm.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Alarm.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Alarms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
