<br><br><br><br><br><br><br>
<div class="categories view">
<h2><?php echo __('Categoría'); ?></h2>
	<dl>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripción'); ?></dt>
		<dd>
			<?php echo h($category['Category']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Categoría'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Categoría'), array('action' => 'delete', $category['Category']['id']), array('confirm' => __('Está segur@ de que desea eliminar la categoría?'))); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Categorías'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Categoría'), array('action' => 'add')); ?> </li>
	</ul>
</div>
