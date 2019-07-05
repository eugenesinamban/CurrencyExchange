<?php 

    //variables
    $amount = @$_POST['amount'];
    $currency1 = @$_POST['currency1'];
    $currency2 = @$_POST['currency2'];
    if (isset($_POST['cookie'])){
        @$cookie1 = setcookie("rate1",$currency1) ? $_COOKIE["rate1"] : null;
        @$cookie2 = setcookie("rate2",$currency2) ? $_COOKIE["rate2"] : null;
    }

    //rate names
    $c_JPY = "円";
    $c_USD = "米ドル";
    $c_PHP = "フィリピンペソ";
    $c_CAD = "カナダドル";
    $c_KRW = "韓国ウォン";
    $c_EUR = "ユーロ";
    $c_GBP = "ポンド";
    $c_AUD = "オーストラリアドル";
    
    //rates in an array
    $ratearray = array("JPY" => $c_JPY,"USD" => $c_USD,"PHP" => $c_PHP,"CAD" => $c_CAD,"KRW" => $c_KRW,"EUR" => $c_EUR,"GBP" => $c_GBP, "AUD" => $c_AUD);
    
    
    // CURL codes
    $handle = curl_init();
    $url = "https://api.exchangerate-api.com/v4/latest/USD";
    $file = "rates.json";
    $response_json = @file_get_contents($url);
    $cachedrates = file_get_contents($file);
    $rates = json_decode($cachedrates);
    //cache rates
    
    
?>
