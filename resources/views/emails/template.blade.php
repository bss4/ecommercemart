<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tutorial</title>
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
		<link media="all" type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		<style type="text/css">
			body{font-family: Lato, sans-serif;font-size: 14px;margin: 15px;background-color: #f2f2f2;padding: 15px;}
			.email_template{margin:auto;max-width:800px;background-color: #ffffff;padding: 0px;border:1px solid #c2c2c2;}
			.template_head{padding:25px;text-align:center;border-bottom: 2px solid #F9F9F9;background-color: #ffffff;}
			.template_head a{display:inline-block;}
			.template_body{padding:50px;box-sizing:border-box;background-color: #ffffff;}
			.template_body p{margin:0 0 5px;font-size:15px;line-height:23px;}
			.template_body p strong{margin-bottom:20px;display:block}
			.template_body ul{padding:0px 0 10px}
			.template_body ul li{display:block;font-size: 16px;margin-bottom:5px;}
			.template_body ul li strong{font-size: 16px;text-transform: capitalize;font-weight: 700;display:inline-block;margin-bottom:10px;margin-right:10px;width:120px;}
			.template_footer{border-top:2px solid #f47203;border-bottom:2px solid #f47203;padding:20px;text-align:center;background-color: #ffffff;}
			.template_footer .socialicon{margin:0 0 15px;padding:0}
			.template_footer .socialicon li{padding:0 4px;list-style:none;display:inline-block;}
			.template_footer .socialicon li a{display:block; color:#fff; display:flex; flex-wrap:wrap; justify-content:center; align-items:center; text-decoration:none; -moz-transition:all 0.5s ease 0s; -ms-transition:all 0.5s ease 0s; -o-transition:all 0.5s ease 0s; -webkit-transition:all 0.5s ease 0s; transition:all 0.5s ease 0s;font-size:20px;}
			@media (max-width:767px){
			body{margin:0}
			.template_head{padding:15px;}
			.template_head a img{max-width:220px;}
			.template_body{padding:15px;}
			.template_body p{font-size:14px;}
			.template_body ul li{font-size:14px;}
			.template_body ul li strong{font-size:14px;}
			.template_footer .socialicon li a{width:27px;height:27px;font-size:14px;}
			}

		</style>
		
	</head>
	<body>
		<div class="email_template">
			<div class="template_head"> <a href='<?php echo WEBSITE_URL; ?>'> <img src="<?php echo WEBSITE_IMG_URL; ?>logo.png"> </a> </div>
			<div class="template_body">
				<p>{!! $messageBody !!}</p>
			</div>
			<div class="template_footer">
				<?php 
				$facebookUrl	=	"www.google.com";
				$twitterUrl		=	"www.google.com";
				$instagramUrl	=	"www.google.com";
				$youtubeUrl		=	"www.google.com";
				if($facebookUrl != '' || $twitterUrl != '' || $instagramUrl != '' || $youtubeUrl != ''){
				?>
					<ul class="socialicon">
						<?php 
						if(!empty($facebookUrl)){
						?>
							<li><a href="www.google.com" target="_blank"> <img src="<?php echo WEBSITE_IMG_URL; ?>facebook_icon.png" alt="img"> </a></li>
						<?php 
						} 
						if(!empty($twitterUrl)){
						?>	
							<li><a href="www.google.com" target="_blank"><img src="<?php echo WEBSITE_IMG_URL; ?>twitter_icon.png" alt="img"></a></li>
						<?php 
						} 
						if(!empty($instagramUrl)){
						?>	
							<li><a href="{{ Config::get('Social.instagram') }}" target="_blank"><img src="<?php echo WEBSITE_IMG_URL; ?>instagram_icon.png" alt="img"></a></li>
						<?php 
						} 
						if(!empty($youtubeUrl)){
						?>	
							<li><a href="www.google.com" target="_blank"><img src="<?php echo WEBSITE_IMG_URL; ?>youtube_icon.png" alt="img"></a></li>
						<?php 
						} 
						?>	
					</ul>
				<?php
				}
				?>
				<p style="color:#514d4d;margin: 2px;font-size:14px;">
					<?php echo "Copyright 2021"; ?>
				</p>
		   </div>
		</div>
	</body>
</html>