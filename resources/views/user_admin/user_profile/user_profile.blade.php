@extends('general.layouts.app')
@section('css')
<style>

	.centerimg {
		display: block;
		margin-left: auto;
		margin-right: auto;
	}

</style>
@endsection

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">User Profile</h5>
				<!-- Row -->
				<div class="row">
					<!-- Column -->
					<div class=" col-md-6">
						<div class="row p-t-20">
							<img src="/uploads/avatars/" width="300px" height="300px" class="centerimg">
						</div>
						<div class="row p-t-25 ">
							<div class=" col-md-6 centerimg">
								{{-- <form enctype="multipart/form-data" action="/profile" method="POST"> --}}
									<input type="file" name="avatar">
									{{-- <input type="hidden" name="_token" value=""> --}}
									<input type="submit" class="pull-right btn btn-sm btn-primary">
								{{-- </form> --}}
							</div>
							<div class="card">
								{{-- <div class="card-body"> <small class="text-muted">Email address </small>
									<h6>hannagover@gmail.com</h6> <small class="text-muted p-t-30 db">Phone</small>
									<h6>+91 654 784 547</h6> <small class="text-muted p-t-30 db">Address</small>
									<h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
									<div class="map-box">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div> <small class="text-muted p-t-30 db">Social Profile</small>
									<br/>
									<button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
									<button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
									<button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
								</div> --}}
							</div>
						</div>	
					</div>
					<!-- Column -->
					<div class="col-md-4">
						<div class="tab-pane" id="settings" role="tabpanel">
							<div class="card-body">
								<form class="form-horizontal">

									<div class="form-group">
										<label>User Name</label>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
											</div>
											<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon11">
										</div>
									</div>

									<div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon22"><i class="ti-email"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon22">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon33"><i class="ti-lock"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon33">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label>Phone No</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon33"><i class="ti-mobile"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon33">
                                        </div>
                                    </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Column -->
	</div>
</div>
</div>
</div>
</div>

@endsection
