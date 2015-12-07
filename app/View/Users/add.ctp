<div class="users form">
<?php echo $this->Form->create('User', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Registro de usuario'); ?></legend>
	<?php
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->input('name', array('label'=>'Nombre'));
		echo $this->Form->input('lastname', array('label'=>'Apellido(s)'));
		echo $this->Form->input('username', array('label'=>'Nombre de usuario'));
		echo $this->Form->input('password', array('label'=>'Contraseña'));
		echo $this->Form->input('password_confirm', array('type' => 'password', 'label'=>'Confirmar contraseña'));
		echo $this->Form->input('email', array('label'=>'Correo'));
		//echo $this->Form->input('picture');
		echo $this->Form->input('archivo', array('type' => 'file', 'label'=>'Fotografía:'));
		echo $this->Form->input('message', array('label'=>'Mensaje personal'));
		echo $this->Form->input('timezone', array('label'=>'Zona horaria'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>