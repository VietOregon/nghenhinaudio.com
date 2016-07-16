<div id="main">
  <div id="ctl00_divCenter" class="middle-fullwidth">
    <div class="row">
      <div class="slider">
          <!-- Slideshow 1 -->
          <div class="rslides_container">
            <ul class="rslides" id="slider1">
              <li><img src="<?php echo $base_url; ?>img/banner/nghenhinaudio-khuyen-mai-chuong-trinh-mua-he-2016-banner.jpg" /></li>
              <li><img src="<?php echo $base_url; ?>img/banner/nghenhinaudio-radius-twf41_2x.jpg" /></li>
              <li><img src="<?php echo $base_url; ?>img/banner/nghenhinaudio-banner-noble-aluminum.jpg" /></li>
              <li><img src="<?php echo $base_url; ?>img/banner/nghenhinaudio-beyer-dynamic-t1-gen2-banner.jpg" /></li>
              <li><img src="<?php echo $base_url; ?>img/banner/nghenhinaudio-master-and-dynamic-banner.jpg" /></li>
            </ul>
          </div>
      </div>
      <script type="text/javascript">
        $(function () {
          $("#slider1").responsiveSlides({
            auto: false,
            pager: true,
            nav: true,
            speed: 300,
            namespace: "centered-btns"
          });
        });
        $(document).ready(function() {
          $('#myCarousel1').carousel({
            interval: false
          });
          $('#myCarousel2').carousel({
            interval: false
          });
        });
      </script>
    </div>
    <div class="container mgt10">
      <div class="row">
        <div class="col-sm-12 Module Module-159">
          <div class="ModuleContent">
            <section id="new" class="section alternate p0">
              <div class="block block-new">
                <div class="header alternate mb0">
                  <div class="wrap">
                    <ul class="pull-left list-inline tab-p">
                      <li class="disable">
                        <span>Xem theo tab:</span>
                      </li>
                      <li class="active">
                        <a href="<?php echo $base_url; ?>tai-nghe/" alt="Các loại tai nghe chính hãng" target="_self">
                          <span><i class="ic ic-2"></i></span>Headphones
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo $base_url; ?>amp-dac/" alt="DAC / AMP chính hãng" target="_self">
                          <span><i class="ic ic-3"></i></span>DAC / AMP
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo $base_url; ?>may-nghe-nhac/" alt="Máy nghe nhạc chính hãng" target="_self">
                          <span><i class="ic ic-4"></i></span>Máy nghe nhạc
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo $base_url; ?>speaker/" alt="Speaker chính hãng" target="_self">
                          <span><i class="ic ic-5"></i></span>Speaker
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo $base_url; ?>phu-kien/" alt="Phụ kiện chính hãng" target="_self">
                          <span><i class="ic ic-6"></i></span>Phụ kiện
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
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
                          <?php if (isset($new_products) && count($new_products) >= 4): ?>
                          <?php for ($i=0; $i < count($new_products); $i++) { ?>
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
                                  <a href="<?php echo $base_url.'san-pham/'.$new_products[$i]['Product']['product_slug']; ?>" alt="<?php echo $new_products[$i]['Product']['product_name']; ?>">
                                    <img src="<?php echo $base_url . 'img/products/images/' . $new_products[$i]["ProductImage"]["image_url"];?>" alt="<?php echo $new_products[$i]['Product']['product_name']; ?>" style="height: 100%" />
                                  </a>
                                </div>
                                <div class="caption alignCenter">
                                  <h4>
                                  <?php 
                                  if(!empty($new_products[$i]['Product']['product_price'])) {
                                    echo $new_products[$i]['Product']['product_price'];
                                  } else {
                                    echo '<span>&nbsp;</span>';
                                  } ?>
                                  </h4>
                                  <h4>
                                    <a href="<?php echo $base_url.'san-pham/'.$new_products[$i]['Product']['product_slug']; ?>" alt="<?php echo $new_products[$i]['Product']['product_name']; ?>"><?php echo $new_products[$i]['Product']['product_name']; ?></a>
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
    <section class="latestnews">
      <div class="container Module Module-147">
        <div class="ModuleContent">
          <div class="row">
            <div class="col-sm-12">
              <div class="header clearfix ">
                <h3 class="title underline pull-left">Thông tin mới</h3>
                <a class="more pull-right" href="#">
                  <i class="fa fa-angle-double-right">
                </i> Xem thêm</a>
              </div>
            </div>
          </div>
          <div class="row news-tt">
            <div class="col-sm-3 col-md-3 news">
              <div class="thumbnail">
                <a target="_self" href="#" title="Lựa chọn WASAPI hay ASIO?">
                  <img src="http://www.3kshop.vn/Data/Sites/1/News/152/3kshop-wasapi-hay-asio-cover.jpg" alt="Lựa chọn WASAPI hay ASIO?" title="" style="">
                </a>
                <div class="caption">
                  <h3>
                  <a target="_self" href="#" title="Lựa chọn WASAPI hay ASIO?">Lựa chọn WASAPI hay ASIO?</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3 news">
              <div class="thumbnail">
                <a target="_self" href="#" title="Audeze LCD-4: công nghệ, kỹ thuật của tai nghe Planar Magnetic">
                  <img src="http://www.3kshop.vn/Data/Sites/1/News/151/3kshop-audeze-lcd-4-news.jpg" alt="Audeze LCD-4: công nghệ, kỹ thuật của tai nghe Planar Magnetic">
                </a>
                <div class="caption">
                  <h3>
                  <a target="_self" href="#" title="Audeze LCD-4: công nghệ, kỹ thuật của tai nghe Planar Magnetic">Audeze LCD-4: công nghệ, kỹ thuật của tai nghe Planar Magnetic</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3 news">
              <div class="thumbnail">
                <a target="_self" href="#" title="[Khuyến mãi] Audio Technica ưu đãi M-Series 10%">
                  <img src="http://www.3kshop.vn/Data/Sites/1/News/150/3kshop-audio-technica-promotion-cover-news.jpg" alt="[Khuyến mãi] Audio Technica ưu đãi M-Series 10%" title="" style="">
                </a>
                <div class="caption">
                  <h3>
                  <a target="_self" href="#" title="[Khuyến mãi] Audio Technica ưu đãi M-Series 10%">[Khuyến mãi] Audio Technica ưu đãi M-Series 10%</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3 news">
              <div class="thumbnail">
                <a target="_self" href="#" title="[Khuyến mãi] Sở hữu tai nghe cao cấp Audeze với giá hấp dẫn">
                  <img src="http://www.3kshop.vn/Data/Sites/1/News/149/3kshop-audeze-promotion-cover-news.jpg" alt="[Khuyến mãi] Sở hữu tai nghe cao cấp Audeze với giá hấp dẫn">
                </a>
                <div class="caption">
                  <h3>
                  <a target="_self" href="#" title="[Khuyến mãi] Sở hữu tai nghe cao cấp Audeze với giá hấp dẫn">[Khuyến mãi] Sở hữu tai nghe cao cấp Audeze với giá hấp dẫn</a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row news-tt">
            <div class="col-sm-3 col-md-3 news">
              <div class="thumbnail">
                <a target="_self" href="#" title="Các tần số và những khái niệm mô tả chất âm của tai nghe thường gặp">
                  <img src="http://www.3kshop.vn/Data/Sites/1/News/146/3kshop-cac-khai-niem-mo-ta-am-thanh.jpg" alt="Các tần số và những khái niệm mô tả chất âm của tai nghe thường gặp" title="" style="">
                </a>
                <div class="caption">
                  <h3>
                  <a target="_self" href="#" title="Các tần số và những khái niệm mô tả chất âm của tai nghe thường gặp">Các tần số và những khái niệm mô tả chất âm của tai nghe thường gặp</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3 news">
              <div class="thumbnail">
                <a target="_self" href="#" title="Dây tín hiệu USB dùng cho Audio và những điều cần biết">
                  <img src="http://www.3kshop.vn/Data/Sites/1/News/145/3kshop-day-tin-hieu-usb.jpg" alt="Dây tín hiệu USB dùng cho Audio và những điều cần biết">
                </a>
                <div class="caption">
                  <h3>
                  <a target="_self" href="#" title="Dây tín hiệu USB dùng cho Audio và những điều cần biết">Dây tín hiệu USB dùng cho Audio và những điều cần biết</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3 news">
              <div class="thumbnail">
                <a target="_self" href="#" title="Marshall Major II Bluetooth - Tai nghe bluetooth đầu tiên của hãng Marshall">
                  <img src="http://www.3kshop.vn/Data/Sites/1/News/143/3kshop-marshall-major-ii-bluetooth-cover.jpg" alt="Marshall Major II Bluetooth - Tai nghe bluetooth đầu tiên của hãng Marshall" title="">
                </a>
                <div class="caption">
                  <h3>
                  <a target="_self" href="#" title="Marshall Major II Bluetooth - Tai nghe bluetooth đầu tiên của hãng Marshall">Marshall Major II Bluetooth - Tai nghe bluetooth đầu tiên của hãng Marshall</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3 news">
              <div class="thumbnail">
                <a target="_self" href="#" title="[CanJam Singapore] TACH T1 – Tai nghe portable Bluetooth mới nhất của Pendulumic">
                  <img src="http://www.3kshop.vn/Data/Sites/1/News/139/3kshop-tai-nghe-bluetooth-pendulumic-tach-t1.jpg" alt="[CanJam Singapore] TACH T1 – Tai nghe portable Bluetooth mới nhất của Pendulumic">
                </a>
                <div class="caption">
                  <h3>
                  <a target="_self" href="#" title="[CanJam Singapore] TACH T1 – Tai nghe portable Bluetooth mới nhất của Pendulumic">[CanJam Singapore] TACH T1 – Tai nghe portable Bluetooth mới nhất của Pendulumic</a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="brand">
      <div class="container Module Module-139">
        <div class="ModuleContent">
          <div class="row">
            <div class="col-sm-12">
              <ul class="brand-list">
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-akg.jpg" alt="nghenhinaudio-akg">
                  </a>
                </li>
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-fiio.jpg" alt="nghenhinaudio-fiio">
                  </a>
                </li>
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-ifi.jpg" alt="nghenhinaudio-ifi">
                  </a>
                </li>
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-campfire.jpg" alt="nghenhinaudio-campfire">
                  </a>
                </li>
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-bose.jpg" alt="nghenhinaudio-bose">
                  </a>
                </li>
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-audio-technica.jpg" alt="audio-technica">
                  </a>
                </li>
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-audeze.jpg" alt="nghenhinaudio-audeze">
                  </a>
                </li>
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-astell-kern.jpg" alt="astell-kern">
                  </a>
                </li>
                <li class="w2">
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio.jpg" alt="common/nghenhinaudio">
                  </a>
                </li>
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-radius.jpg" alt="nghenhinaudio-radius">
                  </a>
                </li>
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-furutech.jpg" alt="nghenhinaudio-furutech">
                  </a>
                </li>
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-shure.jpg" alt="nghenhinaudio-shure">
                  </a>
                </li>
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-hifiman.jpg" alt="nghenhinaudio-hifiman">
                  </a>
                </li>
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-jbl.jpg" alt="nghenhinaudio-jbl">
                  </a>
                </li>
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-cowon.jpg" alt="nghenhinaudio-cowon">
                  </a>
                </li>
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-noble.jpg" alt="nghenhinaudio-noble">
                  </a>
                </li>
                <li>
                  <a href="#" target="_self">
                    <img src="<?php echo $base_url; ?>img/common/nghenhinaudio-sony.jpg" alt="nghenhinaudio-sony">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>