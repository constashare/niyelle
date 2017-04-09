<?php
	/**
	 * Created by PhpStorm.
	 * User: Marcus
	 * Date: 4/1/2017
	 * Time: 1:00 AM
	 */
	
	require_once __DIR__.'../../vendor/autoload.php';
	
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
	use bitcodin\FtpOutputConfig;
	
	
	
	