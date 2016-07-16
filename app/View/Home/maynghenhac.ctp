<div id="ctl00_divAlt1" class="altcontent1 cmszone">
	<section id="breadscum" class="section alternate p0">
		<div class="container">
			<div class="row">
				<div id="ctl00_divAlt1" class="altcontent1 cmszone">
					<section id="breadscum" class="section alternate p0">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 Module Module-144">
									<ol class="breadcrumb">
										<li>
											<a href="<?php echo $base_url; ?>" class="itemcrumb">
												<span itemprop="title">Trang chủ</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="itemcrumb active">
												<span itemprop="title">Máy nghe nhạc</span>
											</a>
										</li>
									</ol>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="container" style="margin-bottom: 20px;">
	<div class="row">
	  	<div class="col-md-9" style="margin-top: 10px;">
			<h2>Máy nghe nhạc</h2>
			<?php if (count($products) > 0) {
				for ($i=0; $i < count($products); $i++) { ?>
				<div class="col-md-3" style="padding: 5px; margin: 5px 0px;">
					<div class="thumbnail" style="width: 100%; height: 200px;margin-bottom: 5px;">
						<a href="<?php echo $base_url.'san-pham/'.$products[$i]['Product']['product_slug']; ?>" alt="<?php echo $products[$i]['Product']['product_name']; ?>">
							<img src="<?php echo $base_url . 'img/products/images/' . $products[$i]["ProductImage"]["image_url"];?>" alt="<?php echo $products[$i]['Product']['product_name']; ?>" style="width:100%;height: 100%;" />
						</a>
					</div>
					<div class="caption alignCenter" style="border: 1px solid #ccc; ">
						<h4>
							<?php
								if(!empty($products[$i]['Product']['product_price'])) {
								echo $products[$i]['Product']['product_price'];
								} else {
								echo '<span>&nbsp;</span>';
								}
							?>
						</h4>
						<h4 style="height: 30px;">
							<a href="<?php echo $base_url.'san-pham/'.$products[$i]['Product']['product_slug']; ?>" alt="<?php echo $products[$i]['Product']['product_name']; ?>">
								<?php echo $products[$i]['Product']['product_name']; ?>
							</a>
						</h4>
					</div>
				</div>
			<?php }
			} else {
				echo '<div class="col-md-12" style="padding: 5px; margin: 5px 0px;">';
				echo "Sản phẩm đang được cập nhật";
				echo '</div>';
			} ?>
		</div>
		<div class="col-md-3">
			<h3>Danh mục sản phẩm</h3>
				<div class="ModuleContent">
					<div class="panel-group">
						<?php foreach ($categories as $category): ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="<?php echo $base_url.'danh-muc/'.$category['Category']['category_slug']; ?>" alt="<?php echo $category['Category']['category_name']; ?>"><?php echo $category['Category']['category_name']; ?></a>
									</h4>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
		</div>
	</div>
</div>