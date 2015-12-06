<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
	
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	</div>
	
	<div id="navbar" class="navbar-collapse collapse">
	  <ul class="nav navbar-nav">
		<li class="active"><?php echo $this->Html->link(__('Mi agenda', true), array('controller'=>'events','action' => 'index')); ?></li>
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
	  </ul>
	</div><!--/.nav-collapse -->
	
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



