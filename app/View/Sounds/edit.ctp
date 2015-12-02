<div class="sounds form">
<?php echo $this->Form->create('Sound'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sound'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sound');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sound.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Sound.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Sounds'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Alarms'), array('controller' => 'alarms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alarm'), array('controller' => 'alarms', 'action' => 'add')); ?> </li>
	</ul>
</div>
