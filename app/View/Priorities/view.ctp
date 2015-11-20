<div class="priorities view">
<h2><?php echo __('Priority'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($priority['Priority']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($priority['Priority']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($priority['Priority']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Priority'), array('action' => 'edit', $priority['Priority']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Priority'), array('action' => 'delete', $priority['Priority']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $priority['Priority']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Priorities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Priority'), array('action' => 'add')); ?> </li>
	</ul>
</div>
