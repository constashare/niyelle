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

                                    <!--Body-->
                                    <div class="md-form">

                                        <input type="text" id="form2" class="form-control">
                                        <label for="form2">Brand Name</label>
                                    </div>

                                        <div class="md-form">

                                            <input type="text" id="form4" class="form-control">
                                            <label for="form4">Website Url</label>
                                        </div>

                                    <div class="md-form">

                                        <input type="text" id="form4" class="form-control">
                                        <label for="form4">Street Address</label>
                                    </div>

                                        <div class="md-form">

                                            <input type="text" id="form4" class="form-control">
                                            <label for="form4">City/State</label>
                                        </div>
                                        <div class="md-form">

                                            <input type="text" id="form4" class="form-control">
                                            <label for="form4">Zip Code</label>
                                        </div>
                                        <div class="md-form">

                                            <input type="text" id="form4" class="form-control">
                                            <label for="form4">Phone Number</label>
                                        </div>

                                    <div class="text-center">
                                        <button class="btn btn-primary">Get Started</button>
                                    </div>

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

                                    {!! Form::open(['route' => 'frontend.', 'class' => 'form-horizontal']) !!}
                                    <!--Body-->
                                        <div class="md-form">

                                            <input type="text" id="form2" class="form-control">
                                            <label for="form2">Brand Name</label>
                                        </div>

                                        <div class="md-form">

                                            <input type="text" id="form4" class="form-control">
                                            <label for="form4">Website Url</label>
                                        </div>

                                        <div class="text-center">
                                            <button class="btn btn-primary">Get Started</button>
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