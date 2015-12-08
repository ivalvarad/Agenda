<div class="container">
	<div class="users form">
		<div class="row">
			<div class="col-md-4">
			<?php echo $this->Form->create('User', array('type' => 'file')); ?>
				<fieldset>
					<legend><?php echo __('Registro de usuario'); ?></legend>
				<?php
					echo $this->Form->input('id', array('type' => 'hidden'));
					echo $this->Form->input('name', array('label'=>'Nombre','class' => 'form-control'));
					echo $this->Form->input('lastname', array('label'=>'Apellido(s)','class' => 'form-control'));
					echo $this->Form->input('username', array('label'=>'Nombre de usuario','class' => 'form-control'));
					echo $this->Form->input('password', array('label'=>'Contraseña','class' => 'form-control'));
					echo $this->Form->input('password_confirm', array('type' => 'password', 'label'=>'Confirmar contraseña','class' => 'form-control'));
					echo $this->Form->input('email', array('label'=>'Correo','class' => 'form-control'));
					//echo $this->Form->input('picture','class' => 'form-control');
					echo $this->Form->input('archivo', array('type' => 'file', 'label'=>'Fotografía:','class' => 'form-control'));
					echo $this->Form->input('message', array('label'=>'Mensaje personal','class' => 'form-control'));
					echo $this->Form->input('timezone', array('label'=>'Zona horaria','class' => 'form-control'));
				?>
				</fieldset>
			<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-info')); ?>
			</div>
		</div>
	</div>
</div>