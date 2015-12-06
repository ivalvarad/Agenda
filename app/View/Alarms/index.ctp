<br><br><br><br><br><br><br>
<div class="alarms index">
	<h2><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> &nbsp; Alarmas</h2>
	<table class="table" cellpadding="0" cellspacing="0" border="1">
		<thead>
			
		</thead>
		<tbody>
			<?php foreach ($alarms as $alarm): ?>
						<?php
				if($this->Time->isThisWeek( $alarm['Alarm']['date'], null)&& $alarm['Alarm']['state_id']==1){
						?>
						
							
							
							<div class="alert alert-info fade in">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<audio src="/Agendaapp/files/<?php echo ($alarm['Alarm']['sound_id']); ?>.mp3" controls autoplay ="true" hidden > </audio>
								</p>
								<strong>¡Atención!</strong> El evento
								<?php echo $this->Html->link($alarm['Event']['id'], array('controller' => 'events', 'action' => 'view', $alarm['Event']['id'])); ?>

								ocurre esta semana.
							</div>
							
							
						<?php	
						}else{
						?>
							
						<?php		
						}
						?>
			<?php endforeach; ?>
		</tbody>
	</table>


		</div>


		</div>
		
		
					
