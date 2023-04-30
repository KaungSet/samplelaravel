    @extends("layouts.app")
            @section("style")
            <link href="assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet" />
            @endsection
            @section("wrapper")
                <div class="page-wrapper">
                    <div class="page-content">
                        <div class="row">
                            <div class="col-xl-9 mx-auto">
                                <h6 class="mb-0 text-uppercase">Guess EPC ON/OFF</h6>
                                <hr/>
                                <div class="card">
                                <!-- result alert box -->
                                    <div class="card-body">
                                    @if(!empty($epcon) && !empty($currdate))
                                    <div class="alert alert-info border-0 bg-info alert-dismissible fade show py-2">
                                        <div class="d-flex align-items-center">
                                            <div class="font-35 text-dark"><i class='bx bx-info-square'></i>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 text-dark">{{$currdate}} {{$epcon}}</h6>
                                                
                                            </div>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                <!-- /result alert box -->
                                        <form action="{{route('calguess')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="done">Please Select The Date For Morning EPC ON</label>
                                            <input class="form-control form-control-lg mb-3" name='done' type="date" placeholder="Select a date" aria-label=".form-control-lg example">
                                        </div>

                                        <div class="form-group"> 
                                            <label for="done">Please Select The Date For You Know</label>
                                            <input class="form-control form-control-lg mb-3" name='dtwo' type="date" placeholder="Select a date" aria-label=".form-control-lg example">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary rounded">Calculate</button>
                                        </form>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            @endsection

        @section("script")
        <script src="assets/plugins/input-tags/js/tagsinput.js"></script>
        @endsection
