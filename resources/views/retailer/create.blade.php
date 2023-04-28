@extends("layouts.app")
		@section("wrapper")
            <div class="page-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-xl-7 mx-auto">
                            <div class="card border-top border-0 border-4 border-danger">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                                        </div>
                                        <h5 class="mb-0 text-danger">Create Retailer</h5>
                                    </div>
                                    <hr>
                                    <form class="row g-3" action="{{url('retailer/store')}}" method="POST">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputName" class="form-label">Name</label>
                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user' ></i></span>
                                                <input type="text" name="name" class="form-control border-start-0" id="inputName" placeholder="Name" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputPhoneNo" class="form-label">Phone No</label>
                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-microphone' ></i></span>
                                                <input type="text" name="phone" class="form-control border-start-0" id="inputPhoneNo" placeholder="Phone No" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-danger px-5">Create</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		@endsection



