<?php
	header('Content-Type: application/json');
	
	
	function randomName() {
		$length = 12;
		$chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-!_^#";
		$str = "";
		
		for ($i = 0; $i < $length; $i++) {
			$str .= $chars[mt_rand(0, strlen($chars) - 1)];
		}
		
		return $str;
	}
	function randomString() {
		$length = 18;
		$chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$str = substr(base64_encode(sha1(mt_rand())), 0, 16);
		
		for ($i = 0; $i < $length; $i++) {
			$str .= $chars[mt_rand(0, strlen($chars) - 1)];
		}
		
		return $str;
	}
	
	
//	$my_id = 234608763428935; // get the ID from MySQL for example;
	$base62_file_name = randomName();
	
	if(empty($_POST)){
		die('{"OK" : 0, "info": "Cannot have empty inputs."}');
	}
	
//	echo "<pre>";
//	var_dump($_POST);
//	echo "</pre>";
//
//	echo "<pre>";
////	echo $_POST['file_title'];
//	echo "</pre>";
//
	
	if (empty($_FILES) || $_FILES['file']['error']) {
		die('{"OK": 0, "info": "Failed to move uploaded file."}');
	}
	
	$chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
	$chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
	
	$fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : $_FILES["file"]["name"];
	$filePath = "uploads/$fileName";


// Open temp file
	$out = @fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
	if ($out) {
		// Read binary input stream and append it to temp file
		$in = @fopen($_FILES['file']['tmp_name'], "rb");
		
		if ($in) {
			while ($buff = fread($in, 4096))
				fwrite($out, $buff);
		} else
			die('{"OK": 0, "info": "Failed to open input stream."}');
		
		@fclose($in);
		@fclose($out);
		
		@unlink($_FILES['file']['tmp_name']);
	} else
		die('{"OK": 0, "info": "Failed to open output stream."}');


// Check if file has been uploaded
	if (!$chunks || $chunk == $chunks - 1) {
		
		$ext = pathinfo($filePath, PATHINFO_EXTENSION);
		$newPath = "uploads/" . $base62_file_name ."." . $ext;
		// Strip the temp .part suffix off
		rename("{$filePath}.part", $newPath);
	}
	

	
	$id = randomString();
	
	$baseEncode = base64_encode($newPath);
	
	$jsonAnswer = array('video_path' => $baseEncode, 'video_id' => $id);

	echo json_encode($jsonAnswer);

	
//	die('{"OK": 1, "info": "Upload successful."}');