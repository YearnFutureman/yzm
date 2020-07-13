<?php 
header('content-type:image/jpeg');
$image=imagecreate(150, 50);
imagecolorallocate($image, 150,150,230);
$color=imagecolorallocate($image,255,0,0);
$str='0123456789abcdefghijklnmopqrstuvwxyzABCDEFGHIJKLNMOPQRSTUVWXYZ';
$text='';
for($i=0;$i<5;$i++){
	$text.=$str[rand(0,61)]."";
}
session_start();
$_SESSION['fwyzm']=$text;
imagettftext($image, 20, 6, 15, 38, $color, 
	'C:\phpStudy\PHPTutorial\WWW\yzm\fonts\BASKVILL.TTF', $text);
$color=imagecolorallocate($image,255,255,255);

for($i=0;$i<500;$i++){
		$x=rand(0,150);
		$y=rand(0,50);
		imagesetpixel($image,$x,$y,$color);
		}

imageline($image, 20, 25, 90, 15, $color);
imageline($image, 2, 30, 100, 20, $color);


imagejpeg($image);
?>