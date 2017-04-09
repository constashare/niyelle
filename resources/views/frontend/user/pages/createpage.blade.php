@extends('frontend.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    {{--<div class="col-md-6">--}}
                    {{--<!--Panel-->--}}
                    {{--<div class="card card-block">--}}
                    {{--<h4 class="card-title">Welcome {{ $logged_in_user->name }}</h4>--}}
                    {{--<p class="card-text">Please fill out the form below to create your brand page.</p>--}}
                    {{--<div class="flex-row">--}}

                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--/.Panel-->--}}
                    {{--</div>--}}
                    <div class="col-md-6 offset-md-3">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-2 md-pills pills-ins" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#panelStorefront" role="tab"><i
                                            class="fa
                                fa-building"></i> Storefront</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panelWebbased" role="tab"><i class="fa
                                fa-laptop"></i> Web-based</a>
                            </li>

                        </ul>

                        <!-- Tab panels -->
                        <div class="tab-content">

                            <!--Panel section for storefront type businesses-->
                            <div class="tab-pane fade in show active" id="panelStorefront" role="tabpanel">
                                <br>

                                <!--Naked Form-->
                                <div class="card-block">

                                {{--<!--Header-->--}}
                                {{--<div class="text-center">--}}
                                {{--<h3><i class="fa fa-lock"></i> Local Business:</h3>--}}
                                {{--<hr class="mt-2 mb-2">--}}
                                {{--</div>--}}

                                {{ Form::open(['route' => 'frontend.user.brand.create', 'class' =>
                            'form-horizontal']) }}
                                {{ Form::token()}}
                                <!--Body-->
                                    <div class="md-form">

                                        <input type="text" id="form2" class="form-control">
                                        <label for="form2">Brand Name</label>
                                    </div>
                                    <div class="md-form">
                                        {{Form::label('brand_name', 'Brand name')}}
                                        {{Form::text('brand_name', null, ['class' => 'form-control'])}}
                                    </div>


                                    <div class="md-form">
                                        {{Form::label('brand_website_url', 'Website link')}}
                                        {{Form::text('brand_website_url', null, ['class' => 'form-control'])}}
                                    </div>


                                    <div class="md-form">
                                        {{Form::label('brand_street_address', 'Street address')}}
                                        {{Form::text('brand_street_address', null, ['class' => 'form-control'])}}
                                    </div>

                                    {{--<div class="md-form">--}}

                                        {{--<input type="text" id="form4" class="form-control">--}}
                                        {{--<label for="form4">City/State</label>--}}
                                    {{--</div>--}}

                                    {{--<div class="md-form">--}}
                                        {{--{{Form::label('brand_city_state', 'Video Title')}}--}}
                                        {{--{{Form::text('video_title', null, ['class' => 'form-control'])}}--}}
                                    {{--</div>--}}


                                    <div class="md-form">
                                        {{Form::label('brand_zip_code', 'Zip code')}}
                                        {{Form::text('brand_zip_code', null, ['class' => 'form-control', 'pattern' => '[0-9]*', 'maxlength'=> '5', 'title' => '5 digit zip code only'])}}
                                    </div>

                                    <div class="md-form">
                                        {{Form::label('brand_phone_number', 'Phone number')}}
                                        {{Form::text('brand_phone_number', null, ['class' => 'form-control'])}}
                                    </div>

                                    <div class="text-center">
                                        <button class="btn btn-primary">Get Started</button>
                                        {{Form::submit('Get Started', ['class'=> 'btn btn-primary waves waves-effect'])}}
                                    </div>

                                    {!! Form::close() !!}

                                </div>

                                <!--Footer-->
                                <div class="modal-footer">
                                    <div class="options">
                                        <a href="#">Constashare Pages Terms</a>

                                    </div>
                                </div>
                                <!--Naked Form-->

                            </div>
                            <!--/.Panel 1-->

                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panelWebbased" role="tabpanel">
                                <br>

                                <!--Naked Form-->
                                <div class="card-block">

                                {{--<!--Header-->--}}
                                {{--<div class="text-center">--}}
                                {{--<h3><i class="fa fa-lock"></i> Brand Online:</h3>--}}
                                {{--<hr class="mt-2 mb-2">--}}
                                {{--</div>--}}

                                {{ Form::open(['route' => 'frontend.user.brand.create', 'class' =>
                                'form-horizontal']) }}
                                <!--Body-->
                                    <div class="md-form">
                                        {{Form::text('brand_name', null, ['class' => 'form-control'])}}
                                        {{Form::label('brand_name', 'Brand name')}}
                                        {{--<input type="text" id="form2" class="form-control">--}}
                                        {{--<label for="form2">Brand Name</label>--}}
                                    </div>

                                    <div class="md-form">
                                        {{Form::text('brand_website_url', null, ['class' => 'form-control'])}}
                                        {{Form::label('brand_website_url', 'Brand website url')}}
                                        {{--<input type="text" id="form4" class="form-control">--}}
                                        {{--<label for="form4">Website Url</label>--}}
                                    </div>

                                    <div class="text-center">
                                        {{Form::submit('Get started', ['class'=> 'btn btn-primary waves waves-effect'])}}
                                    </div>
                                    {!! Form::close() !!}


                                </div>

                                <!--Footer-->
                                <div class="modal-footer">
                                    <div class="options">
                                        <a href="#">Constashare Pages Terms</a>
                                    </div>
                                </div>
                                <!--Naked Form-->

                            </div>
                            <!--/.Panel 2-->

                        </div>
                        <!--/.Panel 4-->

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<!--Naked Form-->--}}
    {{--<div class="card-block">--}}

    {{--<!--Header-->--}}
    {{--<div class="text-center">--}}
    {{--<h3><i class="fa fa-suitcase"></i> Create Page:</h3>--}}
    {{--<hr class="mt-2 mb-2">--}}
    {{--</div>--}}

    {{--<!--Body-->--}}
    {{--<div class="md-form">--}}

    {{--<input type="text" id="form2" class="form-control">--}}
    {{--<label for="form2">Brand name</label>--}}
    {{--</div>--}}

    {{--<div class="md-form">--}}
    {{--<select class="mdb-select">--}}
    {{--<option value="" disabled selected>Choose your option</option>--}}
    {{--<option value="accommodations">Accommodations</option>--}}
    {{--<option value="Accounting">Accounting</option>--}}
    {{--<option value="Advertising">Advertising</option>--}}
    {{--<option value="Aerospace">Aerospace</option>--}}
    {{--<option value="Agriculture">Agriculture</option>--}}
    {{--<option value="Air_Transportation">Air Transportation</option>--}}
    {{--<option value="Apparel&Accessories">Apparel & Accessories</option>--}}
    {{--<option value="Auto">Auto</option>--}}
    {{--<option value="Banking">Banking</option>--}}
    {{--<option value="Beauty&Cosmetics">Beauty & Cosmetics</option>--}}
    {{--<option value="Biotechnology">Biotechnology</option>--}}
    {{--<option value="Chemical">Chemical</option>--}}
    {{--<option value="Consulting">Consulting</option>--}}
    {{--<option value="Consumer_Products">Consumer Products</option>--}}
    {{--<option value="Education">Education</option>--}}
    {{--<option value="Employment">Employment</option>--}}
    {{--<option value="Energy">Energy</option>--}}
    {{--<option value="Entertainment&Recreation">Entertainment & Recreation</option>--}}
    {{--<option value="Fashion">Fashion</option>--}}
    {{--<option value="Financial_Services">Financial Services</option>--}}
    {{--<option value="Fine_Arts">Fine Arts</option>--}}
    {{--<option value="Food&Beverage">Food & Beverage</option>--}}
    {{--<option value="Health">Health</option>--}}

    {{--</select>--}}
    {{--<label>Brand industry</label>--}}
    {{--</div>--}}


    {{--<div class="text-center">--}}
    {{--<button class="btn btn-deep-purple">Login</button>--}}
    {{--</div>--}}

    {{--</div>--}}

    {{--<!--Footer-->--}}
    {{--</div>--}}
    {{--</div>--}}

@endsection

@section('scripts')
    <script>

        $(function(){ // this will be called when the DOM is ready
            $('#brand_zip_code').keyup(function() {
//                alert('Handler for .keyup() called.');

                var el = $(this);

                if ((el.val().length == 5) && (is_int(el.val()))) {
                        var input = el.val();
                        alert(input);
                    // Make Ajax call, etc
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "http://api.zippopotam.us",
                        cache: false,
                        dataType: "json",
                        type: "GET",
                        data: "/us/ "+ input,
                        success: function(result, success) {

//

                            console/log(result);

                        },
                        error: function(result, success) {

                            $(".zip-error").show(); /* Ruh row */

                        }

                    });
                }

                function is_int(value){
                    if ((parseFloat(value) == parseInt(value)) && !isNaN(value)) {
                        return true;
                    } else {
                        return false;
                    }
                }

            });
        });

    </script>
    @endsection