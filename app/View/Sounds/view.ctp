<div class="sounds view">
<h2><?php echo __('Sound'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sound['Sound']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sound'); ?></dt>
		<dd>
			<?php echo h($sound['Sound']['sound']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sound'), array('action' => 'edit', $sound['Sound']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sound'), array('action' => 'delete', $sound['Sound']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $sound['Sound']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Sounds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sound'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alarms'), array('controller' => 'alarms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alarm'), array('controller' => 'alarms', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Alarms'); ?></h3>
	<?php if (!empty($sound['Alarm'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Sound Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sound['Alarm'] as $alarm): ?>
		<tr>
			<td><?php echo $alarm['id']; ?></td>
			<td><?php echo $alarm['state']; ?></td>
			<td><?php echo $alarm['date']; ?></td>
			<td><?php echo $alarm['sound_id']; ?></td>
			<td><?php echo $alarm['event_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'alarms', 'action' => 'view', $alarm['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'alarms', 'action' => 'edit', $alarm['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'alarms', 'action' => 'delete', $alarm['id']), array('confirm' => __('Are you sure you want to delete # %s?', $alarm['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Alarm'), array('controller' => 'alarms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
