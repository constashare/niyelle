@extends('frontend.layouts.main')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h3>Video Details</h3>
            </div>
        </div>

        <div class="row">

            {{--show video for preview--}}
            <div class="col-xs-12 col-sm-12 col-md-6 ">
                <video width="320" height="240" controls>
                    {{--<source src="{{URL::asset('/manager')}}/{{$video_path}}" />--}}
                    <source src="{{$video_path}}" />
                    Your browser does not support the video tag.
                </video>
            </div>

            {{--Video form details--}}
            <div class="col-xs-12 col-sm-12 col-md-6">
                {{Form::model($logged_in_user, ['route' => 'frontend.user.video.manager.make', 'class' =>
                'form-horizontal', 'method' => 'post'])}}
                {{ Form::token()}}
                {{ Form::hidden('video_id', $video_id) }}
                {{ Form::hidden('video_path', $video_path) }}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="md-form">
                            {{Form::label('video_title', 'Video Title')}}
                            {{Form::text('video_title', null, ['class' => 'form-control'])}}
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="md-form">
                            {{Form::label('video_hashtag', 'Video Hashtag')}}
                            {{Form::text('video_hashtag', '#example', ['class' => 'form-control'])}}
                    </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="md-form">

                            {{Form::select('video_category',
                            ['VR & 360' => 'VR & 360',
                            'Film & Animation' => 'Film & Animation',
                             'Cars & Vehicle' => 'Cars & Vehicle',
                             'Music' => 'Music',
                             'Pets & Animals' => 'Pets & Animals',
                             'Sports' => 'Sports',
                             'Travel & Events' => 'Travel & Events',
                             'Gaming' => 'Gaming',
                             'People & Blogs' => 'People & Blogs',
                             'Comedy' => 'Comedy',
                             'Entertainment' => 'Entertainment',
                             'News & Politics' => 'News & Politics',
                             'How-to & Style' => 'How-to & Style',
                             'Education' => 'Education',
                             'Science & Technology' => 'Science & Technology',
                             'Non-profits & Activism' => 'Non-profits & Activism',],
                             null, [ 'class'=>'select-wrapper mdb-select category', 'placeholder' => 'Choose category'],  'Category')}}
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="md-form">
                            {{Form::label('video_description', 'Video Description')}}
                            {{Form::textarea('video_description', null, ['class'=> 'md-textarea'])}}
                        </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        {{Form::submit('Finished', ['class'=> 'btn btn-primary waves waves-effect'])}}
                    </div>

                </div>
                </div>

                {{ Form::close() }}
            </div>

        </div>
    </div>



    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--Show example of video--}}
            {{--<div >--}}

            {{--</div>--}}
            {{--Form for video details--}}
            {{--<div class="col-xs-12 col-sm-12 col-md-6">--}}
                {{--<form>--}}
                    {{--<!--First row-->--}}
                    {{--<div class="row">--}}
                        {{--<!--First column-->--}}
                        {{--File title--}}
                        {{--<div class="col-xs-12 col-sm-12 col-md-6">--}}
                            {{--<div class="md-form">--}}
                                {{--<input type="text" name="title" id="file_title" class="form-control title">--}}
                                {{--<label for="file_title" class="">Title</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--/.First row-->--}}

                    {{--<div class="row">--}}
                        {{--<!--Second column-->--}}
                        {{--File associated hashtag--}}
                        {{--<div class="col-xs-12 col-md-6">--}}
                            {{--<div class="md-form">--}}
                                {{--<input type="text" name="hashtag" id="file_hashtag" class="form-control hashtag">--}}
                                {{--<label for="file_hashtag" class="">Hashtag</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!--Third row-->--}}
                    {{--<div class="row">--}}

                        {{--<!--First column-->--}}
                        {{--File category--}}
                        {{--<div class="col-xs-12 col-sm-12 col-md-5">--}}
                            {{--<div class="md-form">--}}
                                {{--<select class="mdb-select category" name="categories" id="file_categories">--}}
                                    {{--<option value="" disabled selected>Choose your option</option>--}}
                                    {{--<option value="Autos and Vehicles">Autos and Vehicles</option>--}}
                                    {{--<option value="Comedy">Comedy</option>--}}
                                    {{--<option value="Education">Education</option>--}}
                                    {{--<option value="Film & Animation">Film & Animation</option>--}}
                                    {{--<option value="Gaming">Gaming</option>--}}
                                    {{--<option value="Howto & Style">Howto & Style</option>--}}
                                    {{--<option value="Music">Music</option>--}}
                                    {{--<option value="News & Politics">News & Politics</option>--}}
                                    {{--<option value="Nonprofits & Activism">Nonprofits & Activism</option>--}}
                                    {{--<option value="People & Blogs">People & Blogs</option>--}}
                                    {{--<option value="Pets & Animals">Pets & Animals</option>--}}
                                    {{--<option value="Science & Technology">Science & Technology</option>--}}
                                    {{--<option value="Sports">Sports</option>--}}
                                    {{--<option value="Travel & Events">Travel & Events</option>--}}
                                {{--</select>--}}
                                {{--<label for="file_categories">Categories</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}


                    {{--</div>--}}
                    {{--<!--/.Third row-->--}}

                    {{--<!--Second row-->--}}
                    {{--<div class="row">--}}
                        {{--<!--First column-->--}}
                        {{--File descriptions--}}
                        {{--<div class="col-xs-12 col-sm-12 col-md-8">--}}

                            {{--<div class="md-form">--}}
                                {{--<textarea type="text" name="description" id="file_description" class="md-textarea description"></textarea>--}}
                                {{--<label for="file_description">Description</label>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--/.Second row-->--}}


                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}

    @endsection