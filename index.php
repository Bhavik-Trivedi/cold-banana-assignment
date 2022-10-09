<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chilled grape</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
	<?php
		header("Access-Control-Allow-Origin: *"); # enable Cross Origin [CORS]
        $url = 'https://my-json-server.typicode.com/TomSearle/cb-devtest-api/products';

		$ch = curl_init(); # initialize curl object
		curl_setopt($ch, CURLOPT_URL, $url); # set url
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); # receive server response
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); # do not verify SSL

		$data = curl_exec($ch); # execute curl
		$httpstatus = curl_getinfo($ch, CURLINFO_HTTP_CODE); # http response status code
		curl_close($ch); # close curl

		if($httpstatus != 200){
			echo "Errors: ".curl_error($ch)."<br>"; # Print errors if any
		}else{
			$data = json_decode($data, TRUE);
		}
    ?>

    <header class="fixedheader">
		<nav class="navbar navbar-expand-md">
		  	<!-- Brand -->
		  	<a class="navbar-brand" href="javascript:void(0);">Chilled grape</a>

		  	<!-- Toggler/collapsibe Button -->
		  	<button class="menu navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
              	<svg width="40" height="40" viewBox="0 0 100 100">
                 	<path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                 	<path class="line line2" d="M 20,50 H 80" />
                 	<path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
              	</svg>
		 	</button>

		  	<!-- Navbar links -->
    		<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    		    <ul class="navbar-nav">
    		      	<li class="nav-item">
    		        	<a class="nav-link" href="#section1">Home</a>
    		      	</li>
    		      	<li class="nav-item">
    		        	<a class="nav-link" href="#section2">About</a>
    		      	</li>
    		      	<li class="nav-item">
    		        	<a class="nav-link" href="#section3">Blog</a>
    		      	</li>
    		      	<li class="nav-item login_btn">
    		        	<a class="nav-link cgcta" href="javascript:void(0);">Login</a>
    		      	</li>
    		    </ul>
    		</div>
		</nav>
    </header>

    <section class="section1" id="section1">
    	<div class="my_container">
    		<div class="section1_inner">
    			<div class="section1_text">
    				Lorem ipsum
    				dolor sit amet.
    			</div>
    		</div>
    		<div class="shape1"><img src="images/Vector2.png" class="img-fluid"></div>
    		<div class="shape2"><img src="images/Vector3.png" class="img-fluid"></div>
    		<div class="shape3"><img src="images/Vector5.png" class="img-fluid"></div>
    	</div>
    </section>

    <section class="section2" id="section2">
    	<div class="my_container">
    		<div class="row align-items-center">
    			<div class="col-sm-6">
    				<div class="section2_content">
    					<div class="section2_title">
    						Lorem ipsum dolor sit amet.
    					</div>
    					<div class="section2_img d-block d-sm-none">
    						<img src="images/section2_img.png" class="img-fluid">
    					</div>
    					<div class="section2_desc">
    						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    					</div>
    					<div class="section2_cta">
    						<a href="javascript:void(0);" class="cgcta">Read More</a>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-6">
    				<div class="section2_img d-none d-sm-block">
    					<img src="images/section2_img.png" class="img-fluid">
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="section3" id="section3">
		<div class="my_container">
			<div class="row">
				<?php foreach ($data[0] as $value) : ?>
					<div class="col-md-4">
		                <div class="product_card">
			                <div class="product_card_inner">
				                <div class="product_image">
				                  	<a href="javascript:void(0);">
				                  		<img class="img-fluid" src="<?php echo $value['image']; ?>" alt="">
				                  	</a>
				                </div>
				                <div class="product_details">
				                	<div class="product_name"> 
		        	                	<a href="javascript:void(0);"><?php echo $value['product_name']; ?></a> 
		        	                </div>
		        	                <div class="container-fluid">
		        	                	<div class="row">
		        		                	<div class="col-6 p-0">
		        		                		<div class="product_price_count">
		        		                			&#x20b9; <?php echo $value['price']; ?>
		        		                		</div>
		        		                	</div>
		        		                	<div class="col-6 p-0">
		        		                		<div class="product_price_count">
		        		                			Count: <?php echo $value['stock_count']; ?>
		        		                		</div>
		        		                	</div>
		        		                </div>
		        	                </div>
				                </div>
			              	</div>
		              	</div>
					</div>
				<?php endforeach; ?>
				<div class="col-md-12">
					<a href="javascript:void(0);" id="more" class="load-more">Load More</a>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="my_container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="footer_about">
						<div class="footer_logo">
							<a href="javascript:void(0)">Chilled grape</a>
						</div>
						<div class="footer_about_desc">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet.
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="footer_links">
						<div class="footer_links_title">
							Company
						</div>
						<div class="footer_link">
							<ul>
								<li><a href="javascript:void(0);">About</a></li>
								<li><a href="javascript:void(0);">Careers</a></li>
								<li><a href="javascript:void(0);">Our Work</a></li>
								<li><a href="javascript:void(0);">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="footer_links">
						<div class="footer_links_title">
							Company
						</div>
						<div class="footer_link">
							<ul>
								<li><a href="javascript:void(0);">About</a></li>
								<li><a href="javascript:void(0);">Careers</a></li>
								<li><a href="javascript:void(0);">Our Work</a></li>
								<li><a href="javascript:void(0);">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="footer_links sm">
						<div class="footer_links_title">
							Follow Us
						</div>
						<div class="footer_link">
							<ul>
								<li><a href="javascript:void(0);"><img src="images/telegram.png" class="img-fluid"></a></li>
								<li><a href="javascript:void(0);"><img src="images/twitter.png" class="img-fluid"></a></li>
								<li><a href="javascript:void(0);"><img src="images/yt.png" class="img-fluid"></a></li>
								<li><a href="javascript:void(0);"><img src="images/fb.png" class="img-fluid"></a></li>
								<li><a href="javascript:void(0);"><img src="images/insta.png" class="img-fluid"></a></li>
								<li><a href="javascript:void(0);"><img src="images/tiktok.png" class="img-fluid"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
<script type="text/javascript">
	$(document).ready(function() {
	  $('.col-md-4').hide();
	   $('.col-md-4').each(function(index,value) {
	     if(index < 3) {
	       $(this).show();
	     }
	   });
	  if($('.col-md-4:hidden').length) {
	    $('#more').show();
	  }
	  if(!$('.col-md-4:hidden').length) {
	      $('#more').hide();
	    }
	  
	});


	$('#more').on('click', function() {
	    $('.col-md-4:hidden').each(function(index, value) {
	       if(index < 3) {
	         $(this).show();
	       }
	    });
	    if(!$('.col-md-4:hidden').length) {
	      $('#more').hide();
	    }
	});
</script>
</html>