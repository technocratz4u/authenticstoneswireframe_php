<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Authentic Stones Checkout</title>

<?php include "header_includes.php"; ?>

<link href="<?php echo __WEB_ROOT?>/static/css/checkout.css" rel="stylesheet" />
</head>

<body>

	<?php include "header.php"; ?>

	<!-- Home page content start -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li>Checkout</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9" id="checkout">

					<div class="page-box">
						<form method="post" action="#">
						
						<div class="h3">
						  <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
						  
						  Secured Checkout
						</div>
						
	
							<ul class="nav nav-pills nav-justified">
								<li class="active"><a id="address_tab" href="#checkout-address"
									data-toggle="pill"><i class="fa fa-map-marker"></i><br>Delivery Address</a>
								</li>
								<li id="review_li" class="disabled"><a  id="review_tab" href="#checkout-review"
									data-toggle="pill"><i class="fa fa-eye"></i><br>Order
										Summary</a></li>
								<li id="payment_li" class="disabled"><a id="payment_tab" href="#checkout-payment" data-toggle="pill"><i
										class="fa fa-money"></i><br>Payment Method</a></li>
							</ul>

							<div class="tab-content">
								<div class="tab-pane fade in active" id="checkout-address">
								
								<div class="page-content " id="address">
									<div class="row">
										   <div class="col-sm-6">
												<div class="page-box">
													<h3>
														<i class="fa fa-map-marker"></i> Address 1
													</h3>
													<p>
														388 Sita Building, 4th Fl. <br>Suite 401 <br>Mahaseak
														Rd. <br>Suriyawongse, Bangrak <br>Bangkok 10500
														<br> <strong>Thailand</strong>
													</p>

													<div class="page-box-footer text-center">

														<input type="radio" name="address" value="address1">
													</div>
												</div>
											</div>
										   <div class="col-sm-6">
												<div class="page-box">
													<h3>
														<i class="fa fa-map-marker"></i> Address 2
													</h3>
													<p>
														388 Sita Building, 4th Fl. <br>Suite 401 <br>Mahaseak
														Rd. <br>Suriyawongse, Bangrak <br>Bangkok 10500
														<br> <strong>Thailand</strong>
													</p>

													<div class="page-box-footer text-center">

														<input type="radio" name="address" value="address2">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="addressbtn">
	
													<button id="addNewAddr" class="btn btn-dark">
														+ ADD NEW ADDRESS
													</button>

												</div>
											</div>
										</div>
							
								
								</div>
								
									<div class="page-content" id="newAddress" style="display: none;">
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label for="firstname">First Name</label> <input type="text"
														class="form-control" id="firstname">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="lastname">Last Name</label> <input type="text"
														class="form-control" id="lastname">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<label for="Street">Street,Colony</label> <input type="text"
														class="form-control" id="street">
												</div>
											</div>
										</div>
										
										<!-- /.row -->

										<div class="row">
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="city">Telephone</label> <input type="text"
														class="form-control" id="phone">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="zip">ZIP</label> <input type="text"
														class="form-control" id="zip">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="state">State</label> <select
														class="form-control" id="state"></select>
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="country">Country</label> <select
														class="form-control" id="country"></select>
												</div>
											</div>

											<div class="col-sm-6">
												<div class="form-group">
													<label for="phone">Email</label> <input type="text"
														class="form-control" id="email">
												</div>
											</div>
											<div class="col-sm-6">
												
											</div>

										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="addressbtn">
	
													<button id="useExiAddr" class="btn btn-dark">
														USE EXISTING ADDRESS
													</button>

												</div>
											</div>
										</div>
										<!-- /.row -->
									</div>
								</div>

								<div class="tab-pane fade" id="checkout-payment">
									<div class="page-content">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<div class="page-box">
												<h4>Paypal</h4>

													<a
														href="https://www.paypal.com/in/webapps/mpp/paypal-popup"
														title="Paypal"
														onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
														<img
																class="img-responsive"
																src='<?php echo __WEB_ROOT?>/static/img/partners_paypal.jpg'
																border="0" alt="PayPal Acceptance Mark">
													</a>

													<div class="page-box-footer text-center">

														<input type="radio" name="payment" value="payment1">
													</div>
												</div>
											</div>

										</div>
										<!-- /.row -->

									</div>
								</div>
								<div class="tab-pane fade" id="checkout-review">
									<div class="page-content">
										<div class="table-responsive">
											<table class="table">
												<thead>
													<tr>
														<th colspan="2">Product</th>
														<th>Quantity</th>
														<th>Unit price</th>
														<th>Discount</th>
														<th>Total</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><a href="#"> <img
																class="img-responsive cart-image-width"
																src='<?php echo __WEB_ROOT?>/static/img/diamond-3d.jpg'
																alt="Diamond">

														</a></td>
														<td><a href="#">Diamond Cut</a></td>
														<td>2</td>
														<td>$123.00</td>
														<td>$0.00</td>
														<td>$246.00</td>
														<td><a href="#"><i class="fa fa-trash-o"></i></a></td>
													</tr>
													<tr>
														<td><a href="#"> <img
																class="img-responsive cart-image-width"
																src='<?php echo __WEB_ROOT?>/static/img/ruby-3d.jpg'
																alt="Ruby">
														</a></td>
														<td><a href="#">Ruby Cut</a></td>
														<td>2</td>
														<td>$200.00</td>
														<td>$0.00</td>
														<td>$200.00</td>
														<td><a href="#"><i class="fa fa-trash-o"></i></a></td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<th colspan="5">Total</th>
														<th>$446.00</th>
													</tr>
												</tfoot>
											</table>

										</div>
										<!-- /.table-responsive -->
									</div>
									<!-- /.content -->

								</div>
							</div>


							<div class="page-box-footer">
								<div class="pull-left">
									<a href='<?php echo __WEB_ROOT?>/static/html/basket.jsp'
										class="btn btn-default"><i class="fa fa-chevron-left"></i>Back
										to basket</a>
								</div>
								<div class="pull-right">
									<button id="checkoutBtn" value= "chekout_address" class="btn btn-dark">
										Continue to Order Review<i class="fa fa-chevron-right"></i>
									</button>
								</div>
								<div class="clearfix"></div>
							</div>
						</form>
					</div>
					<!-- /.box -->


				</div>


				<!-- /.col-md-9 -->

				<div class="col-md-3">
					<div class="panel panel-default" id="order-summary">

						<div class="panel-heading">
							<h3 class="panel-title">Order summary</h3>
						</div>
						<div class="panel-body">
							<p class="text-muted">Shipping and additional costs are
								calculated based on the values you have entered.</p>

							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<td>Order subtotal</td>
											<th>$446.00</th>
										</tr>
										<tr>
											<td>Shipping and handling</td>
											<th>$10.00</th>
										</tr>
										<tr>
											<td>Tax</td>
											<th>$0.00</th>
										</tr>
										<tr>
											<td>Discount</td>
											<th>$5.00</th>
										</tr>
										<tr class="total">
											<td>Total</td>
											<th>$451.00</th>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

					</div>

				</div>

			</div>

		</div>
		<!-- /.container -->
	</div>
	<!-- Home page content end -->

	<?php include "footer.php"; ?>

	<?php include "footer_includes.php"; ?>
	
	 <script src="<?php echo __WEB_ROOT?>/static/js/checkout.js"></script>

</body>
</html>
