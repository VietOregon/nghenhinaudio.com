<div class="container-fluid mgt80">
	<div class="row">
		<div class="col-md-12">
			<!-- Zero Configuration Table -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6">
								<?php
									echo $this->Html->link (' Users', array (
										'controller' => 'users',
										'action' => 'index'
									));
									echo ' / ' . $user['User']['username'];
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row about-me">
						<div class="col-sm-4 col-md-4 shadow-wrapper">
							<div class="shadow-effect-2">
								<img src='<?php echo $base_url; ?>img/staff/cnn.jpg' width="80%" alt="profile picture">
							</div>
						</div>
						<div class="col-sm-8 col-md-8">
							<h2 class="pdbt10">Change user information</h2>
							<?php 
								echo $this->Form->create('User');
								
								echo $this->Form->input (
									'username',
									array(
										'type'=>'text',
										'label'=>false,
										'placeholder'=>'Username',
										'class'=>'form-control mgt20 required',
										'readonly'=>'readonly'
									)
								);

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

								echo $this->Form->input('id', array('type' => 'hidden'));
							?>
							<div class="alignCenter mgt20">
								<button type="submit" class="btn btn-primary"><?php echo __('Update')?></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



