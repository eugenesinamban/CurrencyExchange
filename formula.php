<?php 
        if(is_numeric(isset($_POST['amount'])) && $_POST['currency1'] === $_POST['currency2']){
            //checks if there is an input in amount AND cur1 and 2 are the same
            echo htmlentities($amount * 1 .@${"c_$currency2"}."です。");
            //if it is, amount is multiplied by 1 and adds cur2 currency
            echo "同一の単位です。";
            //it means the cur1 &2 inputs are the same
        } else{
            if (@$_POST['amount']) {
            //checks if amount is posted
                (float)$usdamount = @$amount / @$rates->rates->$currency1;
                //amount is multiplied by $from_currency1 which is first currency input
                $finalamount = $usdamount * @$rates->rates->$currency2;
                //final amount is above usd amount * cur2
                echo htmlentities(round($finalamount,2) .@${"c_$currency2"}. "です。");
                //shows final amount with cur2
                echo htmlentities($amount . @${"c_$currency1"}. "から" .@${"c_$currency2"}.
                "までのレートは" . round(@$rates->rates->$currency2,2). "です。");
                //shows rate today
               
                } else {
                    echo "ご入力お願いします";
                    //if there is no input, shows this
                    }
            }

?>
