@extends('frontend.layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="offset-md-5 col-md-6">
                <img src="{{URL::asset('img/frontend/loading.gif')}}" style="width: 100px; height: 100px;"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <blockquote class="blockquote">
                    <p class="mb-0">Everyone has an invisible sign hanging from their neck saying, 'Make me feel important.' Never forget this message when working with people.</p>
                    <footer class="blockquote-footer">Mary Kay Ash</footer>
                </blockquote>
            </div>
        </div>
    </div>

    @endsection