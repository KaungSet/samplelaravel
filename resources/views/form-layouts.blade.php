		@extends("layouts.app")
		@section("wrapper")
            <div class="page-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-xl-7 mx-auto">
                            <h6 class="mb-0 text-uppercase">Form with icons</h6>
                            <hr/>
                            <div class="card border-top border-0 border-4 border-danger">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                                        </div>
                                        <h5 class="mb-0 text-danger">User Registration</h5>
                                    </div>
                                    <hr>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputLastName1" class="form-label">First Name</label>
                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                                <input type="text" class="form-control border-start-0" id="inputLastName1" placeholder="First Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputLastName2" class="form-label">Last Name</label>
                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                                <input type="text" class="form-control border-start-0" id="inputLastName2" placeholder="Last Name" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputPhoneNo" class="form-label">Phone No</label>
                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-microphone' ></i></span>
                                                <input type="text" class="form-control border-start-0" id="inputPhoneNo" placeholder="Phone No" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-message' ></i></span>
                                                <input type="text" class="form-control border-start-0" id="inputEmailAddress" placeholder="Email Address" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Choose Password</label>
                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open' ></i></span>
                                                <input type="text" class="form-control border-start-0" id="inputChoosePassword" placeholder="Choose Password" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock' ></i></span>
                                                <input type="text" class="form-control border-start-0" id="inputConfirmPassword" placeholder="Confirm Password" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress3" class="form-label">Address</label>
                                            <textarea class="form-control" id="inputAddress3" placeholder="Enter Address" rows="3"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck2">
                                                <label class="form-check-label" for="gridCheck2">Check me out</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-danger px-5">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-xl-9 mx-auto">
                            <h6 class="mb-0 text-uppercase">Horizontal Form</h6>
                            <hr/>
                            <div class="card border-top border-0 border-4 border-info">
                                <div class="card-body">
                                    <div class="border p-4 rounded">
                                        <div class="card-title d-flex align-items-center">
                                            <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                            </div>
                                            <h5 class="mb-0 text-info">User Registration</h5>
                                        </div>
                                        <hr/>
                                        <div class="row mb-3">
                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Your Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Your Name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Phone No</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputPhoneNo2" placeholder="Phone No">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email Address</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="inputEmailAddress2" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Choose Password</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="inputChoosePassword2" placeholder="Choose Password">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Confirm Password</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="inputConfirmPassword2" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputAddress4" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="inputAddress4" rows="3" placeholder="Address"></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputAddress4" class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck4">
                                                    <label class="form-check-label" for="gridCheck4">Check me out</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn btn-info px-5">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
		@endsection



