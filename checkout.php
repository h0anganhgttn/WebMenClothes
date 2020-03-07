<?php
include("template/header.php");
?>



<div class="container">
	<div class ="news-title-myclass">
		<i class="fas fa-home"></i>
		<a href="index.php">Home</a>
		 > 
		<span><a href="news.php">Payment</a></span>  
	</div>


	<div class="row">
		<div class="col-12 col-lg-8">
			<div class="panel panel-defaul">
				<div class="checkout-title-myclass">
					<i class="fa fa-info-circle"></i>
					Address
				</div>
				<div class="checkout-body-myclass">
					<label class="col-3">
						<b>Name</b>
					</label>
					<lable class="col-9">
						<input type="text" name="">
					</lable>
				</div>
				<div class="checkout-body-myclass">
					<label class="col-3">
						<b>Email</b>
					</label>
					<lable class="col-9">
						<input type="text" name="">
					</lable>
				</div>
				<div class="checkout-body-myclass">
					<label class="col-3">
						<b>Phone</b>
					</label>
					<lable class="col-9">
						<input type="text" name="">
					</lable>
				</div>
				<div class="checkout-body-myclass">
					<label class="col-3">
						<b>Address</b>
					</label>
					<lable class="col-9">
						<input type="text" name="">
					</lable>
				</div>
				<div class="checkout-body-myclass">
					<label class="col-3">
						<b>Note</b>
					</label>
					<lable class="col-9">
						<textarea  rows="4" style="width: 60%" placeholder="VD:">
							
						</textarea>
					</lable>
				</div>
			</div>
			

			<div class="panel panel-default">
				<div class="checkout-title-myclass">
					<i class="fa fa-credit-card"></i>
					Payment
				</div>
				<div class="payment-method">
					<label>
						<img src="assets/images/cod.png">
					</label>
					<div class="description">
						<div>
							<b>Cash on delivery(COD)</b>
						</div>
						<div class="subtitle">
							Khách hàng thanh toán bằng tiền mặt cho nhân viên giao hàng khi sản phẩm được chuyển tới địa chỉ nhận hàng
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-lg-4">
			<div class="panel panel-default">
				<div class="checkout-title-myclass">
					<i class="fa fa-shopping-cart"></i>
					Cart
				</div>
				<div class="payment-method">
					<label>
						<img src="assets/images/T-shirt1.png" style="width: 100px;height: 100px;">
					</label>
					<div class="description">
						<div>
							Product Name : Men's Striped-Crewneck Cotton T-Shirt
						</div>
						<div>
							Price : $35.99
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="checkout-title-myclass">
					<i class="fa fa-truck"></i>
					Delivery
				</div>
				<div class="payment-method">
					<div class="description" style="margin-left: 15px;font-size: 15px;">
						<div>
							<b>Delivery fee</b>
						</div>
						<div>
							Freeship
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<table style=" border: 1px solid #ddd; ">
				<tr>
						<td>Delivery fee</td>
						<td> 0đ</td>
				</tr>
				<tr>
						<td>Thành tiền</td>
						<td style="font-size: 13px;font-weight: bold;">$35.99</td>
				</tr>
				
				</table>
			</div>
			<div class="button">
				<span>
					<a href="cart.php">Back to cart</a>
				</span>
				<input type="button" name="" value="Đặt hàng" >
			</div>
			
		</div>
	</div>
</div>


<?php
include("template/footer.php");
?>

<link rel="stylesheet" type="text/css" href="assets/css/layout.css">


<style type="text/css">
	.panel{
		margin-bottom: 20px;
	    background-color: #fff;
	    border: 1px solid #ddd;
	    border-radius: 5px;
	}
	.panel-default{
		border-color: #ddd;
	}
	.checkout-title-myclass{
		padding: 10px 15px;
		margin-bottom: 1em;
	    border-bottom: 1px solid #ddd;
	    border-top-left-radius: 5px;
	    border-top-right-radius: 5px;
	    background-color: #f5f5f5;
	}
	.checkout-body-myclass{
		margin-bottom: 1em;
		margin-right: -15px;
		margin-left: 15px;
	}
	.col-9 input[type=text]{
		width: 60%;
	}
	.payment-method{
		display: flex;
		flex-direction: row;
	}
	.subtitle{
		font-size: 12px !important;
    	color: #777;
	}
	.button span a{
		color: black;	
	}
	.button span a:hover{
		color: #80BB35;
	}
	.button [type=button]{
		border: none;
		border-radius: 5px;
		padding: 10px;
		background-color: #80BB35;float: right;
	}
	.button [type=button]:hover{
		background-color: #247514;
	}

	
	

</style>