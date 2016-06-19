<?php echo $this->Html->css('views/home/product-slider');?>
<?php echo $this->Html->script('home/modernizr.custom');?>
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
							<a href="javascript:void(0);" class="itemcrumb">
								<span itemprop="title"><?php echo $product['SelectOption']['display_name']; ?></span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);" class="itemcrumb active">
								<span itemprop="title"><?php echo $product['Product']['product_name']; ?></span>
							</a>
						</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="container">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div class="products-list mrb30 Module Module-127">
					<div class="ModuleContent">
						<div id="ctl00_mainContent_ctl01_ctl00_pnlInnerWrap">
							<div class="row">
								<div class="col-md-6 prd_dt_img_wrap">
									<!-- Product slide -->
									<div class="main" style="height:100%">
										<div id="cbp-contentslider" class="cbp-contentslider">
											<ul>
												<?php if (isset($product_img) && count($product_img) >= 1): ?>
						                        <?php for ($i=0; $i < count($product_img); $i++) { ?>
						                        	<li id="slide<?php echo $i; ?>">
														<div class="cbp-content">
															<img src="<?php echo $base_url . 'img/products/images/' . $product_img[$i]["ProductImage"]["image_url"];?>" alt="<?php echo $product_img[$i]['ProductImage']['image_url']; ?>" style="width: 100%; height: 100%" />
														</div>
													</li>
						                        <?php } ?>
						                        <?php endif; ?>
											</ul>
											<nav>
												<?php if (isset($product_img) && count($product_img) >= 1): ?>
						                        <?php for ($i=0; $i < count($product_img); $i++) { ?>
						                        	<a href="#slide<?php echo $i; ?>" class="icon-wolf">
														<img src="<?php echo $base_url . 'img/products/images/' . $product_img[$i]["ProductImage"]["image_url"];?>" alt="<?php echo $product_img[$i]['ProductImage']['image_url']; ?>" style="width: 100%; height: 100%" />
													</a>
						                        <?php } ?>
						                        <?php endif; ?>
											</nav>
										</div>
									</div>
								</div>
								<div class="col-md-6 prd-info">
									<h2><?php echo ($product['Product']['product_name']);  ?></h2>
									<div class="content">
										<?php echo ($product['Product']['description']);  ?>
									</div>
									<div class="extra clearfix">
										<ul class="list-unstyle">
											<li class="price new-price">
												<label>
													Giá:
												</label>
												<span><?php echo ($product['Product']['product_price']); ?></span>
											</li>
											<li class="warranty">
												<span style="font-size: 16px;">
													<strong>Bảo hành: <span><?php echo date_format(date_create($product['Product']['warranty_time']), "d/m/Y"); ?></span></strong>
												</span>
											</li>
											<?php
												if(!empty($product['Product']['category_name'])) {
													echo '<li class="warranty">';
													echo '<span style="font-size: 16px;">';
													echo '<strong>Danh mục sản phẩm: <span>';
													$product_categories = explode(',', $product['Product']['category_name']);
													foreach($product_categories as $product_category):
														echo '<div class="panel-heading mgl20">';
														echo '<h4 class="panel-title">';
														echo '<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> <a class="collapsed" href="#">' . $product_category . '</a>';
														echo '</h4></div>';
													endforeach;
													echo '</span></strong></li>';
												}
												if(!empty($product['Product']['product_tag'])) {
													echo '<li class="warranty">';
													echo '<span style="font-size: 16px;">';
													echo '<strong>Từ khóa sản phẩm: <span>';
													$product_tags = explode(',', $product['Product']['product_tag']);
													foreach($product_tags as $key => $product_tag):
														if ($key == (count($product_tags)-1)) {
															echo '<a class="collapsed" href="#">' . $product_tag . '</a>';
														} else {
															echo '<a class="collapsed" href="#">' . $product_tag . '</a>, ';
														}
													endforeach;
													echo '</span></strong></li>';
												}
											?>
										</ul>
									</div>
									<div class="social">
										<ul>
											<li class="google" style="width: 50%!important;float: left;">
												<!-- Place this tag in your head or just before your close body tag. -->
												<script src="https://apis.google.com/js/platform.js" async defer>
												  {lang: 'vi'}
												</script>
												<!-- Place this tag where you want the +1 button to render. -->
												<div class="g-plusone" data-size="medium" data-annotation="inline"></div>
											</li>
											<li style="width: 50%; margin-top: 6px;">
												<div id="fb-root"></div>
												<script>(function(d, s, id) {
												  var js, fjs = d.getElementsByTagName(s)[0];
												  if (d.getElementById(id)) return;
												  js = d.createElement(s); js.id = id;
												  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
												  fjs.parentNode.insertBefore(js, fjs);
												}(document, 'script', 'facebook-jssdk'));</script>
												<div class="fb-like" data-href="https://www.facebook.com/nghenhinaudio/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3 Module Module-158">
				<h3>Sản phẩm <?php echo $product['SelectOption']['display_name']; ?></h3>
				<div class="ModuleContent">
					<div class="panel-group">
						<?php
							foreach ($categories as $category):
								echo '<div class="panel panel-default">';
								echo '<div class="panel-heading">';
									echo '<h4 class="panel-title">';
									echo '<a class="collapsed" href="#">' . $category['Category']['category_name'] . '</a>';
								echo '</h4></div></div>';
							endforeach;
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
	    	<div class="col-md-12 prd-desc">
				<div role="tabpanel">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a role="tab" data-toggle="tab" href="#tab1" aria-controls="tab1">Tổng quan</a>
						</li>
						<li role="presentation" class="">
							<a role="tab" data-toggle="tab" href="#tab2" aria-controls="tab2">Thông số kỹ thuật</a>
						</li>
						<li role="presentation" class="">
							<a role="tab" data-toggle="tab" href="#tab3" aria-controls="tab3">Review</a>
						</li>
						<li role="presentation" class="">
							<a role="tab" data-toggle="tab" href="#tab4" aria-controls="tab4">Video</a>
						</li>
						<li role="presentation" class="">
							<a role="tab" data-toggle="tab" href="#tab5" aria-controls="tab5">Đánh giá khách hàng</a>
						</li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="tab1">
							<div class="col-sm-12 mgl20">
								<?php echo ($product['Product']['overview']); ?>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab2">
							<div class="col-sm-12 mgl20">
								<?php echo ($product['Product']['specification']); ?>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab3">
							<div class="col-sm-12 mgl20">
								<?php echo ($product['Product']['review']); ?>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab4">
							<div class="col-sm-12 mgl20">
								<?php echo ($product['Product']['video']); ?>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab5">
							<div class="col-sm-12 mgl20">
								<?php echo ($product['Product']['customer_review']); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </div>
	    <div class="row">
	      <div class="col-md-12 Module Module-160">
	        <div class="ModuleContent">
	          <section class="cc-carousel blog box">
	            <div class="products">
	              <div class="header alternate">
	                <h3 class="title ic-com1">Sản phẩm mới</h3>
	              </div>
	              <div class="container-fluid">
	                <div class="row-fluid">
	                  <div class="span12">
	                    <div class="carousel slide" id="myCarousel1">
	                      <div class="carousel-inner">
	                        <?php if (isset($related_products) && count($related_products) >= 8): ?>
	                        <?php for ($i=0; $i < count($related_products); $i++) { ?>
	                          <?php if ($i%4 == 0): ?>
	                            <?php if ($i == 0): ?>
	                            <div class="item active">
	                            <?php else: ?>
	                            <div class="item">
	                            <?php endif; ?>
	                            <ul class="thumbnails">         
	                          <?php endif; ?>
	                            <li class="span3">
	                              <div class="thumbnail">
	                              	<a href="<?php echo $base_url.'san-pham/'.$related_products[$i]['Product']['id']; ?>" alt="<?php echo $related_products[$i]['Product']['product_name']; ?>">
	                                	<img src="<?php echo $base_url . 'img/products/images/' . $related_products[$i]["ProductImage"]["image_url"];?>" alt="<?php echo $related_products[$i]['Product']['product_name']; ?>" style="height: 100%" />
	                                </a>
	                              </div>
	                              <div class="caption alignCenter">
	                                <h4>
	                                <?php 
	                                if(!empty($related_products[$i]['Product']['product_price'])) {
	                                  echo $related_products[$i]['Product']['product_price'];
	                                } else {
	                                  echo '<span>&nbsp;</span>';
	                                } ?>
	                                </h4>
	                                <h4>
	                                  <a href="<?php echo $base_url.'san-pham/'.$related_products[$i]['Product']['id']; ?>" alt="<?php echo $related_products[$i]['Product']['product_name']; ?>"><?php echo $related_products[$i]['Product']['product_name']; ?></a>
	                                </h4>
	                              </div>
	                            </li>
	                          <?php if (($i+1)%4 == 0): ?>
	                          </ul></div>         
	                          <?php endif; ?>
	                        <?php } ?>
	                        <?php endif; ?>
	                      </div>
	                      <div class="control-box">
	                        <a data-slide="prev" href="#myCarousel1" class="carousel-control left">‹</a>
	                        <a data-slide="next" href="#myCarousel1" class="carousel-control right">›</a>
	                      </div>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </section>
	        </div>
	      </div>
	    </div>
	</div>
</div>
<?php echo $this->Html->script('home/cbpContentSlider');?>
<script>
	$(function() {
		/*
		- how to call the plugin:
		$( selector ).cbpContentSlider( [options] );
		- options:
		{
			// default transition speed (ms)
			speed : 500,
			// default transition easing
			easing : 'ease-in-out',
			// current item's index
			current : 0
		}
		- destroy:
		$( selector ).cbpContentSlider( 'destroy' );
		*/
		$( '#cbp-contentslider' ).cbpContentSlider();
	});
</script>