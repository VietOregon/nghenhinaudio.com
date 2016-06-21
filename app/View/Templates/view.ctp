<style type="text/css">
	.template_content img {
		width: 60%;
		height: 60%;
	}
</style>
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
									echo $this->Html->link (' Sản phẩm', array (
										'controller' => 'templates',
										'action' => 'index'
									));
									echo ' / ' . $template['Template']['template_name'];
								?>
							</div>
							<div class="col-md-6 alignRight">
								<i class="fa fa-edit"></i> 
								<?php echo $this->Html->link ( 
									$template['Template']['template_name'],
									array (
										'controller' => 'templates',
										'action' => 'edit',
										$template['Template']['id']
									)
								); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="alignCenter">
					    <?php if(isset($errors)) {
					      echo '<ul>';
					      foreach ($errors as $error):
					          echo '<li class="error">'.$error[0].'</li>';
					      endforeach;
					      echo '</ul>';
					    }?>
					</div>
					<div class="flash">
					    <?php echo $this->Session->flash(); ?>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<col width="15%"></col>
							<col width="85%"></col>
							<tbody>
								<tr>
									<td align="right">Id form/mẫu:</td>
									<td><?php echo ($template['Template']['id']);  ?></td>
								</tr>
								<tr>
									<td align="right">Tên form/mẫu:</td>
									<td><?php echo ($template['Template']['template_name']);  ?></td>
								</tr>
								<tr>
									<td align="right">Nội dung:</td>
									<td class="template_content"><?php echo ($template['Template']['template_body']);  ?></td>
								</tr>
								<tr>
									<td align="right">Ngày tạo:</td>
									<td><?php echo ($template['Template']['created']);  ?></td>
								</tr>
							</tbody>
						</table>
						<div class="row">
							<div class="col-sm-12 alignCenter">
								<?php
									echo $this->Html->link (
										'Chỉnh sửa',
										array (
											'controller' => 'templates',
											'action' => 'edit',
											$template['Template']['id']
										),
										array (
											'class' => 'btn btn-primary'
										)
									);
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>