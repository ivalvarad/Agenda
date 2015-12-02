<div class="sounds index">
	<h2><?php echo __('Sounds'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sound'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($sounds as $sound): ?>
	<tr>
		<td><?php echo h($sound['Sound']['id']); ?>&nbsp;</td>
		<td><?php echo h($sound['Sound']['sound']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sound['Sound']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sound['Sound']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sound['Sound']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $sound['Sound']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sound'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alarms'), array('controller' => 'alarms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alarm'), array('controller' => 'alarms', 'action' => 'add')); ?> </li>
	</ul>
</div>
