<?php
include("template/header.php");
?>




<main>
	<section>
		<div class="container" style="margin-top: 2em;">
			<div class="row row-reverse-xs" style="background-color: white;">
				<div class="col-12 col-lg-3 order-2 order-lg-1 " style="margin-bottom: 2em;">
					<div id="menu"><b>Product Menu</b></div>
					<div id="dropdown" style="padding-top: 10px;">
						<ul>
							<li><a href="product.php"><i class="fas fa-arrow-circle-right"></i> T-Shirts</a></li>
							<div class="dropdown-divider"></div>
							<li><a href="product.php"><i class="fas fa-arrow-circle-right"></i> Sweaters</a></li>
							<div class="dropdown-divider"></div>
							<li><a href="product.php"><i class="fas fa-arrow-circle-right"></i> Sweatshirts</a></li>
							<div class="dropdown-divider"></div>
							<li><a href="product.php"><i class="fas fa-arrow-circle-right"></i> Button Down Shirts</a></li>
							<div class="dropdown-divider"></div>
							<li><a href="product.php"><i class="fas fa-arrow-circle-right"></i> Jackets & Coats</a></li>
							<div class="dropdown-divider"></div>
							<li><a href="product.php"><i class="fas fa-arrow-circle-right"></i> Pants & Shorts</a></li>
							<div class="dropdown-divider"></div>
							<li><a href="product.php"><i class="fas fa-arrow-circle-right"></i> Tracksuits</a></li>
							<div class="dropdown-divider"></div>
							<li><a href="product.php"><i class="fas fa-arrow-circle-right"></i> Underwear</a></li>

						</ul>
					</div>
				</div>
				<div class="col-12 col-lg-9 order-1 order-lg-2" >
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="https://imagena1.lacoste.com/dw/image/v2/AAUP_PRD/on/demandware.static/-/Sites-master/default/dwe36dd156/TH8128_258_20.jpg?imwidth=914&impolicy=product" class="d-block w-100" class="mySlides" alt="...">
							</div>
							<div class="carousel-item">
								<img src="https://imagena1.lacoste.com/dw/image/v2/AAUP_PRD/on/demandware.static/-/Sites-master/default/dw640e3780/TH6386_031_20.jpg?imwidth=914&impolicy=product" width="50%" height="50%" class="d-block w-100" class="mySlides" alt="...">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--end container-->




		<!-------------------------- Product-------------------------->
		<div class="container">
			<div class="brick">
				<h5 class="title-myclass">T-Shirts</h5>
			</div>
			<div class="product">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="tab1">
						<div class="owl-carousel owl-theme owl-carousel-myclass1">
							<div class="item">
								<div class="cart">
									<a href="detail.php">
										<img class="cart-img" src="https://www.lacoste.com/us/lacoste/men/clothing/t-shirts/men-s-striped-crewneck-cotton-t-shirt/TH8560-51.html?color=S7T">
									</a>
									<div class="cart-title">Men's Striped-Crewneck T-Shirt</div>
									<div class="price">
										<span class="price-New">New: $35.99</span>
										<span class="price-old">Old: $60.00</span>
									</div>
									<div class="link-cart">
										<a href="#">
											<i class="fa fa-shopping-cart"></i> Add to cart
										</a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="cart">
									<a href="detail.php">
										<img class="cart-img" src="https://www.lacoste.com/us/lacoste/men/clothing/t-shirts/men-s-graphic-croc-t-shirt/TH6386-51.html?color=001">
									</a>
									<div class="cart-title">Men's Graphic Croc T-shirt</div>
									<div class="price">
										<span class="price-New">New: $35.99</span>
										<span class="price-old">Old: $60.00</span>
									</div>
									<div class="link-cart">
										<a href="#">
											<i class="fa fa-shopping-cart"></i> Add to cart
										</a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="cart">
									<a href="detail.php">
										<img class="cart-img" src="https://www.lacoste.com/us/lacoste/men/clothing/t-shirts/men-s-crewneck-color-blocked-thermoregulating-pique-t-shirt/TH8551-51.html?color=225">
									</a>
									<div class="cart-title">Men's Piqué Crewneck T-Shirt</div>
									<div class="price">
										<span class="price-New">New: $50.99</span>
										<span class="price-old">Old: $85.00</span>
									</div>
									<div class="link-cart">
										<a href="#">
											<i class="fa fa-shopping-cart"></i> Add to cart
										</a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="cart">
									<a href="detail.php">
										<img class="cart-img" src="https://www.lacoste.com/us/lacoste/men/clothing/t-shirts/men-s-crewneck-checkered-logo-cotton-t-shirt/TH8614-51.html?color=328">
									</a>
									<div class="cart-title">Men's Crewneck Checkered T-Shirt</div>
									<div class="price">
										<span class="price-New">New: $35.99</span>
										<span class="price-old">Old: $60.00</span>
									</div>
									<div class="link-cart">
										<a href="#">
											<i class="fa fa-shopping-cart"></i> Add to cart
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="container">
					<div class="brick">
						<h5 class="title-myclass">Sweaters</h5>
					</div>
					<div class="product">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="tab4">
								<div class="owl-carousel owl-theme owl-carousel-myclass1">
									<div class="item">
										<div class="cart">
											<a href="detail.php">
												<img class="cart-img" src="https://www.lacoste.com/us/lacoste/men/clothing/sweaters/men-s-v-neck-caviar-pique-accent-cotton-jersey-sweater/AH4087-51.html?color=N72">
											</a>
											<div class="cart-title">Men's V-neck Caviar Piqué Sweater</div>
											<div class="price">
												<span class="price-New">New: $35.99</span>
												<span class="price-old">Old: $60.00</span>
											</div>
											<div class="link-cart">
												<a href="#">
													<i class="fa fa-shopping-cart"></i> Add to cart
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="cart">
											<a href="detail.php">
												<img class="cart-img" src="https://www.lacoste.com/us/lacoste/men/clothing/sweaters/men-s-v-neck-wool-jersey-sweater/AH2987-51.html?color=031">
											</a>
											<div class="cart-title">Men's Wool And Alpaca Sweater</div>
											<div class="price">
												<span class="price-New">New: $114.99</span>
												<span class="price-old">Old: $230.00</span>
											</div>
											<div class="link-cart">
												<a href="#">
													<i class="fa fa-shopping-cart"></i> Add to cart
												</a>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="cart">
											<a href="detail.php">
												<img class="cart-img" src="https://www.lacoste.com/us/lacoste/men/clothing/sweaters/men-s-crew-neck-cotton-sweater/AH3390-51.html?color=883">
											</a>
											<div class="cart-title">Men's Cotton Blend Sweater</div>
											<div class="price">
												<span class="price-New">New: $91.99</span>
												<span class="price-old">Old: $185.00</span>
											</div>
											<div class="link-cart">
												<a href="#">
													<i class="fa fa-shopping-cart"></i> Add to cart
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="cart">
											<a href="detail.php">
												<img class="cart-img" src="https://www.lacoste.com/us/lacoste/men/clothing/sweaters/men-s-3d-lettering-crewneck-cotton-blend-sweater/AH7957-51.html?color=CCA">
											</a>
											<div class="cart-title">Men's 3D-Lettering Sweater</div>
											<div class="price">
												<span class="price-New">New: $94.99</span>
												<span class="price-old">Old: $190.00</span>
											</div>
											<div class="link-cart">
												<a href="#">
													<i class="fa fa-shopping-cart"></i> Add to cart
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="brick">
						<h5 class="title-myclass">Sweatshirts</h5>
					</div>
					<div class="product">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="tab4">
								<div class="owl-carousel owl-theme owl-carousel-myclass1">
									<div class="item">
										<div class="cart">
											<a href="detail.php">
												<img class="cart-img" src="assets/images/https://www.lacoste.com/us/lacoste/men/clothing/sweatshirts/men-s-sport-tennis-jacket/SH3550-51.html?color=LAW">
											</a>
											<div class="cart-title">Men's SPORT Tennis Fleece Zip Up</div>
											<div class="price">
												<span class="price-New">New: $48.99</span>
												<span class="price-old">Old: $98.00</span>
											</div>
											<div class="link-cart">
												<a href="#">
													<i class="fa fa-shopping-cart"></i> Add to cart
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="cart">
											<a href="detail.php">
												<img class="cart-img" src="https://www.lacoste.com/us/lacoste/men/clothing/sweatshirts/men-s-hooded-fleece-sweatshirt/SH4365-51.html?color=522">
											</a>
											<div class="cart-title">Men's Hooded Fleece Sweatshirt</div>
											<div class="price">
												<span class="price-New">New: $93.99</span>
												<span class="price-old">Old: $135.00</span>
											</div>
											<div class="link-cart">
												<a href="#">
													<i class="fa fa-shopping-cart"></i> Add to cart
												</a>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="cart">
											<a href="detail.php">
												<img class="cart-img" src="https://www.lacoste.com/us/lacoste/men/clothing/sweatshirts/men-s-sport-contrast-sleeve-fleece-varsity-jacket/SH8667-51.html?color=29T">
											</a>
											<div class="cart-title">Men's Standup-Collar Sweatshirt</div>
											<div class="price">
												<span class="price-New">New: $67.99</span>
												<span class="price-old">Old: $98.00</span>
											</div>
											<div class="link-cart">
												<a href="#">
													<i class="fa fa-shopping-cart"></i> Add to cart
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="cart">
											<a href="detail.php">
												<img class="cart-img" src="https://www.lacoste.com/us/lacoste/men/clothing/sweatshirts/men-s-sport-novak-djokovic-croc-logo-sweatshirt/SH8613-51.html?color=1YE">
											</a>
											<div class="cart-title">Men's Zip Fleece Sweatshirt</div>
											<div class="price">
												<span class="price-New">New: $98.00</span>
												<span class="price-old">Old: $145.00</span>
											</div>
											<div class="link-cart">
												<a href="#">
													<i class="fa fa-shopping-cart"></i> Add to cart
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--------------------------end Product-------------------------->

</main>
<!--end main-->



<?php
include("template/footer.php");
?>