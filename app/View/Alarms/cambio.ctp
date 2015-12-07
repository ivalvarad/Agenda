
<br><br><br><br><br><br><br>
<div class="alarms form">
<?php echo $this->Form->create('Alarm'); ?>
	<fieldset>
		<legend><?php echo __('Edit Alarm'); ?></legend>
	<?php
		 echo $this->Form->input('id');
		 $estados = array('Activo' => 'Activo', 'Pausado' => 'Pausado');
			echo $this->Form->input('state', array('type' => 'select', 'options' => $estados, 'label'=>'Estado'));
		$this->Form->input('date');
		echo $this->Form->input('sound_id');
		 $this->Form->input('event_id');
	?>
	

	</fieldset>


<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

	
	
			<?php foreach ($sounds as $soud): ?>
						
	
						<audio src="/Agendaapp/files/<?php echo ($sound['Sound']['id']); ?>.mp3" controls > </audio>
					
					
	<?php endforeach; ?>
	
		<li><?php echo $this->Html->link(__('Volver'), array('action' => 'cambiar_sonido')); ?></li>

	</ul>
</div>
