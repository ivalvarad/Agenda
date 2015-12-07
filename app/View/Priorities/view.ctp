<br><br><br><br><br><br><br>
<div class="priorities view">
<h2><?php echo __('Prioridad'); ?></h2>
	<dl>
	<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($priority['Priority']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripción'); ?></dt>
		<dd>
			<?php echo h($priority['Priority']['description']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Prioridad'), array('action' => 'edit', $priority['Priority']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Prioridad'), array('action' => 'delete', $priority['Priority']['id']), array('confirm' => __('Está segur@ de que desea eliminar la prioridad?'))); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Prioridades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear prioridad'), array('action' => 'add')); ?> </li>
	</ul>
</div>
