<?php
$fileNames = $_POST['filename'];
$removeSpaces = str_replace(" ", "", $fileNames);
$allFileNames = explode(",", $removeSpaces);
$countAllNames = count($allFileNames);

for($i=0; $i < $countAllNames; $i++){
	if(file_exists("uploads/Gallery/".$allFileNames[$i]) == false){
		header("Location: class.php?deleteerror");
		exit();
	}
}
for($i=0; $i < $countAllNames; $i++){
	$path = "uploads/Gallery/".$allFileNames[$i];
	if(!unlink($path)){
		echo "You have an error!";
		exit();
	}
}
header("Location: class.php?deletesuccess");