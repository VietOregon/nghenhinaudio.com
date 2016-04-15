<html id="" lang="vi">
	<head id="">
		<title>DAC / AMP -  3K Shop - Tai nghe chính hãng</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta property="og:title" content="DAC / AMP">
		<meta property="og:description" content="">
		<meta property="og:site_name" content="">
		<meta itemprop="name" content="DAC / AMP">
		<meta itemprop="description" content="">
		<link rel="mask-icon" href="http://www.3kshop.vn/3k-logo.svg" color="#d20c0c">
		<link rel="icon" type="image/png" href="http://www.3kshop.vn/Data/Sites/1/skins/default/icons/favicon-32x32.png" sizes="32x32">
		<link rel="search" type="application/opensearchdescription+xml" title="" href="#">
		<meta name="viewport" content="width=670, initial-scale=0.45, minimum-scale=0.45">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js">
		</script>
		<![endif]-->
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">
		</script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js">
		</script>
		<![endif]-->
		<?php
			echo $this->Html->meta ( 'icon', '/favicon.ico' ); // icon
			echo $this->element ( 'meta' );
			echo $this->element ( 'css' );
			echo $this->element ( 'js' );
		?>

		<script type="text/javascript">
			$(document).ready(function(){
			  $('.bxslider').bxSlider();
			});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<?php  echo $this->element('header')?>
			<div id="main">
				<?php echo $this->fetch('content')?>
				<?php  echo $this->element('footer')?>
			</div>
			<div class="scroll-up" style="display: none;">
				<i class="fa fa-chevron-up fa-3"></i>
			</div>
		</div>
	</body>
</html>