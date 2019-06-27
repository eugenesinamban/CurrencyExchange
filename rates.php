<?php 

//forexrates
    (int)$amount = @$_POST['amount'];
    $currency1 = @$_POST['currency1'];
    $currency2 = @$_POST['currency2'];
    $c_jpy = "円";
    $c_usd = "米ドル";
    $c_php = "フィリピンペソ";
    $c_cad = "カナダドル";
    $c_krw = "韓国ウォン";
    $c_eur = "ユーロ";
    $c_gbp = "ポンド";

    // USD RATES //

    $jpy = 107.51;
    $usd = 1;
    $php = 51.48;
    $cad = 1.32;
    $krw = 1159.5;
    $eur = 0.88;
    $gbp = 0.79;
        
    // FOREX RATE //

    $from_jpy = 0.0093;
    $from_usd = 1;
    $from_php = 0.019;
    $from_cad = 0.76;
    $from_krw = 0.00086;
    $from_eur = 1.13;
    $from_gbp = 1.27;
    
?>
