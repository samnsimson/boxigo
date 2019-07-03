<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/boxigo/header.php'); 

?>

<section class="container">
	
	<div id="smartwizard" class="my-5">
		<ul class="nav-fill">
			<li><a href="#step-1"><h5 class="my-0 text-center">
				<span class="tab-title-icon"><i class="fas fa-map-marked-alt"></i></span></br>
				<small>Plan your move</small></h5></a>
			</li>
			<li><a href="#step-2"><h5 class="my-0 text-center">
				<span class="tab-title-icon"><i class="fas fa-home"></i></span></br>
				<small>Floor info</small></h5></a>
			</li>
			<li><a href="#step-3"><h5 class="my-0 text-center">
				<span class="tab-title-icon"><i class="fas fa-user"></i></span></br>
				<small>Contact info</small></h5></a>
			</li>
			<li><a href="#step-4"><h5 class="my-0 text-center">
				<span class="tab-title-icon"><i class="fas fa-clipboard-check"></i></span></br>
				<small>Select your item</small></h5></a>
			</li>
			<li><a href="#step-5"><h5 class="my-0 text-center">
				<span class="tab-title-icon"><i class="fas fa-receipt"></i></span></br>
				<small>Service type</small></h5></a>
			</li>
		</ul>

		<div>
			<div id="step-1" class="p-5">
				<div class="text-center mt-3 mb-5">
					<h4>Move Details</h4>
					<p>Help us get you exact quotations by furnishing localities</p>
				</div>
				<nav>
					<div class="nav nav-pills justify-content-center green-pill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-within-city-tab" data-toggle="tab" href="#nav-within-city" role="tab" aria-controls="nav-within-city" aria-selected="true"><i class="fas fa-map-signs"></i> &nbsp; Moving Within City</a>
						<a class="nav-item nav-link" id="nav-between-city-tab" data-toggle="tab" href="#nav-between-city" role="tab" aria-controls="nav-between-city" aria-selected="false"><i class="fas fa-map-marker-alt"></i> &nbsp; Moving Between Cities</a>
					</div>
				</nav>
				<div class="tab-content py-5" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-within-city" role="tabpanel" aria-labelledby="nav-within-city-tab">
						<form class="form-horizontal form form-one">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="citySelect"><i class="fas fa-map-pin"></i> &nbsp; Select City</label>
										<select class="form-control" id="citySelect" name="within-city">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="fromArea"><i class="fas fa-map-marker-alt"></i> &nbsp; From Area</label>
										<select class="form-control" id="fromArea" name="within-from-area">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="toArea"><i class="fas fa-map-marker-alt"></i> &nbsp; To Area</label>
										<select class="form-control" id="toArea" name="within-to-area">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="date" data-date-format="dd-mm-yyyy">
										<label><i class="far fa-calendar-alt"></i> &nbsp; Move Date</label>
										<input id="dp" class="span2 form-control" size="16" type="text" value="" name="within-move-date">
									</div>
								</div>		
							</div>
					</div>
					<div class="tab-pane fade" id="nav-between-city" role="tabpanel" aria-labelledby="nav-between-city-tab">
						<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="fromArea">From Area</label>
										<select class="form-control" id="fromArea2" name="between-from-area">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="toArea">To Area</label>
										<select class="form-control" id="toArea2" name="between-to-area">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="date" data-date-format="dd-mm-yyyy">
										<label>Move Date</label>
										<input id="dp2" name="between-move-date" class="span2 form-control" size="16" type="text" value="">
									</div>
								</div>		
							</div>
					</div>
				</div>
				<div class="text-center mt-3 mb-5">
					<div class="mb-5">
						<h4>House Size</h4>
						<p>Items will be grouped based on the property size.</p>
					</div>
						<div class="row">
							<div class="col">
								<button type="button" class="btn btn-block btn-radio btn-radio-1">1 BHK</button>
								<input type="checkbox" id="1bhk-item" class="hidden" name="house-size" value="1 BHK">
							</div>
							<div class="col">
								<button type="button" class="btn btn-block btn-radio btn-radio-1">2 BHK</button>
								<input type="checkbox" id="2bhk-item" class="hidden" name="house-size" value="2 BHK">
							</div>
							<div class="col">
								<button type="button" class="btn btn-block btn-radio btn-radio-1">3 BHK</button>
								<input type="checkbox" id="3bhk-item" class="hidden" name="house-size" value="3 BHK">
							</div>
							<div class="col">
								<button type="button" class="btn btn-block btn-radio btn-radio-1">3+ BHK</button>
								<input type="checkbox" id="3plusbhk-item" class="hidden" name="house-size" value="3+ BHK">
							</div>
							<div class="col">
								<button type="button" class="btn btn-block btn-radio btn-radio-1">Few Items</button>
								<input type="checkbox" id="few-item" class="hidden" name="house-size" value="Few Items">
							</div>
						</div>
					</form>
				</div>
			</div>
			<div id="step-2" class="p-5">
				<div class="text-center mt-3 mb-5">
					<h4>Move Details</h4>
					<p>Fill to get accurate quotation</p>
				</div>
				<div class="mb-5">
					<h4><span class="green"><i class="fas fa-home"></i></span> &nbsp; Existing House Details</h4>
					<hr>
				</div>
				<div>
					<form class="form-horizontal form form-two">
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="fromfloorno">Floor No</label>
									<input type="number" name="fromfloorno" class="form-control">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="from-elevator-item">Is elevator available?</label>
									<div class="row">
										<div class="col">
											<button type="button" class="btn btn-block btn-radio btn-radio-2">Yes</button>
											<input type="checkbox" name="from-elevator-item" id="from-elevator-item" value="yes" class="hidden">
										</div>
										<div class="col">
											<button type="button" class="btn btn-block btn-radio btn-radio-2">No</button>
											<input type="checkbox" name="from-elevator-item" id="from-elevator-item" value="no" class="hidden">
										</div>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="packing-item">Require packing service?</label>
									<div class="row">
										<div class="col">
											<button type="button" class="btn btn-block btn-radio btn-radio-3">Yes</button>
											<input type="checkbox" name="packing-item" id="packing-item" value="yes" class="hidden">
										</div>
										<div class="col">
											<button type="button" class="btn btn-block btn-radio btn-radio-3">No</button>
											<input type="checkbox" name="packing-item" id="packing-item" value="no" class="hidden">
										</div>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="appx-distance">Approx distance door to truck parking</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="number" name="existing-parking-distance" class="form-control" id="appx-distance">
										</div>
										<div class="input-group-append">
											<span class="input-group-text" id="appx-distance">Meter</span>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
				<div class="my-5">
					<h4><span class="green"><i class="fas fa-home"></i></span> &nbsp;  New House Details</h4>
					<hr>
				</div>
				<div>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="tofloorno">Floor No</label>
									<input type="number" name="tofloorno" class="form-control">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="from-elevator-item">Is elevator available?</label>
									<div class="row">
										<div class="col">
											<button type="button" class="btn btn-block btn-radio btn-radio-4">Yes</button>
											<input type="checkbox" name="to-elevator-item" id="to-elevator-item" value="yes" class="hidden">
										</div>
										<div class="col">
											<button type="button" class="btn btn-block btn-radio btn-radio-4">No</button>
											<input type="checkbox" name="to-elevator-item" id="to-elevator-item" value="no" class="hidden">
										</div>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="unpacking-item">Require unpacking service?</label>
									<div class="row">
										<div class="col">
											<button type="button" class="btn btn-block btn-radio btn-radio-5">Yes</button>
											<input type="checkbox" name="unpacking-item" id="unpacking-item" value="yes" class="hidden">
										</div>
										<div class="col">
											<button type="button" class="btn btn-block btn-radio btn-radio-5">No</button>
											<input type="checkbox" name="unpacking-item" id="unpacking-item" value="no" class="hidden">
										</div>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="appx-distance">Approx distance door to truck parking</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="number" name="new-parking-distance" class="form-control" id="appx-distance">
										</div>
										<div class="input-group-append">
											<span class="input-group-text" id="appx-distance">Meter</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-5">
							<div class="col">
								<div class="form-group">
									<label for="appx-distance">Any additional information?</label>
									<textarea class="form-control" name="additional-info" rows="2"></textarea>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div id="step-3" class="p-5">
				<div class="mt-3 mb-5 text-center">
					<h4>Your contact</h4>
					<p>No spam calls. No third party calls</p>
				</div>
				<div>
					<form class="form">
						<div class="row my-3">
							<div class="col">
								<div class="form-group">
									<label for="firstname">First Name</label>
									<input type="text" name="firstname" class="form-control">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="lastname">Last Name</label>
									<input type="text" name="lastname" class="form-control">
								</div>
							</div>
						</div>
						<div class="row my-3">
							<div class="col">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="phone">Phone</label>
									<input type="text" name="phone" class="form-control">
								</div>
							</div>
						</div>
						<div class="row my-3 otp-row">
							<div class="col">
								<div class="form-group">
									<label for="email">Enter OTP</label>
									<input type="text" name="otp" class="form-control">
								</div>
							</div>
							<div class="col">
								<p>Didn't receive any OTP yet? Click the button below</p>
								<button type="button" class="btn btn-light">Resend OTP</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div id="step-4" class="p-5">
				<div class="row">
					<div class="col-4">
						<div class="nav flex-column nav-pills green-pill items-pill" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
								<h4>Living Room</h4> 
								<small>Select items from Living Room</small>
							</a>
							<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
								<h4>Bed Room</h4> 
								<small>Select items from Bed Room</small>
							</a>
							<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
								<h4>Kitchen</h4> 
								<small>Select items from Kitchen</small>
							</a>
							<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
								<h4>Other</h4> 
								<small>Select items from Other Room</small>
							</a>
						</div>
					</div>
					<div class="col-8">
						<form class="form" name="items-selection">
						<div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
								<h4 class="mb-3"><span><i class="fa fa-couch"></i></span> &nbsp; Furniture</h4>
								<hr>	
								<div class="item-section mb-5">
									<ul class="row items-list list-group list-group-horizontal">
										<?php 
											foreach ($livingroomarray['furniture'] as $key) {
										?>
										<li class="col-3 mb-3">
											<label for="<?php echo $key; ?>"><?php echo $key; ?></label>
											<select class="form-control" name="<?php echo $key; ?>">
												<option value="0">0</option>
												<option value="1-3">1-3</option>
												<option value="4-6">4-6</option>
												<option value="6+">6+</option>
											</select>
										</li>
										<?php
											}
										?>
									</ul>
								</div>	
								<h4 class="mb-3"><span><i class="fa fa-bolt"></i></span> &nbsp; Electronics</h4>
								<hr>	
								<div class="item-section mb-5">
									<ul class="row items-list list-group list-group-horizontal">
										<?php 
											foreach ($livingroomarray['electronics'] as $key) {
										?>
										<li class="col-3 mb-3">
											<label for="<?php echo $key; ?>"><?php echo $key; ?></label>
											<select class="form-control" name="<?php echo $key; ?>">
												<option value="0">0</option>
												<option value="1-3">1-3</option>
												<option value="4-6">4-6</option>
												<option value="6+">6+</option>
											</select>
										</li>
										<?php
											}
										?>
									</ul>
								</div>	
							</div>
							<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
							<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
							<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<div id="step-5" class="p-5">
				<section class="pricing-area pt-100 pb-100" id="pricing">
					<div class="container">
						<div class="row">
							<div class="col-xl-4 text-center">
								<div class="single-price card">
									<div class="card-header text-white bg-success price-title">
										<h4>standard</h4>
									</div>
									<div class="card-body">
										
										<div class="price-tag">
											<h2>$25 <span>month</span></h2>
										</div>
										<div class="price-item">
											<ul class="list-group list-group-flush">
												<li class="list-group-item">100GB Monthly Bandwidth</li>
												<li class="list-group-item">100 Google AdWords</li>
												<li class="list-group-item">100 Domain Hosting</li>
												<li class="list-group-item">SSL Shopping Cart</li>
												<li class="list-group-item">24/7 Live Support</li>
											</ul>
										</div>
									</div>
									<div class="card-footer">
										<a href="" class="box-btn">purchase now</a>
									</div>
								</div>
							</div>
							<div class="col-xl-4 text-center">
								<div class="single-price card">
									<div class="card-header text-white bg-success price-title">
										<h4>professional</h4>
									</div>
									<div class="card-body">
										
										<div class="price-tag center">
											<h2>$125 <span>month</span></h2>
										</div>
										<div class="price-item">
											<ul class="list-group list-group-flush">
												<li class="list-group-item">100GB Monthly Bandwidth</li>
												<li class="list-group-item">100 Google AdWords</li>
												<li class="list-group-item">100 Domain Hosting</li>
												<li class="list-group-item">SSL Shopping Cart</li>
												<li class="list-group-item">24/7 Live Support</li>
											</ul>
										</div>
										
									</div>
									<div class="card-footer">
										<a href="" class="box-btn">purchase now</a>
									</div>
								</div>
							</div>
							<div class="col-xl-4 text-center">
								<div class="single-price card">
									<div class="card-header text-white bg-success price-title">
										<h4>business</h4>
									</div>
									<div class="card-body">
										
										<div class="price-tag">
											<h2>$225 <span>month</span></h2>
										</div>
										<div class="price-item">
											<ul class="list-group list-group-flush">
												<li class="list-group-item">100GB Monthly Bandwidth</li>
												<li class="list-group-item">100 Google AdWords</li>
												<li class="list-group-item">100 Domain Hosting</li>
												<li class="list-group-item">SSL Shopping Cart</li>
												<li class="list-group-item">24/7 Live Support</li>
											</ul>
										</div>
										
									</div>
									<div class="card-footer">
										<a href="" class="box-btn">purchase now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

</section>


<?php require_once($_SERVER['DOCUMENT_ROOT'].'/boxigo/footer.php'); ?>