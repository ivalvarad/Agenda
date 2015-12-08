<!-- Fixed navbar -->
<nav class="navbar navbar-default">
	<div class="container">

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
			<div class="navbar-header">
              <a class="navbar-brand" href="#">
              <?php echo $this->Html->image('OrganizadOSMini.png', array('alt' => 'CakePHP', 'border' => '0', 'data-src' => 'holder.js/50%x50', 'width'=>'60px')); ?>
              </a>
            </div>

			<?php
				//if (isset($_SESSION['usernm'])){ 
				if($this->Session->read('Auth.User.User.username') != null){
			?>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><?php echo $this->Html->link(__('Mi agenda', true), array('controller'=>'events','action' => 'index')); ?></li>
					<!-- <li class="active"><a href="#">Home</a></li> -->
					<li class="active"><?php echo $this->Html->link(__('Avisos', true), array('controller'=>'alarms','action' => 'index')); ?></li>
					<!-- <li class="active"><a href="#">Home</a></li> -->
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorías <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li> <?php echo $this->Html->link('Trabajo',array('controller' => 'events','action' => 'filtro_categoria_trabajo')) ?> </li>
							<li> <?php echo $this->Html->link('Estudio',array('controller' => 'events','action' => 'filtro_categoria_estudio')) ?> </li>
							<li> <?php echo $this->Html->link('Social',array('controller' => 'events','action' => 'filtro_categoria_social')) ?> </li>
						</ul>
					</li>
					<!-- <li class="active"><a href="#">Home</a></li> -->
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prioridades <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li> <?php echo $this->Html->link('Alta',array('controller' => 'events','action' => 'filtro_prioridad_alta')) ?> </li>
							<li> <?php echo $this->Html->link('Media',array('controller' => 'events','action' => 'filtro_prioridad_media')) ?> </li>
							<li> <?php echo $this->Html->link('Baja',array('controller' => 'events','action' => 'filtro_prioridad_baja')) ?> </li>
						</ul>
					</li>
					
					<!-- <li class="active"><a href="#">Home</a></li> -->
					<li><?php echo $this->Html->link(__('Mi perfil', true), array('controller'=>'users','action' => 'index')); ?></li>
					<!-- <li><a href="#about">Mi perfil</a></li> -->
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Personalizar </a></li>
							<li> <?php echo $this->Html->link('Opciones de alarma',array('controller' => 'alarms','action' => 'cambiar_sonido')) ?> </li>
						</ul>
					</li>
					
					<?php
					if($this->Session->read('Auth.User.User.username') != null){
					//if (isset($_SESSION['usernm'])){ 
						?>
						<li><?php echo $this->Html->link(__('Salir de: '.$_SESSION['usernm'], true), array('controller'=>'users','action' => 'logout')); ?></li>
						<?php }
						?>
					</ul>

				</div><!--/.nav-collapse -->
				<?php } ?>

  <!-- </div>
  	 <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
			  <li role="presentation"><?php echo $this->Html->link(__('+ Tarea'), array('controller' => 'events', 'action' => 'add')); ?></li>
			   <li role="presentation"><?php echo $this->Html->link(__('+ Categoría'), array('controller' => 'categories', 'action' => 'add')); ?></li>
			 
            <li role="presentation" class="active"><a href="#">Mis Tareas</a></li>
            <li role="presentation"><a href="#">Mis Categorías</a></li>
            <li role="presentation"><?php echo $this->Html->link(__('Fechas más próximas'), array('controller' => 'alarms', 'action' => 'index')); ?></li>
			
			<li role="presentation"><?php echo $this->Html->link(__('Mis Prioridades'), array('controller' => 'alarms', 'action' => 'index')); ?></li>
          </ul>
        </nav>
       </div>
      </div>
  -->
</nav>
</div>
</nav>