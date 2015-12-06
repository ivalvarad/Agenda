<div class="states form">
<?php echo $this->Form->create('State'); ?>
	<fieldset>
		<legend><?php echo __('Edit State'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('state');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('State.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('State.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List States'), array('action' => 'index')); ?></li>
	</ul>
</div>
