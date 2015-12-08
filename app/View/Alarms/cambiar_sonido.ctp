<div class="alarms index">
	<h2><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> &nbsp; Alarmas</h2>
	<br/>
	<div class="actions">
		<h5><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Agregar Alarma'), array('action' => 'add')); ?></h5>
		<h5><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Agregar Evento'), array('controller' => 'events', 'action' => 'add')); ?></h5>
	</div>
	
	<table class="table" cellpadding="0" cellspacing="0" border="1">
		<thead>
			<tr>

				<th style="text-align: center;"><?php echo $this->Paginator->sort('Estado'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Fecha'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Evento'); ?></th>

				<th class="actions" style="text-align: center;"><?php echo __('Vista previa'); ?></th>
				<th class="actions" style="text-align: center;"><?php echo __('Acciones'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($alarms as $alarm): ?>
				<tr>
					<?php 
						//debug($users);
						$pe = false;
						foreach($users as $user):
							foreach($evts as $evt):
								if ( ($user['User']['id'] == $evt['Event']['user_id']) && 
									 ($alarm['Alarm']['event_id'] == $evt['Event']['id']) && 
									 ($user['User']['username'] == $this->Session->read('Auth.User.User.username'))
								   )
								{
										$pe = true;
								}
							endforeach;
						endforeach;
						//if($user['User']['username'] === $this->Session->read('Auth.User.User.username')) { 
						if($pe === true){
					?>

					<td><?php echo h($alarm['Alarm']['state']); ?>&nbsp;</td>


					<td><?php echo h($alarm['Alarm']['date']); ?>&nbsp;</td>
					
					<td>
						<?php echo $this->Html->link($alarm['Event']['id'], array('controller' => 'events', 'action' => 'view', $alarm['Event']['id'])); ?>
					</td>
					<td>

						
						<audio src="<?php echo $this->webroot; ?>files/<?php echo ($alarm['Alarm']['sound_id']); ?>.mp3" controls > </audio>
						
					</td>

					<td class="actions" style="text-align: center;">
						<div class="btn-group" role="group" aria-label="...">

							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-music" aria-hidden="true"></span>
									<?php echo $this->Html->link(__('Cambiar sonido'), array('action' => 'cambio', $alarm['Alarm']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $alarm['Alarm']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $alarm['Alarm']['id'] ))); ?>
								</button>
							</div>
						</div>			
					</td>
				</tr>
				<?php } ?>
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
		
		
		
		
		
		
		
		
		
		
		
