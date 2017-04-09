@extends('frontend.layouts.main')

@section('content')

    <div class="row">
        <div class="offset-md-3 col-md-6">
            <!--Form with header-->
            <div class="card z-depth-5">
                <div class="card-block">

                    <!--Header-->
                    <div class="form-header  grey-gradient">
                        <h3><i class="fa fa-lock"></i> {{ trans('labels.frontend.auth.login_box_title') }}:</h3>
                    </div>

                {{ Form::open(['route' => 'frontend.auth.login', 'class' => 'form-horizontal']) }}
                <!--Body-->
                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        {{ Form::input('email', 'email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
                        {{ Form::label('email', trans('validation.attributes.frontend.email')) }}
                        {{--<label for="form2">Your email</label>--}}
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        {{ Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
                        {{ Form::label('password', trans('validation.attributes.frontend.password')) }}

                    </div>

                    <div class="text-center">
                        {{ Form::submit(trans('labels.frontend.auth.login_button'), ['class' => 'btn btn-primary']) }}

                    </div>

                </div>

                <!--Footer-->
                <div class="modal-footer">
                    <div class="options">

                        <p>Not a member? {{ link_to_route('frontend.auth.register', trans('navs.frontend.register')) }}</p>
                        {{ link_to_route('frontend.auth.password.reset', trans('labels.frontend.passwords.forgot_password')) }}
                    </div>
                </div>
                {{ Form::close() }}
                <div class="row text-center">
                    {!! $socialite_links !!}
                </div>

            </div>
            <!--/Form with header-->
        </div>
    </div>

@endsection