<?php
$page = file_get_contents('http://steamcommunity.com/id/zaxar162/');
preg_match("/<div class=['\"]profile_in_game_header['\"]>([^>]*)<\/div>/ui",$page,$matches);
if (array_key_exists(1,$matches))
If ($matches[1] == 'Currently Offline') 
$s =  'Оффлайн';
Else
$s = 'Онлайн';
If ($matches[1] == 'Currently In-Game')
$s = 'В игре';
$page1 = file_get_contents('http://steamcommunity.com/id/zaxar162/');
preg_match("/<div class=['\"]profile_in_game_name['\"]>([^>]*)<\/div>/ui",$page1,$matches1);
if (array_key_exists(1,$matches1))
$g = ': '.$matches1[1].'';
If ($s == 'Оффлайн')
$i = ' ↪Жду ваших сообщений 😉';
If ($s == 'Онлайн')
$i = '  ↪Сижу в стиме, го играть?';
If ($s == 'В игре')
$i = $g;
	$getFollowers = curl('users.getFollowers?user_id=245410942&count=1&fields=photo_50,first_name,last_name&v=5.73');
	echo $getFollowers;

	
	$json = curl('messages.get?access_token=c7f2040aa38598354567a92482a294cf7cdcc9114ea8abfd45da17a28cb9ed379891f5e857f85684cb64f'); $countM = $json['0'];
	function curl($method) {
	$ch = curl_init('https://api.vk.com/method/'.$method);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	$response = curl_exec($ch);
	curl_close($ch);
	$json = json_decode($response, true);
	if($json['error']['error_msg']) {
		return $json['error'];
	} else {
		return $json['response'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>KURT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="/assets/images/icon.png">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="/assets/css/kurt.css">
<link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<script src="/assets/js/jquery.js"></script> 
  <style>
   html { overflow:  hidden; }
   div { height:  2000px; }
  </style>
</head>
<body>
<div id="wrapper">
      <video autoplay="1" loop="" id="player">
            <source src="vid/2.mp4" type="video/mp4">
             </video> 
		<div id="wrapper" style="position: relative; ">
	    <p class="soin1">KURT</p>
	    <br>
	    <center>
	     <span id="typed-text"></span>
	      <p style=" font-size:20px ;  color: white">Steam: <? echo $s ?></p>
	    </center>
   	</div> 
	    <div class="vadim animated zoomIn" style="animation-delay: 1s;">
		<a href="https://vk.com/vkazri" target="_blank"><img src="/assets/images/vk-logo.svg" width="45"></a>
		<a href="http://steamcommunity.com/id/Kazri" target="_blank"><img src="/assets/images/steam-logo.svg" width="45"></a>
		<a href="https://vk.com/vkazri" target="_blank"><img src="/assets/images/instagram-logo.svg" width="45"></a>
	</div>
	<p style="position: fixed; bottom: 20px; right: 10px; color: white">Спасибо за подписку: <? echo $followers ?></p>
<p style="position: fixed; bottom: 20px; left: 10px; color: white"><img src="" style="width: 5%;
    height: auto;"> 📝<? echo $countM ?></p>
<p style="position: fixed; bottom: 20px; left: 80px; color: white"><img src="" style="width: 5%;
    height: auto;"> 📨10302</p>
    <p style="position: fixed; bottom: 20px; left: 145px; color: white"><img src="" style="width: 5%;
    height: auto;"> 📥ахуенный❤💦😏</p>

</div>	
<script src="/assets/js/typed.min.js"></script>
<script>
	var typed2 = new Typed('#typed-text', {
		strings: ['Всем привет', 'Добро пожаловать на сайт', 'Приятного просмотра '],
		typeSpeed: 30,
		backSpeed: 20,
		loop: true
	});
</script>
</body>
</html>