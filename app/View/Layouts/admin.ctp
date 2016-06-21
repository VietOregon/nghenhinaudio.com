<?php
/**
  * This file is …….
  * Developed by PHP language program, use Framework Cakephp.
  * Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
  * Short name: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=eng 
  * Email: vietoregon.tech.com@gmail.com
  * Thanks and best regard !
  * —————————————————————————————————————
  * Đây là file dùng để ……. 
  * Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
  * Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT-OREGON
  * Tên ngắn giao dịch: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=vn
  * Địa chỉ Email: vietoregon.tech.com@gmail.com
  * Cám ơn quý đối tác !
  **/
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo 'VOT&C | '.$title_for_layout;?></title>
		<?php
		echo $this->Html->meta ( 'icon', '/favicon.ico' ); // icon
		echo $this->element ( 'meta' );
		echo $this->element ( 'css_admin' );
		echo $this->element ( 'js_admin' );
		?>
	</head>
	<body>
		<!--  ==== Start Topic Path ==== -->
		<?php if(isset($auth) && $auth != null) { ?>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="">
				<div class="navbar-header">
					<?php echo $this->Html->link(
						'View Homepage',
						'/',
						array(
							'class'=>'navbar-brand',
							'target' => '_blank'
						)
					); ?>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="">
							<?php
								if ($auth["role"] == 'admin') {
									echo $this->Html->link('User', array ('controller' => 'users', 'action' => 'index'), array('style' => 'padding-top:17px;'));
       							}
							?>
						</li>
						<li class="">
							<?php
								echo $this->Html->link('Categories', array ('controller' => 'categories', 'action' => 'index'), array('style' => 'padding-top:17px;'));
							?>
						</li>
						<li class="">
							<?php
								echo $this->Html->link('Products', array ('controller' => 'products', 'action' => 'index'), array('style' => 'padding-top:17px;'));
							?>
						</li>
						<li class="">
							<?php
								if ($auth["role"] == 'admin') {
									echo $this->Html->link('Template', array ('controller' => 'templates', 'action' => 'index'), array('style' => 'padding-top:17px;'));
       							}
							?>
						</li>
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li> -->
					</ul>
					<ul class="nav navbar-nav navbar-right" style="margin-right: 0px;">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-paw" style="padding: 10px 0;"></i> Welcome  <?php echo '<strong>'.$auth["username"].'</strong>'; ?>&nbsp;<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<?php echo $this->Html->link('Profile', array ('controller' => 'users', 'action' => 'view', $auth['id'])); ?>
								</li>
								<li role="separator" class="divider"></li>
								<li>
								<?php echo $this->Html->link('Logout', array ('controller' => 'users', 'action' => 'logout')); ?>
								</li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<?php } ?>
		<!--  ==== End Topic Path ==== -->
		<?php echo $this->fetch('content')?>
		<input type="hidden" value="<?php echo $base_url;?>" id="appRoot" />
		<!--  ==== Start Scroll Top ==== -->
		<div class="scroll-up" style="display: none;">
			<i class="fa fa-chevron-up fa-3"></i>
		</div>
		<!--  ==== End Scroll Top ==== -->
	</body>
</html>