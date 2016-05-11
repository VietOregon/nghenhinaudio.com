<div class="breadcrumbs container">
	<ol class="pull-right breadcrumb">
		<li>
			<?php
				echo $this->Html->link ( ' Sản phẩm', array (
					'controller' => 'products',
					'action' => 'index'
				) );
			?>
		</li>
		<li class="active"><?php echo ($product['Product']['product_name']);  ?></li>
	</ol>
</div>
<div class="flash alignCenter">
	<?php echo $this->Session->flash(); ?>
</div>
<div class="container content mgbt20">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#" data-toggle="tab">Sản phẩm: <?php echo ($product['Product']['product_name']);  ?></a></li>
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
						'<strong><span class="glyphicon glyphicon-pencil"></span> Sửa sản phẩm</strong>',
						array (
							'controller' => 'products',
							'action' => 'edit',
							$product['Product']['id']
						),
						array (
							'escape' => FALSE
						)
					);
				?>
			</div>
			<table class="table">
				<col width="20%"></col>
				<col width="80%"></col>
				<tbody>
					<tr>
						<td align="right">Tên sản phẩm:</td>
						<td><?php echo ($product['Product']['product_name']);  ?></td>
					</tr>
					<tr>
						<td align="right">Mã sản phẩm:</td>
						<td><?php echo ($product['Product']['product_code']);  ?></td>
					</tr>
					<tr>
						<td align="right">Giá sản phẩm:</td>
						<td><?php echo ($product['Product']['product_price']);  ?></td>
					</tr>
					<tr>
						<td align="right">Giá đã giảm:</td>
						<td><?php echo ($product['Product']['product_price_sale']);  ?></td>
					</tr>
					<tr>
						<td align="right">Thời hạn bảo hành:</td>
						<td><?php echo ($product['Product']['warranty_time']);  ?></td>
					</tr>
					<tr>
						<td align="right">Tình trạng sản phẩm:</td>
						<td><?php echo ($product['Product']['product_status']);  ?></td>
					</tr>
					<tr>
						<td align="right">Danh mục sản phẩm:</td>
						<td><?php echo ($product['Product']['category_name']);  ?></td>
					</tr>
					<tr>
						<td align="right">Mô tả:</td>
						<td class="pdl20"><?php echo ($product['Product']['description']);  ?></td>
					</tr>
					<tr>
						<td align="right">Tổng quan:</td>
						<td class="pdl20"><?php echo ($product['Product']['overview']);  ?></td>
					</tr>
					<tr>
						<td align="right">Thông số kỹ thuật:</td>
						<td class="pdl20"><?php echo ($product['Product']['specification']);  ?></td>
					</tr>
					<tr>
						<td align="right">Review:</td>
						<td class="pdl20"><?php echo ($product['Product']['review']);  ?></td>
					</tr>
					<tr>
						<td align="right">Video:</td>
						<td class="pdl20"><?php echo ($product['Product']['video']);  ?></td>
					</tr>
					<tr>
						<td align="right">Nhận xét khách hàng:</td>
						<td class="pdl20"><?php echo ($product['Product']['customer_review']);  ?></td>
					</tr>
					<tr>
						<td align="right">Ghi chú:</td>
						<td class="pdl20"><?php echo ($product['Product']['note']);  ?></td>
					</tr>
					<tr>
						<td align="right">SEO - Mô tả:</td>
						<td class="pdl20"><?php echo ($product['Product']['seo_description']);  ?></td>
					</tr>
					<tr>
						<td align="right">SEO - Keyword:</td>
						<td class="pdl20"><?php echo ($product['Product']['seo_keyword']);  ?></td>
					</tr>
					<tr>
						<td align="right">Từ khóa sản phẩm:</td>
						<td class="pdl20"><?php echo ($product['Product']['product_tag']);  ?></td>
					</tr>
					<tr>
						<td align="right">Ngày tạo:</td>
						<td><?php echo ($product['Product']['created']);  ?></td>
					</tr>
					<tr>
						<td align="right">Ảnh sản phẩm:</td>
						<td>
						<?php
							foreach ($productImg as $value):
								echo '<img class="product-img" src="' . $base_url . 'img/products/' . $value['ProductImage']['image_url'] . '" width="80%" alt="profile picture">';
							endforeach;
						?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>