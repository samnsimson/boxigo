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
					<div class="nav nav-pills justify-content-center city-pill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-within-city-tab" data-toggle="tab" href="#nav-within-city" role="tab" aria-controls="nav-within-city" aria-selected="true"><i class="fas fa-map-signs"></i> &nbsp; Moving Within City</a>
						<a class="nav-item nav-link" id="nav-between-city-tab" data-toggle="tab" href="#nav-between-city" role="tab" aria-controls="nav-between-city" aria-selected="false"><i class="fas fa-map-marker-alt"></i> &nbsp; Moving Between Cities</a>
					</div>
				</nav>
				<div class="tab-content py-5" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-within-city" role="tabpanel" aria-labelledby="nav-within-city-tab">
						<form class="form-horizontal" class="form">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="citySelect"><i class="fas fa-map-pin"></i> &nbsp; Select City</label>
										<select class="form-control" id="citySelect">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="fromArea"><i class="fas fa-map-marker-alt"></i> &nbsp; From Area</label>
										<select class="form-control" id="fromArea">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="toArea"><i class="fas fa-map-marker-alt"></i> &nbsp; To Area</label>
										<select class="form-control" id="toArea">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="date" data-date-format="dd-mm-yyyy">
										<label><i class="far fa-calendar-alt"></i> &nbsp; Move Date</label>
										<input id="dp" class="span2 form-control" size="16" type="text" value="">
									</div>
								</div>		
							</div>
					</div>
					<div class="tab-pane fade" id="nav-between-city" role="tabpanel" aria-labelledby="nav-between-city-tab">
						<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="fromArea">From Area</label>
										<select class="form-control" id="fromArea2">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="toArea">To Area</label>
										<select class="form-control" id="toArea2">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="date" data-date-format="dd-mm-yyyy">
										<label>Move Date</label>
										<input id="dp2" class="span2 form-control" size="16" type="text" value="">
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
								<input type="checkbox" id="1bhk-item" class="hidden">
							</div>
							<div class="col">
								<button type="button" class="btn btn-block btn-radio btn-radio-1">2 BHK</button>
								<input type="checkbox" id="2bhk-item" class="hidden">
							</div>
							<div class="col">
								<button type="button" class="btn btn-block btn-radio btn-radio-1">3 BHK</button>
								<input type="checkbox" id="3bhk-item" class="hidden">
							</div>
							<div class="col">
								<button type="button" class="btn btn-block btn-radio btn-radio-1">3+ BHK</button>
								<input type="checkbox" id="3plusbhk-item" class="hidden">
							</div>
							<div class="col">
								<button type="button" class="btn btn-block btn-radio btn-radio-1">Few Items</button>
								<input type="checkbox" id="few-item" class="hidden">
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
					<form class="form-horizontal form">
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
											<input type="number" class="form-control" id="appx-distance">
										</div>
										<div class="input-group-append">
											<span class="input-group-text" id="appx-distance">Meter</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="my-5">
					<h4><span class="green"><i class="fas fa-home"></i></span> &nbsp;  New House Details</h4>
					<hr>
				</div>
				<div>
					<form class="form-horizontal form">
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
											<input type="number" class="form-control" id="appx-distance">
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
				Step Content
			</div>
			<div id="step-5" class="p-5">
				Step Content
			</div>
		</div>
	</div>

</section>


<?php require_once($_SERVER['DOCUMENT_ROOT'].'/boxigo/footer.php'); ?>