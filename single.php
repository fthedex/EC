<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Jupiter Accessories</title>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- start menu -->
<script src="js/bootstrap.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>

</head>
<body>

<?php

$itemID = $_GET['itemID']; //ITEM ID


?>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="col-sm-4 logo">
					<h1><a href="index.php">Jupiter <span>Accessories</span></a></h1>
				</div>
			<div class="col-sm-4 world">
					<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
			</div>
			<div class="col-sm-2 number">
					<span><i class="glyphicon glyphicon-phone"></i>078 9629 404</span>
					<p>Call us</p>
				</div>
			<div class="col-sm-2 search">		
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
		<div class="container">
			<div class="head-top">
			<div class="n-avigation">
			
				<nav class="navbar nav_bottom" role="navigation">
				
				 <!-- Brand and toggle get grouped for better mobile display -->
				  <div class="navbar-header nav_2">
					  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#"></a>
				   </div> 
				   <!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1">
							<li><a href="index.php">Home</a></li>

							<li><a href="products.php">Products</a></li>
						</ul>
					 </div><!-- /.navbar-collapse -->
				  
				</nav>
			</div>
			
				
		<div class="clearfix"> </div>
			<!---pop-up-box---->   
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<form action="#" method="post">
								<input type="submit" value="">
								<input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
							
							</form>
						</div>
						<p>	Shopping</p>
					</div>				
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->		
		</div>
	</div>
</div>
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Single</li>
			</ol>
		</div>
	</div>
<div class="single">

<div class="container">
<div class="col-md-11">
	<div class="col-md-4 grid">
		<div class="flexslider">
			  <ul class="slides">

				  <?php

				 if($itemID=="100") { //product 1
echo "  <li data-thumb='images/homePageProduct1.jpg'>
			        <div class='thumb-image'> <img src='images/homePageProduct1.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
			    <li data-thumb='images/singlePageProduct1_2.png'>
			         <div class='thumb-image'> <img src='images/singlePageProduct1_2.png' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
			    <li data-thumb='images/singlePageProduct1_3.png'>
			       <div class='thumb-image'> <img src='images/singlePageProduct1_3.png' data-imagezoom='true' class='img-responsive'> </div>
			    </li>";
				 }
				  else if($itemID=="101"){ //product 2
					  echo "
					  <li data-thumb='images/homePageProduct2.jpg'>
			        <div class='thumb-image'> <img src='images/homePageProduct2.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
			    <li data-thumb='images/singlePageProduct2_2.jpg'>
			         <div class='thumb-image'> <img src='images/singlePageProduct2_2.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
			    <li data-thumb='images/singleProduct2_3.jpg'>
			       <div class='thumb-image'> <img src='images/singleProduct2_3.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
					  ";

				  }
				  else if($itemID=="102"){ //product 3
					  echo "
					  <li data-thumb='images/homePageProduct3.jpg'>
			        <div class='thumb-image'> <img src='images/homePageProduct3.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
			    <li data-thumb='images/singleProduct3_2.jpg'>
			         <div class='thumb-image'> <img src='images/singleProduct3_2.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
			    <li data-thumb='images/singleProduct3_3.jpg'>
			       <div class='thumb-image'> <img src='images/singleProduct3_3.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
					  ";

				  }
				  else if($itemID=="103"){ //4
					  echo "
					  <li data-thumb='images/homePageProduct4.jpg'>
			        <div class='thumb-image'> <img src='images/homePageProduct4.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
			    <li data-thumb='images/singleProduct4_2.jpg'>
			         <div class='thumb-image'> <img src='images/singleProduct4_2.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
			    <li data-thumb='images/singleProduct4_3.jpg'>
			       <div class='thumb-image'> <img src='images/singleProduct4_3.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
					  ";
				  }
				  else if($itemID=="104"){ //5
					  echo "
					  <li data-thumb='images/homePageProduct5.jpg'>
			        <div class='thumb-image'> <img src='images/homePageProduct5.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
			    <li data-thumb='images/singleProduct5_2.jpg'>
			         <div class='thumb-image'> <img src='images/singleProduct5_2.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
			    <li data-thumb='images/singleProduct5_3.jpg'>
			       <div class='thumb-image'> <img src='images/singleProduct5_3.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
					  ";


				  }
				  else{

					  echo "
					  <li data-thumb='images/homePageProduct6.jpg'>
			        <div class='thumb-image'> <img src='images/homePageProduct6.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
			    <li data-thumb='images/singleProduct6_2.jpg'>
			         <div class='thumb-image'> <img src='images/singleProduct6_2.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
			    <li data-thumb='images/singleProduct6_3.jpg'>
			       <div class='thumb-image'> <img src='images/singleProduct6_3.jpg' data-imagezoom='true' class='img-responsive'> </div>
			    </li>
					  ";

				  }



?>


			  </ul>
		</div>
	</div>	
<div class="col-md-8 single-top-in">


	<?php
	if($itemID=="100"){

		echo "
<div class='single-para simpleCart_shelfItem'>
			<h2>Glow In The Dark Silver Moon Phases Necklace</h2>
							<p> Has to be left in the sun for 10-15 minutes in order for it to glow in the dark! </p>
							<div class='star-on'>

							<div class='clearfix'> </div>
							</div>
							
								<label  class='add-to item_price'>13 JDS</label>
		";

	}
	else if($itemID=="101"){
		echo "
<div class='single-para simpleCart_shelfItem'>
			<h2>Best Friends Forever Necklaces</h2>
							<p>3 pieces</p>
							<div class='star-on'>

							<div class='clearfix'> </div>
							</div>
							
								<label  class='add-to item_price'>13 JDS</label>
		";

	}
	else if($itemID=="102"){
		echo "
<div class='single-para simpleCart_shelfItem'>
			<h2>Thin feather Bookmark</h2>
							<p>One random bookmark, can be any of the shapes shown above.</p>
							<div class='star-on'>

							<div class='clearfix'> </div>
							</div>
							
								<label  class='add-to item_price'>1 JDS</label>
		";

	}
	else if($itemID=="103"){
		echo "
<div class='single-para simpleCart_shelfItem'>
			<h2>Because Cats Watch</h2>
							<p>The listing of for one Watch as shown</p>
							<div class='star-on'>

							<div class='clearfix'> </div>
							</div>
							
								<label  class='add-to item_price'>15 JDS</label>
		";

	}
	else if($itemID=="104"){
		echo "
<div class='single-para simpleCart_shelfItem'>
			<h2>Deathly Hallows Watch Necklace</h2>
							<p>The listing is for one Watch Necklace as shown</p>
							<div class='star-on'>

							<div class='clearfix'> </div>
							</div>
							
								<label  class='add-to item_price'>12 JDS</label>
		";

	}
	else {
		echo "
<div class='single-para simpleCart_shelfItem'>
			<h2>Anatomical Pins Set</h2>
							<p>The listing is for one set of 3 pins as shown </p>
							<div class='star-on'>

							<div class='clearfix'> </div>
							</div>
							
								<label  class='add-to item_price'>5 JDS</label>
		";

	}



	?>


							

								<a href="#" class="cart item_add">Add To Cart</a>
						</div>
					</div>
			<div class="clearfix"> </div>
			<div class="content-top1">


			
			<div class="clearfix"> </div>
			</div>		
</div>
<!----->
		<div class="clearfix"> </div>
	</div>
	</div>
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-6 top-footer">
				<h3>Follow Us On</h3>
				<div class="social-icons">
					<ul class="social">
						<li><a href="https://www.facebook.com/jupiterbracelets/"><i></i></a> </li>
						<li><a href="https://www.facebook.com/jupiterbracelets/"><i class="facebook"></i></a></li>
						<li><a href="https://www.facebook.com/jupiterbracelets/"><i class="google"></i> </a></li>
						<li><a href="https://www.facebook.com/jupiterbracelets/"><i class="linked"></i> </a></li>
					</ul>
						<div class="clearfix"></div>
				 </div>
			</div>
			<div class="clearfix"> </div>
		</div>	
	</div>
		<div class="footer-bottom">
		<div class="container">

				<div class="col-md-3 footer-bottom-cate cate-bottom">
					<h6>Our Address</h6>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 12th Avenue, 5th block, <span>Amman.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@psut.edu.jo</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +962789629404</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>
<!--footer-->
<!-- slide -->
<script src="js/jquery.min.js"></script>
<script src="js/imagezoom.js"></script>
<!-- start menu -->
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
						<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!---pop-up-box---->
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	
</body>
</html>