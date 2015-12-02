<div class="alarms view">
<h2><?php echo __('Alarm'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($alarm['Alarm']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($alarm['Alarm']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($alarm['Alarm']['date']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Sound'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alarm['Sound']['id'], array('controller' => 'sounds', 'action' => 'view', $alarm['Sound']['id'])); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alarm['Event']['id'], array('controller' => 'events', 'action' => 'view', $alarm['Event']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alarm'), array('action' => 'edit', $alarm['Alarm']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Alarm'), array('action' => 'delete', $alarm['Alarm']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $alarm['Alarm']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Alarms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alarm'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
