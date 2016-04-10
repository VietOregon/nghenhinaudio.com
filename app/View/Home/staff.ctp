<?php 
	$f = array();	$t = array();
	$f[1] = "jotaro.sato";	$t[1] = "jotaro_jp";
	$f[2] = "je.phuong";	$t[2] = "JePhuong";
	$f[3] = "huongson.mai";	$t[3] = "huongsonmai";
	$f[4] = "chinguyenvnn";	$t[4] = "chi_nguyen_vnn";
	$f[5] = "minlau191";	$t[5] = "lauchay2201";
	$f[6] = "quypham1008";	$t[6] = "quy1008";
	$f[7] = "Nhinh";		$t[7] = "Nhinhdt";
	$f[8] = "ducnv.cbr";	$t[8] = "DucNguyenCBR";
	$f[9] = "elfish.moon";	$t[9] = "themoon287";
	$f[10] = "xxx";	$t[10] = "zzzz";
	$f[11] = "xxx";	$t[11] = "zzzz";
	$f[12] = "xxx";	$t[12] = "zzzz";
	$f[13] = "xxx";	$t[13] = "zzzz";
	$f[14] = "xxx";	$t[14] = "zzzz";
	$f[15] = "xxx";	$t[15] = "zzzz";
	$f[16] = "xxx";	$t[16] = "zzzz";
?>



<div id="staff">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php for($i=1; $i<=12; $i++) {?>
				<div class="staff">
					<div class="row">
						<div class="col-md-3" style='text-align: center'>
							<div class="avarta" style="background-image: url('/img/staff/IMG_s2-1-<?php echo $i.'.jpg' ?>')"></div>
							<div class="sociallink">
								<a href='https://www.facebook.com/<?php echo $f[$i] ?>' target='_blank'><img class="facebook" src="/img/staff/fb.png"></a>
								<a href='https://www.twitter.com/<?php echo $t[$i] ?>' target='_blank'><img class="twitter" src="/img/staff/tw.png"></a>
							</div>
						</div>
						<div class="col-md-9">
							<table class="infotable">
								<tr>
									<td width="15%" class="lbljobtitle"><?php echo __('STAFF_TEXT_0_3') ?></td>
									<td width="55%"><?php echo __('STAFF_TEXT_'.$i.'_2') ?></td>
									<td width="10%" style="border-left:thin solid #eee"><?php echo __('STAFF_TEXT_0_2') ?></td>
									<td width="20%"><?php echo __('STAFF_TEXT_'.$i.'_5') ?></td>
								</tr>
								<tr>
									<td><?php echo __('STAFF_TEXT_0_4') ?></td>
									<td colspan="3" class='staffname'><?php echo __('STAFF_TEXT_'.$i.'_3') ?></td>
								</tr>
								<tr>
									<td><?php echo __('STAFF_TEXT_0_1') ?></td>
									<td colspan="3"><?php echo __('STAFF_TEXT_'.$i.'_4') ?></td>
								</tr>
								<tr>
									<td><?php echo __('STAFF_TEXT_0_5') ?></td>
									<td colspan="3"><?php echo __('STAFF_TEXT_'.$i.'_6') ?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>