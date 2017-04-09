@extends('frontend.layouts.main')

@section('content')


@endsection

@section('scripts')
    <script src="//js.pusher.com/3.0/pusher.min.js"></script>
    <script>

        Pusher.log = function(msg) {
            console.log(msg);
        };
        var pusher = new Pusher("{{env("PUSHER_KEY")}}")
        var channel = pusher.subscribe('test-channel');
        channel.bind('test-event', function(data) {
            alert(data.text);
            console.log(data);
        });
    </script>
    @endsection