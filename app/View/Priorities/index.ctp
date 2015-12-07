<br><br><br><br><br><br><br>
<div class="priorities index">
	<h2><?php echo __('Prioridades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($priorities as $priority): ?>
	<tr>
		<td><?php echo h($priority['Priority']['name']); ?>&nbsp;</td>
		<td><?php echo h($priority['Priority']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Expandir'), array('action' => 'view', $priority['Priority']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $priority['Priority']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $priority['Priority']['id']), array('confirm' => __('Está segur@ de que desea eliminar la prioridad?'))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php /*
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	)); */
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Crear Prioridad'), array('action' => 'add')); ?></li>
	</ul>
</div>
