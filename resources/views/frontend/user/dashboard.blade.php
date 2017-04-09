@extends('frontend.layouts.main')

@include('frontend.user.addons.numberConvert')

@section('content')
    {{--create new container for dashboard--}}
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <!--Card-->
                            <div class="card testimonial-card z-depth-1-half">

                                <!--Bacground color-->
                                <div class="card-up default-primary">
                                </div>

                                <!--Avatar-->
                                <div class="avatar"><img src="https://unsplash.it/80/80/?random" class="rounded-circle img-responsive">
                                </div>

                                {{--<div class="avatar"><img src="{{ $logged_in_user->avatar_URL}}" class="rounded-circle img-responsive">--}}
                                {{--</div>--}}

                                <div class="card-block">
                                    <!--Name-->
                                    <h4 class="card-title">{{ $logged_in_user->name}}</h4>
                                    <hr>
                                    <!--Quotation-->

                                    <div class="container">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a class="card-link"><strong>232323</strong><br>
                                                    posts</a></li>
                                            <li class="list-inline-item"><a class="card-link"><strong>232323</strong><br>
                                                    follows</a></li>
                                            <li class="list-inline-item"><a class="card-link"><strong>232323</strong><br>
                                                    followers</a></li>
                                        </ul>

                                    </div>

                                </div>

                            </div>
                            <!--/.Card-->
                        </div>

                    </div>
                </div>



            </div>
            <div class="col-md-6">
                <!--Card-->
                <div class="card hoverable">
                    <br/>
                    <!--Card image-->
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%282%29.jpg" alt="Card image cap">
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>
                    <!--/.Card content-->

                </div><br>
                <div class="card hoverable">
                    <br/>
                    <!--Card image-->
                    <img class="img-fluid" src="http://www.freeimageslive.com/galleries/backdrops/colourful/preview/background01328.jpg" alt="Card image cap">
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>
                    <!--/.Card content-->

                </div><br>
                <div class="card hoverable">
                    <br/>
                    <!--Card image-->
                    <img class="img-fluid" src="http://i239.photobucket.com/albums/ff238/alexmi16/sandcastlehate2.jpg" alt="Card image cap">
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
        </div>
    </div>

@endsection

