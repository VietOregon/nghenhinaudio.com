<div class="container-fluid mgt80">
  	<div class="row">
   		<div class="col-md-12">
      	<!-- Zero Configuration Table -->
      		<div class="panel panel-default">
        		<div class="panel-heading">
		        	<?php echo $this->Html->link ( 'Users', array (
		            	'controller' => 'users',
		            	'action' => 'index'
		          	) ); ?> / 
		          	Create user
		        </div>
        		<div class="panel-body">
        			<div class="col-md-3 col-sm-3">&nbsp;</div>
					<div class="col-md-6 col-sm-6 form-register">
						<h2 class="pdbt10">Input user information</h2>
						<?php 
							echo $this->Form->create('User');
							
							echo $this->Form->input ( 'username', array('type'=>'text','label'=>false,'placeholder'=>'Username', 'class'=>'form-control mgt20 required') );

							echo $this->Form->input ( 'password',array('label'=>false,'placeholder'=>'New Password','class'=>'form-control mgt20 required') );

							echo $this->Form->input ( 'password_confirm',array('label'=>false,'placeholder'=>'Confirm New Password','class'=>'form-control mgt20 required', 'type' => 'password') );

							echo $this->Form->input ( 'role', array (
								'label' => false,
								'options' => array (
									'admin' => 'Admin',
									'author' => 'Author'
								),
								'class' => 'mgt20',
								'style' => "padding: 7px;"
							));
						?>
						<div class="alignCenter mgt20">
							<button type="submit" class="btn btn-primary"><?php echo __('Create')?></button>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">&nbsp;</div>
				</div>
			</div>
		</div>
	</div>
</div>



