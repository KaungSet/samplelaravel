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
                                    <div class="card-body">
                                        <form action="{{route('caldate')}}" method="POST">
                                            @csrf

                                            <div class="form-group">
                                                <label for="done">Please Select For Calculation</label>
                                                <input class="form-control form-control-lg mb-3" name='dforcal' type="date" placeholder="Select a date" aria-label=".form-control-lg example">
                                            </div>
                                            
                                            <select class="form-select mb-3" aria-label="Default select example" name="selmeth">
                                            <option selected>Select Carbon methods</option>
                                            <option value="1">now()</option>
                                            <option value="2">parse()</option>
                                            <option value="3">format()</option>
                                            <option value="4">addDays()</option>
                                            <option value="5">subDays()</option>
                                            <option value="6">addHours()</option>
                                            <option value="7">subHours()</option>
                                            <option value="8">diffInDays()</option>
                                            <option value="9">isSaturday()</option>
                                            <option value="10">isSunday()</option>                                           
                                            <option value="11">isWeekend()</option>                                          
                                            <option value="12">startOfDay()</option>                                          
                                            <option value="13">endOfDay()</option>                                          
                                            <option value="14">startOfMonth()</option>                                          
                                            <option value="15">endOfMonth()</option>                                          
                                            <option value="16">CustomCarbon Method(middleOfDay())</option>                                          
                                            <option value="17">timezone()</option>                                          
                                            </select>
                                            @if(!empty($result) && !empty($methodname))
                                            
                                                <h1>Selected Date :: {{$dforcal}}</h1>
                                                <h2> Method Name :: {{$methodname}} </h2>
                                                <hr>
                                                <span>result :</span>
                                                <h2>{{$result}}</h2>
                                            @endif
                                            <button type="submit" class="btn btn-primary rounded">Calculate</button>
                                        </form>    
                                    </div>                                                                  
                                </div>
                            </div>
                        </div>
                    </div>
                        <!--end row-->
                </div>
                
@endsection

@section("script")
    <script src="assets/plugins/input-tags/js/tagsinput.js"></script>
@endsection