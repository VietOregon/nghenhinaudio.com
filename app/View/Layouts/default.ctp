<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo 'VOT&C | '.$title_for_layout;?></title>
		<?php
		echo $this->Html->meta ( 'icon', '/favicon.ico' ); // icon
		echo $this->element ( 'meta' );
		echo $this->element ( 'css' );
		echo $this->element ( 'js' );
		?>
		<script>
		  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		 	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		 	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  	ga('create', '<?php echo __("GA_CODE") ?>', 'auto');
		 	ga('send', 'pageview');
		</script>
</head>
<body>
		<div id="wrapper">
		<?php echo $this->element('header')?>
		</div>
		<!--  ==== Start Topic Path ==== -->
	<div class="topic-path">
		<div class="container">
			<h1 class="pull-left"><?php echo $topic_path ?></h1>
		</div>
	</div>
	<!--  ==== End Topic Path ==== -->
		<?php // echo $this->fetch('content')?>
	<!--  ==== Start Scroll Top ==== -->
	<div class="scroll-up" style="display: none;">
		<i class="fa fa-chevron-up fa-3"></i>
	</div>
	<!--  ==== End Scroll Top ==== -->
		<?php echo $this->element('footer')?>
	</body>
<?php // echo $this->element ( 'author' ); ?>
</html>