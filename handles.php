<?php 

    //variables
    $amount = @$_POST['amount'];
    $currency1 = @$_POST['currency1'];
    $currency2 = @$_POST['currency2'];
        //if checkbox is checked, these codes will be run
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
    
    //this line is the saved rates from the net
    $file = "rates.json";
    
    //these line is to get the cached rates
    $cachedrates = file_get_contents($file);
    $rates = json_decode($cachedrates);
    

    //cache rates
    
    if (filemtime($file)+60*60*24 < time()){
        $url = "https://api.exchangerate-api.com/v4/latest/USD";
        //this line is to get rates in a json format on the net
        $response_json = @file_get_contents($url);
        if ($response_json === false){
            $cachedrates = file_get_contents($file);
        } else {$encode = json_decode(json_encode($response_json));
        $jsonrates = file_put_contents($file,$encode);
        //this line is to execute curl, don't delete        
        $output = curl_exec($handle);
        //closes curl, connection to the file from the internet
        curl_close($handle);}
        
    }
   
    
    
?>
