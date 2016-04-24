<div class="breadcrumbs container">
	<ol class="pull-right breadcrumb">
		<li>
			<?php
				echo $this->Html->link ( ' Danh mục sản phẩm', array (
					'controller' => 'categories',
					'action' => 'index'
				) );
			?>
		</li>
		<li class="active"><?php echo ($category['Category']['category_name']);  ?></li>
	</ol>
</div>
<div class="container content mgbt20">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#" data-toggle="tab">Danh mục: <?php echo ($category['Category']['category_name']);  ?></a></li>
		</ul>
	</div>
</div>
<div class="container">
	<div class="row about-me">
		<div class="col-sm-12 col-md-12">
			<div class="mgbt20 alignRight">
				<?php
					echo '';
					echo $this->Html->link (
						'<strong><span class="glyphicon glyphicon-pencil"></span> Sửa danh mục</strong>',
						array (
							'controller' => 'categories',
							'action' => 'edit',
							$category['Category']['id']
						),
						array (
							'escape' => FALSE
						)
					);
				?>
			</div>
			<table class="table">
				<tbody>
					<tr>
						<td align="right" width="20%">Id danh mục:</td>
						<td width="80%"><?php echo ($category['Category']['id']);  ?></td>
					</tr>
					<tr>
						<td align="right">Tên danh mục:</td>
						<td><?php echo ($category['Category']['category_name']);  ?></td>
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