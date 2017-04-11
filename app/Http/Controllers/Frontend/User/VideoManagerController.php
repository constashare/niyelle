<?php

namespace App\Http\Controllers\Frontend\User;

use bitcodin\JobSpeedTypes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Bitmovin encoding

use bitcodin\Bitcodin;
use bitcodin\VideoStreamConfig;
use bitcodin\AudioStreamConfig;
use bitcodin\Job;
use bitcodin\JobConfig;
use bitcodin\Input;
use bitcodin\HttpInputConfig;
use bitcodin\EncodingProfile;
use bitcodin\EncodingProfileConfig;
use bitcodin\ManifestTypes;
use bitcodin\Output;
use bitcodin\GcsOutputConfig;
use bitcodin\GCSInputConfig;

class VideoManagerController extends Controller
{
    //
	public function index($video_id, $video_path)
	{
		return view('frontend.user.video', [
			'video_id' => $video_id,
			'video_path' => 'http://constashare.com/manager/'. base64_decode($video_path),
		]);
	}
	
	public function make(Request $request){
		echo '<pre>';
		echo $request['video_id'];
		echo '<br>';
		echo $request['video_path'];
		echo '</pre>';
		echo '<br>';
		/* CONFIGURATION */
		Bitcodin::setApiToken(env('BM_API_KEY')); // Your can find your api key in the settings menu. Your account
		// (rightcorner) ->
		
		$inputConfig = new HttpInputConfig();
		$inputConfig->url = 'http://constashare.com/manager/uploads/zXAQepW8S-lH.mp4';
		echo 'here';
		$input = Input::create($inputConfig);
		$inputConfig->url;
		var_dump($inputConfig);
		$encodingProfileConfig = new EncodingProfileConfig();
		$encodingProfileConfig->name = 'MyApiTestEncodingProfile';
		/* CREATE VIDEO STREAM CONFIGS */
		$videoStreamConfig1 = new VideoStreamConfig();
		$videoStreamConfig1->bitrate = 4800000;
		$videoStreamConfig1->height = 1080;
		$videoStreamConfig1->width = 1920;
		$encodingProfileConfig->videoStreamConfigs[] = $videoStreamConfig1;
		$videoStreamConfig2 = new VideoStreamConfig();
		$videoStreamConfig2->bitrate = 2400000;
		$videoStreamConfig2->height = 720;
		$videoStreamConfig2->width = 1280;
		$encodingProfileConfig->videoStreamConfigs[] = $videoStreamConfig2;
		$videoStreamConfig3 = new VideoStreamConfig();
		$videoStreamConfig3->bitrate = 1200000;
		$videoStreamConfig3->height = 480;
		$videoStreamConfig3->width = 854;
		$encodingProfileConfig->videoStreamConfigs[] = $videoStreamConfig3;
		/* CREATE AUDIO STREAM CONFIGS */
		$audioStreamConfig = new AudioStreamConfig();
		$audioStreamConfig->bitrate = 128000;
		$encodingProfileConfig->audioStreamConfigs[] = $audioStreamConfig;
		/* CREATE ENCODING PROFILE */
		$encodingProfile = EncodingProfile::create($encodingProfileConfig);
		$jobConfig = new JobConfig();
		$jobConfig->encodingProfile = $encodingProfile;
		$jobConfig->input = $input;
		$jobConfig->manifestTypes[] = ManifestTypes::M3U8;
		$jobConfig->manifestTypes[] = ManifestTypes::MPD;
		$jobConfig->speed = JobSpeedTypes::STANDARD;
		/* CREATE JOB */
		$job = Job::create($jobConfig);
		/* WAIT TIL JOB IS FINISHED */
		do{
			$job->update();
			sleep(1);
		} while($job->status != Job::STATUS_FINISHED && $job->status != Job::STATUS_ERROR);
		$manifestInfo = Job::getManifestInfo($job->jobId);
		var_dump($manifestInfo);
		
		
		/* CREATE OUTPUT CONFIG  */
		$outputConfig = new GcsOutputConfig();
		$outputConfig->name         = "TestGcsOutput";
		$outputConfig->accessKey    = env('GCS_ACCESS_KEY');
		$outputConfig->secretKey    = env('GCS_SECRET_KEY');
		$outputConfig->bucket       =  env('GCS_BUCKET_NAME');
		$outputConfig->prefix       = "platform/videos/";
		$outputConfig->makePublic   = false;                            // This flag determines whether the files put on GCS will be publicly accessible via HTTP Url or not
		
		$output = Output::create($outputConfig);
		/* TRANSFER JOB OUTPUT */
		$job->transfer($output);
		
	}
}
