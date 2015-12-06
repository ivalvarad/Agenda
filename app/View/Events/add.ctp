<br><br><br><br><br><br><br>
<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Add Event'); ?></legend>
	<?php
		echo $this->Form->input('startdate');
		echo $this->Form->input('enddate');
		echo $this->Form->input('description');
		echo $this->Form->input('state');
		echo $this->Form->input('user_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('priority_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
	</ul>
</div>
