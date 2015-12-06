<br><br><br><br><br><br><br>
<div class="events index">

	<h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> &nbsp; Agenda</h2>
	<table class="table" cellpadding="0" cellspacing="0" border="1">
	<thead>
	<tr>
			<th style="text-align: center;"><?php echo $this->Paginator->sort('startdate'); ?></th>
			<th style="text-align: center;"><?php echo $this->Paginator->sort('enddate'); ?></th>
			<th style="text-align: center;"><?php echo $this->Paginator->sort('description'); ?></th>
			<th style="text-align: center;"><?php echo $this->Paginator->sort('state'); ?></th>
			<th style="text-align: center;"><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th style="text-align: center;"><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th style="text-align: center;"><?php echo $this->Paginator->sort('priority_id'); ?></th>
			<th style="text-align: center;" class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($events as $event): ?>
	<tr>
		<td><?php echo h($event['Event']['startdate']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['enddate']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['description']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['state']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['category_id']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['priority_id']); ?>&nbsp;</td>
		<td class="actions" style="text-align: center;">
			<div class="btn-group" role="group" aria-label="...">
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $event['Event']['id'])); ?>
					</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default">
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $event['Event']['id'])); ?>
					</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default">
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $event['Event']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $event['Event']['id']))); ?>
					</button>
				</div>
			</div>	
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
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






