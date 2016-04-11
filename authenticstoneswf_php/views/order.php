<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Authentic Stones Orders</title>

<?php include "header_includes.php"; ?>

<link href="<?php echo __WEB_ROOT?>/static/css/order.css" rel="stylesheet" />
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
						<li>Order</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h1>Your Orders</h1>
					<hr>
				</div>
			</div>
			<div class="row rowmapping">
				<div class="col-xs-12 col-sm-2">
				
					<h4>1 order placed in</h4>
					
				</div>
				<div class="col-xs-12 col-sm-10">
				
					  <div class="dropdown">
		  				<button class="btn btn-dark dropdown-toggle" type="button" id="orderPeriod" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						     Last 30 days
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="orderPeriod">
						    <li><a href="#">Last 30 days</a></li>
						    <li><a href="#">Last 6 months</a></li>
						    <li><a href="#">All orders</a></li>
						  </ul>
						</div>
					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-default" id="order1">

						<div class="panel-heading">
										<div class="row">
											<div class="col-sm-8 col-md-11 col-lg-9">
												<h4>ORDER ID 32421424335515</h4>
												<p>
													Placed on Mon, 18th Jan'16 at 12:06pm
												</p>
											</div>
											<div
												class="col-sm-4 col-md-1 col-lg-3">
												<a class="btn btn-dark order-btn"
													href="#">ORDER DETAILS</a>
											</div>
										</div>
						</div>
						<div class="panel-body">


							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th colspan="2">Product</th>
											<th>Quantity</th>
											<th>Unit price</th>
											<th>Discount</th>
											<th>Status</th>
											<th colspan="2">Total</th>
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
											<td>2
											</td>
											<td>$123.00</td>
											<td>$0.00</td>
											<td>Delivered</td>
											<td>$246.00</td>
											
										</tr>
										<tr>
											<td><a href="#"> <img
													class="img-responsive cart-image-width"
													src='<?php echo __WEB_ROOT?>/static/img/ruby-3d.jpg'
													alt="Ruby">
											</a></td>
											<td><a href="#">Ruby Cut</a></td>
											<td>1
											</td>
											<td>$200.00</td>
											<td>$0.00</td>
											<td>Delivered</td>
											<td>$200.00</td>
											
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th colspan="6">Total</th>
											<th colspan="1">$446.00</th>
										</tr>
									</tfoot>
								</table>

							</div>
						</div>

					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-default" id="order2">

						<div class="panel-heading">
										<div class="row">
											<div class="col-sm-8 col-md-11 col-lg-9">
												<h4>ORDER ID 32421424335515</h4>
												<p>
													Placed on Mon, 18th Jan'16 at 12:06pm
												</p>
												<p>
													Total Amount Rs840
												</p>
											</div>
											<div
												class="col-sm-4 col-md-1 col-lg-3">
												<a class="btn btn-dark order-btn"
													href="#">ORDER DETAILS</a>
											</div>
										</div>
						</div>
						<div class="panel-body">
								<div class="row rowmargntop">
											<div class="col-sm-6 col-md-2">
											<a href="#"> <img
													class="img-responsive order-image-width"
													src="/static/img/diamond-3d.jpg"
													alt="Diamond">
											</a>
											</div>
											<div class="col-sm-6 col-md-4 product-headding">
											<h5 class="text-uppercase">DIAMOND CUT STONES</h5>
											<h5 class="text-uppercase">SIZE 8*5*9| QTY 3</h5>
											</div>
											<div class="col-sm-6 col-md-3">
											<h5 class="text-uppercase delivered">DELIVERED</h5>
											<p>on Fri,22 Jan 2016</p>
											</div>
											<div class="col-sm-6 col-md-3">
											   <h5>You Cannot Return or Exchange this product</h5>
											</div>
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

</body>
</html>
