<?php 

  $usdamount = @$amount * @${"from_$currency1"};

    if(@$_POST['amount'] && @$_POST['currency1'] === @$_POST['currency2']){
        echo $amount * 1 .@${"c_$currency2"}."です。";
        echo "同一の単位です。";
    }else{
        if (@$_POST['amount']) {
            (int)$finalamount = $usdamount * @${"$currency2"};
            echo (int)$finalamount .@${"c_$currency2"}. "です。";
            echo $amount . @${"c_$currency1"}. "から" .@${"c_$currency2"}. 
                "までのレートは" . @${"from_$currency1"} * @${"$currency2"} . "です。";
        } else {
            echo "ご入力お願いします";
        }     
    }

?>
