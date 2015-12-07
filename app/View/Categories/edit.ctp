<br><br><br><br><br><br><br>
<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Editar Categoría'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label'=>'Nombre'));
		echo $this->Form->input('description', array('label'=>'Descripción'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Category.id')), array('confirm' => __('Está segur@ de que desea eliminar la categoría?'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Categorías'), array('action' => 'index')); ?></li>
	</ul>
</div>
