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
									echo $this->Html->link (' Categories', array (
										'controller' => 'categories',
										'action' => 'index'
									));
									echo ' / ' . $category['Category']['category_name'];
								?>
							</div>
							<div class="col-md-6 alignRight">
								<i class="fa fa-edit"></i> 
								<?php echo $this->Html->link ( 
									$category['Category']['category_name'],
									array (
										'controller' => 'categories',
										'action' => 'edit',
										$category['Category']['id']
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
					<table class="table table-bordered table-striped">
						<col width="15%"></col>
						<col width="85%"></col>
						<tbody>
							<tr>
								<td align="right">Id danh mục:</td>
								<td><?php echo ($category['Category']['id']);  ?></td>
							</tr>
							<tr>
								<td align="right">Tên danh mục:</td>
								<td><?php echo ($category['Category']['category_name']);  ?></td>
							</tr>
							<tr>
								<td align="right">Loại:</td>
								<td><?php echo ($category['Category']['product_type']);  ?></td>
							</tr>
							<tr>
								<td align="right">Mô tả:</td>
								<td><?php echo ($category['Category']['description']);  ?></td>
							</tr>
							<tr>
								<td align="right">SEO - Mô tả:</td>
								<td><?php echo ($category['Category']['seo_description']);  ?></td>
							</tr>
							<tr>
								<td align="right">SEO - Keyword:</td>
								<td><?php echo ($category['Category']['seo_description']);  ?></td>
							</tr>
							<tr>
								<td align="right">Ngày tạo:</td>
								<td><?php echo ($category['Category']['created']);  ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>