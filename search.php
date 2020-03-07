<?php
include("template/header.php");
?>

<!--phần content-->
	<div class="container">
		<content>
			<div class ="news-title-myclass">
				<i class="fas fa-home"></i>
				<a href="index.php">Home</a>
				 > 
				<span><a href="product.php">Search</a></span>  
			</div>
			
			<h2>Search</h2>
			<div class="row search">
				<div class="col-12 col-lg-8">
					<div class="row">
						<div class="col-12 col-lg-3">
						<input type="text" name="" placeholder=" Enter product">
					</div>
					<div class="col-12 col-lg-3">
						<select style="background-color: #f7f7f7;">
							<option value="1"> All catagory		</option>
							<option value="2"> T-Shirts	</option>
							<option value="3"> Sweaters	</option>
							<option value="4"> Sweatshirts	</option>
							<option value="5"> Jackets & Coats	</option>
							<option value="6"> Pants & Shorts		</option>
							<option value="7"> Tracksuits	</option>
							<option value="8"> Underwear	</option>
						</select>
					</div>
					<div class="col-12 col-lg-2">
						<button type="button">Search</button>
					</div>
					</div>
				</div>
				
					
			</div>
		</content>
	</div>


<?php
include("template/footer.php");
?>

<link rel="stylesheet" type="text/css" href="assets/css/layout.css">

<style type="text/css">
.search select,.search input[type="text"],.search label,.search button{
	height: 40px;
	display: inline-block;
	margin-right: 10px;
	margin-left: 5px;
	width: 100%;
}

.search button{
	width: 100%;
	background:  #80BB35;
	color: white;
	border: none;

}
</style>