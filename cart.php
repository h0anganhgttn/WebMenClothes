<?php
include("template/header.php");
?>

<style type="text/css">


.table-cart #table-img{
	width: 20%;
	height: 230px;
}
.table-cart #table-name{
	width: 15%;
}
.table-cart #table-price,.table-cart #table-total{
	width: 13%;
}
.table-cart #table-quantity{
	width: 25%;
}
.table-cart #table-quantity div{
	display: flex;
	justify-content: center;
}
.table-cart #table-quantity input[class="number"]{
	width: 200px;
	height: 46px;
	border-radius: 3px;
	outline: 0;
	border: 1px solid silver;
	text-align: right;
}
.table-cart #table-quantity span{
	width: 46px;
	height: 46px;
	line-height: 2;
}
.table-cart #table-del{
	width: 27%;
}
.table-cart #detail-cart{
	text-align: center;
}
.table-cart button[class="del"]{
	border: none;
    background-color: snow;
}
.table-cart #button-click{
	margin-top: 50px;
	display: flex;
	justify-content: space-between;
}

</style>


	<div class="container">
		<content>
			<div class ="news-title-myclass">
				<i class="fas fa-home"></i>
				<a href="index.php">Home</a>
				 > 
				<span><a href="news.php">Cart</a></span>  
			</div>
			<div class="col-12 table-cart">
				<div><h5>Cart</h5></div>
				<!--form reload số lượng button[type="submit"]-->
				<form >
					<table border="1px" width="100%" id="detail-cart">
						<tr>
							<td >Image			</td>
							<td >Product		</td>
							<td >Unit Price		</td>
							<td >Amount		</td>
							<td >Total	</td>
							<td >Delete			</td>
						</tr>
						<tr>
							<td id="table-img"><img src="assets/images/T-shirt1.png" width="50%"></td>
							<td id="table-name"> Men's Striped-Crewneck Cotton T-Shirt</td>
							<td id="table-price">$35.99 <span></span></td>
							<td id="table-quantity">
								<div>
									<input type="number" name="" class="number">
									<button type="submit" class="btn btn-success"><i class="fa fa-refresh"></i></button>
								</div>
							</td>
							<td id="table-total"></td>
							<td id="table-del">
								<button class="del"><i class="fa fa-times-circle btn btn-danger"></i></button>
							</td>
						</tr>
						<tr>
							<td colspan="4">Total</td>
							<td colspan="2"></td>
						</tr>
					</table>
					<div id="button-click">				
						<div >
							<button class="btn btn-danger">Continue Shopping</button>
						</div>
						<div >
							<form action="checkout.php" method="post">
								<a href="checkout.php">
									<input type="button" name="" value="Payment" id="btnCheck">
								</a>
							</form>
						</div>
					</div>
				</form>
			</div>
		</content>
	</div>


<?php
include("template/footer.php");
?>

<link rel="stylesheet" type="text/css" href="assets/css/layout.css">

<style type="text/css">
	#btnCheck{
		background-color: rgba(82,64,120,0.9) ;
		border-radius: 5px;padding: 10px;
		border: none;
	}
	#btnCheck:hover{
		background-color: #247514;
	}
</style>