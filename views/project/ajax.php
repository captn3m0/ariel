<?php
/**
 * This is an ajax script which returns the ajax version of the 
 * entire project directory
 * as an array
 */
if(!isset($_GET['id']))
	die("Incorrect Project ID");
include 'db_config.php';
$result=$db->query("SELECT * FROM projects where id='{$_GET['id']}'");
if(!$result)
	die("Incorrect Project ID");
$project=$result->fetch_assoc();
echo json_encode(recursiveDirectory($project['path']));


/**
 * This function recursively scans a directory
 * And returns its json formatted version
 */
function recursiveDirectory($path){
	$handle=opendir($path);
	$ret=array();
	$invalidPaths=array('.','..','.git');
	while($files=readdir($handle))
	{
		$full_path=$path.DIRECTORY_SEPARATOR.$files;
		if(!in_array($files,$invalidPaths))
		{
			
			if(is_dir($full_path))
			{
				$ret[$files]=recursiveDirectory($full_path);
			}
			else
				$ret[$files]='';
		}
	}
	return $ret;
}
