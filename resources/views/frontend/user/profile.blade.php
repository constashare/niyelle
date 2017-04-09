@extends('frontend.layouts.main')

@section('content')
    @include('_profile', array('profile'=>$profile, 'followed'=>$profile->follows, 'full'=>true))
@stop