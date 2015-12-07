
<div class="events index">

	<h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> &nbsp; Agenda</h2>
	<table class="table" cellpadding="0" cellspacing="0" border="1">
	<thead>
	</thead>
	<tbody>
	
	</tbody>
	</table>
	<p>
	<?php /*
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	)); */
	?>	</p>

</div>
<div class="actions">
	<h4><span class="glyphicon glyphicon-check" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Crear Evento'), array('action' => 'add')); ?></h4>
</div>
<?php foreach ($events as $event): ?>
						<?php
						if($this->Time->isTomorrow( $event['Event']['startdate'], null)&& $event['Event']['state']=="Activo"){
						?>
						
							
							
							<div class="alert alert-danger fade in">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<audio src="/Agendaapp/files/2.mp3" controls autoplay ="true" hidden > </audio>
								</p>
								<strong>¡Atención!</strong> El evento

								<?php echo $this->Html->link($event['Event']['id'], array('action' => 'view', $event['Event']['id'])); ?>

								es hoy.
							</div>
							
							
						<?php	
						}else if($this->Time->isThisWeek( $event['Event']['startdate'], null)&& $event['Event']['state']=="Activo"){
						?>
							<div class="alert alert-warning fade in">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<audio src="/Agendaapp/files/9.mp3" controls autoplay ="true" hidden > </audio>
								</p>
								<strong>¡Atención!</strong> El evento
								<?php echo $this->Html->link($event['Event']['id'], array('action' => 'view', $event['Event']['id'])); ?>

								es mañana.
							</div>
						<?php		
						} else {
						?>
							<div class="alert alert-info fade in">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<audio src="/Agendaapp/files/8.mp3" controls autoplay ="true" hidden > </audio>
								</p>
								<strong>¡Informo!</strong> Es recomendable preparar el evento
								<?php echo $this->Html->link($event['Event']['id'], array('action' => 'view', $event['Event']['id'])); ?>

								.
							</div>
						
						
						<?php
						}
						?>
<?php endforeach; ?>			


		