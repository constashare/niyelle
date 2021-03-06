<?php
	/**
	 * Created by PhpStorm.
	 * User: Marcus
	 * Date: 4/1/2017
	 * Time: 1:00 AM
	 */
	
	require_once __DIR__.'../../../vendor/autoload.php';
	
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
	use bitcodin\JobSpeedTypes;
	use bitcodin\GCSInputConfig;
	
	echo '<pre>';
	echo $_POST['video_id'];
	echo '<br>';
	echo $_POST['video_path'];
	echo '</pre>';
	echo '<br>';
	/* CONFIGURATION */
	Bitcodin::setApiToken('89292ffa935efaa8c580d27e5b913068071a1368d996bb4e9aa6e244715e65a7'); // Your can find your api key in the settings menu. Your account
	// (rightcorner) ->
	
	$inputConfig = new HttpInputConfig();
	$inputConfig->url = $_POST['video_path'];
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
	$outputConfig->accessKey    = 'GOOGQLEWQ6GH2SVTOQVZ';
	$outputConfig->secretKey    = 'zhWLse1haB2oljkr6HoorOem5Usv3i82EA07fVT1';
	$outputConfig->bucket       =  'niyelle';
	$outputConfig->prefix       = "platform/videos/";
	$outputConfig->makePublic   = false;                            // This flag determines whether the files put on GCS will be publicly accessible via HTTP Url or not
	
	$output = Output::create($outputConfig);
	/* TRANSFER JOB OUTPUT */
	$job->transfer($output);
	
	
	
	