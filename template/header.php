<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/5a505b47b8.js" ></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
	
	<script src="owlcarousel/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/layout.css">


</head>
<body>

	<header>
		<div class="container-fluit cf-myclass">
			<div class="container">
				<div class="row row-myclass">
					<div class="col col-lg-3">
						<i class="fas fa-mobile-alt"></i><b> Hotline: 0975457333</b> 
					</div>
					<div class="col col-lg-6">
						<i class="fas fa-envelope"></i><b> Email: MenClothes@gmail.com</b> 
					</div>
					<div class="col col-lg-3 login-myclass">
						<a href="login.php"><b> Registration</b></a>
						<b> / </b>
						<a href="login.php"><b> Login </b></a>
						<i class="fas fa-user"> </i>
						
					</div>
				</div>
			</div>
		</div>

		<div class="container" style="margin-top: 2.5em;">
            <div class="row" style="display: flex;align-items: center;font-size: 14px;">
            	<div class="col-3 col-md-3 col-lg-12 order-md-1 order-lg-6">
            		<div class="container-fluit">
			        	
				        	<div id="mySidenav" class="sidenav">
							  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
							  <label>
							  	<a href="register.php">Registraton </a>
							  </label>
							  <label>
							  	<a href="login.php">Login</a>
							  </label>
							  <form action="search.php" method="post">
							  	<input type="text" name="" placeholder="Search" style="background-color: #ddd;">
							  	<input type="submit" name="" value="Tìm" class="btn btn-success">
							  </form>
							  <a href="index.php">Home</a>
							  <div class="dropdown-divider"></div>
							  <a href="introduce.php">Introduce</a>
							  <div class="dropdown-divider"></div>
							  <a href="product.php">Product</a>
							  <div class="dropdown-divider"></div>
							  <a href="news.php">News</a>
							  <div class="dropdown-divider"></div>
							  <a href="contact.php">Contact</a>
							</div>

							<!-- Use any element to open the sidenav -->
							<span onclick="openNav()" class="openNav-myclass"><i class="fas fa-bars" style="font-size: 30px; color: black;line-height: 2; "></i></span>

							<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
							<div id="main" class="main-myclass">
							  	<!-- <ul>
							  		<li><h6><a href="">Trang Chủ</a></h6></li>
							  		<li><h6><a href="introdue.php">Giới Thiệu</a></h6></li>
							  		<li><h6><a href="">Sản Phẩm</a></h6></li>
							  		<li><h6><a href="">Tin Tức</a></h6></li>
							  		<li><h6><a href="">Liên Hệ</a></h6></li>
							  		<input type="button" name="" value="Tìm" style="float: right; border-radius: 5px;margin-left: 5px;">
							  		<input type="text" name="" placeholder="Tìm kiếm" style="float: right;border-radius: 5px;width: 20%;padding-left: 1em;">
							  	</ul> -->
							</div>
				        
			        </div>
            	</div>

                <div class="col-6 col-md-6 col-lg-3 order-md-2 order-lg-1">
                    <a href="index.php"><img src="assets/images/HighQualityClothes.png" width="75%" height="75%" alt="..." class="img-thumbnail img-myclass" style="border: none;"></a>
                </div>

                <div class="col-3 col-md-3 col-lg-2 order-md-3 order-lg-5 cart-myclass" style="display: flex;align-items: center;justify-content: flex-end;">
                	<span style="background-color: red; color: white; ; border-radius: 5px; line-height: 
                    2; float: right; padding:5px;">
                    	<a href="cart.php">
                    		<i class="fas fa-shopping-cart"></i>
                			<b>Cart(0)</b>
                		</a>
            		</span> 
                </div>

                <div class="col col-md-4 col-lg-3  order-lg-2 col-myclass" >
                </div>

                <div class="col col-md-4 col-lg-2  order-lg-2 col-myclass" >
                	<div style="display: flex;flex-direction: row;">
                		<label>
	                		<img src="assets/images/2.png" style="margin-top: 5px;">
	                	</label>
	                    <div style="margin-right: 100px;">
	                    	<div>
	                    		<b>Support 24/7</b>
	                    	</div>
	                    	<div>
	                    		Hotline:0975457333
	                    	</div>
	                    </div>
                	</div>
                </div>

                <div class="col col-md-4 col-lg-2  order-lg-2 col-myclass" >
                	<div style="display: flex;flex-direction: row;">
                		<label>
	                		<img src="assets/images/3.png" style="margin-top: 8px;">
	                	</label>
	                    <div style="margin-left: 10px;">
	                    	<div>
	                    		<b>Opening hours</b>
	                    	</div>
	                    	<div>
	                    		8h-21h Everyday
	                    	</div>
	                    </div>
                	</div>
                </div>
            </div>
        </div><!--end container-->

        <div class="container-fluit" style="background:  rgba(82,64,120,0.9) !important;">
        	<div class="container menu-myclass">
        		<ul>
			  		<li><h6><a href="index.php">Home</a></h6></li>
			  		<li><h6><a href="introduce.php">Introduce</a></h6></li>
			  		<li><h6><a href="product.php">Product</a></h6></li>
			  		<li><h6><a href="contact.php">Contact</a></h6></li>
			  		<form action="search.php" method="post" >
			  			<input type="submit" name="" value="Search" style="float: right; border-radius: 5px;margin-left: 5px; border:none;margin-top: 13px;">
			  			<input type="text" name="" placeholder="Enter Product" style="float: right;border-radius: 5px;width: 20%;padding-left: 1em;">
			  		</form>
			  			
			  		
			  		
			  	</ul>
        	</div>
        </div>


	</header><!--end header-->


	