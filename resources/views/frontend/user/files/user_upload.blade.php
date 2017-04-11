@extends('frontend.layouts.main')

@section('css_file')
    <link href="{{ URL::asset('js/plupload/jquery.ui.plupload/css/jquery.ui.plupload.css') }}" rel="stylesheet">
    @endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-12">
                <div class="col-md-6">
                    <form class="contentForm">


                        <div class="row">
                            <div class="col-xs-12  col-xs-12  col-sm-12 col-md-8">
                                <div id="filelist">Your browser doesn't have Flash, Silverlight or HTML5 support.</div>
                                <br />

                                <div id="container">
                                    <a class="btn btn-primary waves-effect" id="pickfiles" href="javascript:;">Select files</a>
                                    <a class="btn btn-primary waves-effect" id="uploadfiles" href="javascript:;">Upload</a>
                                </div>

                                <br />
                                <pre id="console"></pre>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <input name="touched" type="text" id="fileDone" />





    @endsection

@section('scripts')

    <script type="text/javascript">
        // Custom example logic

                @php
                    //
                $timestampz=time();

function generateRandomString($length = 60) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$tokenparta = generateRandomString();
$token = $timestampz*3 . $tokenparta;

                @endphp

       var getTitle = $('.h_title').attr('id');
        var getHashtag = $('.h_hashtag').attr('id');
        var getDescription = $('.h_description').attr('id');
        var getCategory = $('.h_categories').attr('id');

        var atoken = '@php echo $token @endphp';

        var uploader = new plupload.Uploader
        ({
            runtimes : 'html5,flash,silverlight,html4',

            browse_button : 'pickfiles', // you can pass in id...
            container: document.getElementById('container'), // ... or DOM Element itself

            url : "http://constashare.com/manager/upload.php",

//            multipart: true,
//            multipart_params : {"authenticity_token" : atoken, "file_title" : getTitle, "file_hashtag" : getHashtag,
//                "file_description" : getDescription, "file_category" : getCategory},

            filters : {
                max_file_size : '600mb',
                mime_types: [
                    {title : "Image files", extensions : "jpg,gif,png"},
                    {title : "Video files", extensions : "mp4,avi,mov,mkv,flv,3gp,webm"}
                ]
            },

            // Flash settings
            flash_swf_url : '/js/plupload/js/Moxie.swf',

            // Silverlight settings
            silverlight_xap_url : '/js/plupload/js/Moxie.xap',


            init: {
                PostInit: function() {
                    document.getElementById('filelist').innerHTML = '';


                    document.getElementById('uploadfiles').onclick = function() {
                        uploader.start();
                        return false;
                    };
                },

                FilesAdded: function(up, files) {
                    plupload.each(files, function(file) {
                        document.getElementById('filelist').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
                    });
                },

                UploadProgress: function(up, file) {
                    document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";

        if (file.percent === 100){
//            $('.fileDone').attr('id', "100");

            $('#fileDone').val("100");
        }

                },

                Error: function(up, err) {
                    document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
                }
            }
        });

        uploader.init();

        uploader.bind('FileUploaded', function(up, file, response) {
//            var obj = JSON.stringify(response);
            var obj = $.parseJSON(response.response);
//            var obj2 = eval(response);
            console.log(obj);
            console.log(obj["video_id"]);

//            alert(obj); // <-- is NULL
            window.location.replace("/v/edit/" + obj["video_id"] + "/"  + obj["video_path"]);
        });

    </script>

    @endsection

