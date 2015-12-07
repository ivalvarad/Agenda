<div class="alarms index">
	<h2><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> &nbsp; Alarmas</h2>
	<table class="table" cellpadding="0" cellspacing="0" border="1">
		<thead>
			<tr>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('id'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('state'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('date'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('sound_id'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('event_id'); ?></th>
				<th class="actions" style="text-align: center;"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($alarms as $alarm): ?>
				<tr>
					<td><?php echo h($alarm['Alarm']['id']); ?>&nbsp;</td>
					<td><?php echo h($alarm['Alarm']['state']); ?>&nbsp;</td>
					<td><?php echo h($alarm['Alarm']['date']); ?>&nbsp;</td>
					<td><?php echo h($alarm['Alarm']['sound_id']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($alarm['Event']['id'], array('controller' => 'events', 'action' => 'view', $alarm['Event']['id'])); ?>
					</td>
					<td class="actions" style="text-align: center;">
						<div class="btn-group" role="group" aria-label="...">
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<?php echo $this->Html->link(__('View'), array('action' => 'view', $alarm['Alarm']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alarm['Alarm']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alarm['Alarm']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $alarm['Alarm']['id']))); ?>
								</button>
							</div>
						</div>			
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p style="text-align: center;">
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('Página {:page} de {:pages}, mostrando {:current} usuarios de {:count} en total, empezando en {:start} y terminando en {:end}')
			));
			?>	</p>
			<div class="paging">
				<div class="paging" style="text-align: center;">
					<nav>
						<ul class="pager">
							<li>
								<?php 
								echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
								?>
							</li>
							<li>
								<?php 
								echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
								?>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="actions">
			<div class="panel panel-default" style="width: 30%;">
				<div class="panel-heading">
					<h3>Acciones</h3>
				</div>
				<div class="panel-body">
					<ul>
						<li><?php echo $this->Html->link(__('Agregar Alarma'), array('action' => 'add')); ?></li>
						<li><?php echo $this->Html->link(__('Lista de Eventos'), array('controller' => 'events', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('Nuevo Evento'), array('controller' => 'events', 'action' => 'add')); ?> </li>
					</ul>
				</div>
			</div>

		</div>
		<?php foreach ($alarms as $alarm): ?>
						<?php
						if($this->Time->isToday( $alarm['Alarm']['date'], null)&& $alarm['Alarm']['state']=="Activo"){
						?>

							
							<div class="alert alert-success fade in">
							
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<audio src="<?php echo $this->webroot; ?>files/2.mp3" controls autoplay ="true" hidden > </audio>
								</p>
								<strong>¡Atención!</strong> El evento: "
								
								<?php echo $this->Html->link($alarm['Event']['description'], array('controller' => 'events', 'action' => 'view', $alarm['Event']['id'])); ?>
						
								
								" es hoy.
							</div>
							
							
						<?php	
						}else if($this->Time->isTomorrow( $alarm['Alarm']['date'], null)&& $alarm['Alarm']['state']=="Activo"){
						?>
							<div class="alert alert-danger fade in">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<audio src="<?php echo $this->webroot; ?>files/9.mp3" controls autoplay ="true" hidden > </audio>
								</p>
								<strong>¡Atención!</strong> El evento "
								<?php echo $this->Html->link($alarm['Event']['description'], array('controller' => 'events', 'action' => 'view', $alarm['Event']['id'])); ?>
						
								 " es mañana.
							</div>
						<?php		
						} else {
						?>
							<div class="alert alert-info fade in">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<audio src="<?php echo $this->webroot; ?>files/8.mp3" controls autoplay ="true" hidden > </audio>
								</p>
								<strong>¡Informo!</strong> Es recomendable preparar el evento "
								<?php echo $this->Html->link($alarm['Event']['description'], array('controller' => 'events', 'action' => 'view', $alarm['Event']['id'])); ?>
						
								 ".
							</div>
						
						
						<?php
						}
						?>
		<?php endforeach; ?>							














	