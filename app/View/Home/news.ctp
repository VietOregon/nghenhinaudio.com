<style>
.fb_iframe_widget {
    display: inline-block;
    position: relative;
    /* font-style: italic; */
    border: 1px solid;
    /* border-radius: 25px; */
}
.carousel-inner {
  height: 400px;
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-v1 .carousel-caption {
  left: 0;
  right: 0;
  bottom: 0;
  padding: 7px 15px;
  background: rgba(0, 0, 0, 0.7);
  top: 350px;
}
.pclass{
	  overflow: hidden;
  		height: 40px;
}

</style>

<div class="container content">
	<div class="row magazine-page">
		<!-- Begin Content -->
		<div class="col-md-9">
			<!-- NEWS -->
			<div class="magazine-news">
				<div class="row">
					<div class="col-md-6">
						<div class="magazine-news-img">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[0] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[0]['Post']['image'];?>" alt=""></a> 
						</div>
						<h3>
						<?php			
							echo $this->Html->link ( $posts[0] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[0] ['Post'] ['id'] 
									) );
								?>
							
						</h3>
						<div class="by-author">
							 <span><i><?php echo $posts[0]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[0]['Post']['short_content'] ;?> </div>
					</div>
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[1] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[1]['Post']['image'];?>" alt=""></a> 
								
								
						</div>
						<h3>
								<?php			
							echo $this->Html->link ( $posts[1] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[1] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							<span><i><?php echo $posts[1]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[1]['Post']['short_content']?></div>
					</div>
				</div>
			</div>
			<!-- End Magazine News -->

			<div class="margin-bottom-35">
				<hr class="hr-md">
			</div>

			<!-- Magazine News -->
			<div class="magazine-news">
				<div class="row">
					<div class="col-md-6">
						<div class="magazine-news-img">
							
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[2] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[2]['Post']['image'];?>" alt=""></a> 
							
							 
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[2] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[2] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							 <span><i><?php echo $posts[2]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[2]['Post']['short_content']?></div>
					</div>
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[3] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[3]['Post']['image'];?>" alt=""></a> 
								
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[3] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[3] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							 <span><i><?php echo $posts[3]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[3]['Post']['short_content']?></div>
					</div>
				</div>
			</div>
			<!-- End Magazine News -->

			<div class="margin-bottom-35">
				<hr class="hr-md">
			</div>

			<!-- Magazine News -->
			<div class="magazine-news">
				<div class="row">
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[4] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[4]['Post']['image'];?>" alt=""></a> 
							 
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[4] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[4] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							 <span><i><?php echo $posts[4]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[4]['Post']['short_content']?></div>
					</div>
					<div class="col-md-6">
						<div class="magazine-news-img">
							
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[5] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[5]['Post']['image'];?>" alt=""></a> 
							
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[5] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[5] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							 <span><i><?php echo $posts[5]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[5]['Post']['short_content']?></div>
					</div>
				</div>
			</div>
			<!-- End Magazine News -->
			<!-- NEWS -->
			<div class="magazine-news">
				<div class="row">
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[6] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[6]['Post']['image'];?>" alt=""></a> 
							
							
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[6] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[6] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							 <span><i><?php echo $posts[6]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[6]['Post']['short_content']?></div>
					</div>
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[7] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[7]['Post']['image'];?>" alt=""></a> 
								
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[7] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[7] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							 <span><i><?php echo $posts[7]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[7]['Post']['short_content']?></div>
					</div>
				</div>
			</div>
			<!-- End Magazine News -->

			<div class="margin-bottom-35">
				<hr class="hr-md">
			</div>

			<!-- Magazine News -->
			<div class="magazine-news">
				<div class="row">
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[8] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[8]['Post']['image'];?>" alt=""></a> 
							
							
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[8] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[8] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							 <span><i><?php echo $posts[8]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[8]['Post']['short_content']?></div>
					</div>
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[9] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[9]['Post']['image'];?>" alt=""></a> 
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[9] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[9] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							 <span><i><?php echo $posts[9]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[9]['Post']['short_content']?></div>
					</div>
				</div>
			</div>
			<!-- End Magazine News -->

			<div class="margin-bottom-35">
				<hr class="hr-md">
			</div>

			<!-- Magazine News -->
			<div class="magazine-news">
				<div class="row">
					<div class="col-md-6">
						<div class="magazine-news-img">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[10] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[10]['Post']['image'];?>" alt=""></a> 
						 
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[10] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[10] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
						 <span><i><?php echo $posts[10]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[10]['Post']['short_content']?></div>
					</div>
					<div class="col-md-6">
						<div class="magazine-news-img">
							
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[11] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[11]['Post']['image'];?>" alt=""></a> 
							
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[11] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[11] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							<span><?php echo $posts[11]['Post']['created'];?></span>
						</div>
						<div class="pclass"><?php echo $posts[11]['Post']['short_content']?></div>
					</div>
				</div>
			</div>
			<!-- End Magazine News -->
				<!-- Magazine News -->
			<div class="magazine-news">
				<div class="row">
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[12] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[12]['Post']['image'];?>" alt=""></a> 
								 
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[12] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[12] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
						 <span><i><?php echo $posts[12]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[12]['Post']['short_content']?></div>
					</div>
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[13] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[13]['Post']['image'];?>" alt=""></a>  
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[13] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[13] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							<span><?php echo $posts[13]['Post']['created'];?></span>
						</div>
						<div class="pclass"><?php echo $posts[13]['Post']['short_content']?></div>
					</div>
				</div>
			</div>
			<!-- End Magazine News -->
				<!-- Magazine News -->
			<div class="magazine-news">
				<div class="row">
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[14] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[14]['Post']['image'];?>" alt=""></a> 
								
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[14] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[14] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
						 <span><i><?php echo $posts[14]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[14]['Post']['short_content']?></div>
					</div>
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[15] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[15]['Post']['image'];?>" alt=""></a> 
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[15] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[15] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							<span><?php echo $posts[15]['Post']['created'];?></span>
						</div>
						<div class="pclass"><?php echo $posts[15]['Post']['short_content']?></div>
					</div>
				</div>
			</div>
			<!-- End Magazine News -->
				<!-- Magazine News -->
			<div class="magazine-news">
				<div class="row">
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[16] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[16]['Post']['image'];?>" alt=""></a>  
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[16] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[16] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
						 <span><i><?php echo $posts[16]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[16]['Post']['short_content']?></div>
					</div>
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[17] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[17]['Post']['image'];?>" alt=""></a>  
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[17] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[17] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							<span><?php echo $posts[17]['Post']['created'];?></span>
						</div>
						<div class="pclass"><?php echo $posts[17]['Post']['short_content']?></div>
					</div>
				</div>
			</div>
			<!-- End Magazine News -->
			
			<!-- Magazine News -->
			<div class="magazine-news">
				<div class="row">
					<div class="col-md-6">
						<div class="magazine-news-img">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[18] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[18]['Post']['image'];?>" alt=""></a> 	
						
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[18] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[18] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
						 <span><i><?php echo $posts[18]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[18]['Post']['short_content']?></div>
					</div>
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[19] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[19]['Post']['image'];?>" alt=""></a>  
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[19] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[19] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							<span><?php echo $posts[19]['Post']['created'];?></span>
						</div>
						<div class="pclass"><?php echo $posts[19]['Post']['short_content']?></div>
					</div>
				</div>
			</div>
			<!-- End Magazine News -->
			
			<!-- Magazine News -->
			<div class="magazine-news">
				<div class="row">
					<div class="col-md-6">
						<div class="magazine-news-img">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[20] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[20]['Post']['image'];?>" alt=""></a> 	
						
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[20] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[20] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
						 <span><i><?php echo $posts[21]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[21]['Post']['short_content']?></div>
					</div>
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[21] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[21]['Post']['image'];?>" alt=""></a>  
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[21] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[21] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							<span><?php echo $posts[21]['Post']['created'];?></span>
						</div>
						<div class="pclass"><?php echo $posts[21]['Post']['short_content']?></div>
					</div>
				</div>
			</div>
			<!-- End Magazine News -->
			<!-- Magazine News -->
			<div class="magazine-news">
				<div class="row">
					<div class="col-md-6">
						<div class="magazine-news-img">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[22] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[22]['Post']['image'];?>" alt=""></a> 	
						
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[22] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[22] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
						 <span><i><?php echo $posts[23]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[23]['Post']['short_content']?></div>
					</div>
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[21] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[23]['Post']['image'];?>" alt=""></a>  
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[23] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[23] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							<span><?php echo $posts[23]['Post']['created'];?></span>
						</div>
						<div class="pclass"><?php echo $posts[23]['Post']['short_content']?></div>
					</div>
				</div>
			</div>
			<!-- End Magazine News -->
			<!-- Magazine News -->
			<div class="magazine-news">
				<div class="row">
					<div class="col-md-6">
						<div class="magazine-news-img">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[24] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[24]['Post']['image'];?>" alt=""></a> 	
						
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[24] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[24] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
						 <span><i><?php echo $posts[25]['Post']['created'];?></i></span>
						</div>
						<div class="pclass"><?php echo $posts[25]['Post']['short_content']?></div>
					</div>
					<div class="col-md-6">
						<div class="magazine-news-img">
							<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[25] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[25]['Post']['image'];?>" alt=""></a>  
						</div>
						<h3>
							<?php			
							echo $this->Html->link ( $posts[25] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[25] ['Post'] ['id'] 
									) );
								?>
						</h3>
						<div class="by-author">
							<span><?php echo $posts[25]['Post']['created'];?></span>
						</div>
						<div class="pclass"><?php echo $posts[25]['Post']['short_content']?></div>
					</div>
				</div>
			</div>
			<!-- End Magazine News -->
			

			
		</div>
		<!-- End Content -->

		<!-- Begin Sidebar -->
		<div class="col-md-3">
			<!-- Facebook API -->
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
 				 var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
 					 js = d.createElement(s); js.id = id;
 					 js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4";
 					 fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-page" data-href="https://www.facebook.com/360newdays"
				data-width="292" data-height="210" data-small-header="false"
				data-adapt-container-width="true" data-hide-cover="false"
				data-show-facepile="true" data-show-posts="false">
				<div class="fb-xfbml-parse-ignore">
					<blockquote cite="https://www.facebook.com/360newdays">
						<a href="https://www.facebook.com/360newdays">360days.net</a>
					</blockquote>
				</div>
			</div>
			<!-- End Facebook API -->

			<hr>
			
			<!-- Right magazine 1-->
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[26] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[26]['Post']['image'];?>" alt=""></a> 	
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[26] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[26] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[27] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[27]['Post']['image'];?>" alt=""></a> 	
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[27] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[27] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[28] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[28]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[28] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[28] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[29] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[29]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[29] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[29] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[30] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[30]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[30] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[30] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				<!--  END Magazine 1-->
				<hr>
			
			<!-- Right magazine 2-->
			
			<div class="row margin-bottom-10 margin-left-5">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
						<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[31] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[31]['Post']['image'];?>" alt=""></a> 									
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[31] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[31] ['Post'] ['id'] 
									) );
								?>
					</h3>	
					</div>
					<ul class="list-unstyled blog-photos margin-bottom-15 margin-left-10">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[32] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[32]['Post']['image'];?>" alt=""></a> 	
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[32] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[32] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[33] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[33]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[33] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[33] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[34] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[34]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[34] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[34] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[35] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[35]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[35] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[35] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 2-->
				
				<!-- Right magazine 3-->
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[36] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[36]['Post']['image'];?>" alt=""></a> 	
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[36] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[36] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[37] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[37]['Post']['image'];?>" alt=""></a> 	
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[37] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[37] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[38] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[38]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[38] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[38] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[39] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[39]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[39] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[39] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[40] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[40]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[40] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[40] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 3-->
					<!-- Right magazine 4-->		
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[41] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[41]['Post']['image'];?>" alt=""></a> 
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[41] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[41] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[42] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[42]['Post']['image'];?>" alt=""></a> 	
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[42] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[42] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[43] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[43]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[43] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[43] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[44] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[44]['Post']['image'];?>" alt=""></a> 
								
								
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[44] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[44] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[45] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[45]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[45] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[45] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 4-->
				
					<!-- Right magazine 5-->
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[46] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[46]['Post']['image'];?>" alt=""></a> 	
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[46] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[46] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[47] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[47]['Post']['image'];?>" alt=""></a> 	
								
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[47] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[47] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[48] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[48]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[48] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[48] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[49] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[49]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[49] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[49] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[50] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[50]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[50] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[50] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 5-->
					<!-- Right magazine 6-->
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[51] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[51]['Post']['image'];?>" alt=""></a> 		
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[51] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[51] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[52] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[52]['Post']['image'];?>" alt=""></a> 	
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[52] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[52] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[53] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[53]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[53] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[53] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[54] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[54]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[54] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[54] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[55] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[55]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[55] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[55] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 6-->
				
					<!-- Right magazine 7-->
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[56] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[56]['Post']['image'];?>" alt=""></a> 	
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[56] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[56] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[57] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[57]['Post']['image'];?>" alt=""></a> 	
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[57] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[57] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[58] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[58]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[58] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[58] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[59] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[59]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[59] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[59] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[60] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[60]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[60] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[60] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 8-->
				
					<!-- Right magazine 9-->
			
			
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[61] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[61]['Post']['image'];?>" alt=""></a> 	
									
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[61] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[61] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[62] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[62]['Post']['image'];?>" alt=""></a> 	
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[62] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[62] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[63] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[63]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[63] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[63] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[64] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[64]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[64] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[64] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[65] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[65]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[65] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[65] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 9-->
				<!-- Right magazine 10-->
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[66] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[66]['Post']['image'];?>" alt=""></a> 
								
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[66] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[66] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[67] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[67]['Post']['image'];?>" alt=""></a> 	
								
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[67] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[67] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[68] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[68]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[68] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[68] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[69] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[69]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[69] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[69] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[70] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[70]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[70] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[70] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 10-->
			
			</div>
			<!-- End Magazine Posts -->
			
		</div>
		<!-- End Sidebar -->
	</div>
</div>