<<<<<<< HEAD <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="index.css">
        <title>Exchange App</title>
    </head>

    <body>
        <div id="wrap">
            <div id="header">
                <h1><a href="#amount">Yogi's Money Exchange</a></h1>
            </div>
            <div id="main">
                <div class="php">updated as of: <?php 
                date_default_timezone_set('Asia/Tokyo');
                echo date("y/m/d"). " " .date ("H:i") ?></div>
                <form action="index.php" method="post">
                    <table border="0">
                        <tr>
                            <td>
                                <label for="amount">手元にある通貨:</label>
                            </td>
                            <td>
                                <input type="number" step="0.01" name="amount" id="amount" value="<?php echo isset($_POST['amount']) ? $_POST['amount'] : '' ?>">
                            </td>
                            <td>
                                <select name="currency1">
                                    <option value="JPY">円</option>
                                    <option value="USD">米ドル</option>
                                    <option value="PHP">フィリピンペソ</option>
                                    <option value="CAD">カナダドル</option>
                                    <option value="KRW">韓国ウォン</option>
                                    <option value="EUR">ユーロ</option>
                                    <option value="GBP">ポンド</option>
                                </select>
                                を
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="currency2">
                                    <option value="JPY">円</option>
                                    <option value="USD">米ドル</option>
                                    <option value="PHP">フィリピンペソ</option>
                                    <option value="CAD">カナダドル</option>
                                    <option value="KRW">韓国ウォン</option>
                                    <option value="EUR">ユーロ</option>
                                    <option value="GBP">ポンド</option>
                                </select>

                            </td>
                            <td>に両替します</td>
                        </tr>
                    </table>
                    <br>
                    <div id="submit">
                        <input type="submit" value="交換します">
                    </div>
                </form>
            </div>
            <!-- PHP CODE -->
            <!-- PHP CODE -->
            <!-- PHP CODE -->
            <div id="phpresult">
                <?php 
                    //variables
    $amount = @$_POST['amount'];
    $currency1 = @$_POST['currency1'];
    $currency2 = @$_POST['currency2'];
    //rate names
    $c_JPY = "円";
    $c_USD = "米ドル";
    $c_PHP = "フィリピンペソ";
    $c_CAD = "カナダドル";
    $c_KRW = "韓国ウォン";
    $c_EUR = "ユーロ";
    $c_GBP = "ポンド";
    // CURL codes
    $handle = curl_init();
    $url = "https://api.exchangerate-api.com/v4/latest/USD";
    $response_json = file_get_contents($url);
    $rates = json_decode($response_json);
    $output =  curl_exec($handle);
    curl_close($handle);
    //Formula
    
        if(is_numeric(@$_POST['amount']) && @$_POST['currency1'] === @$_POST['currency2']){
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
                "までのレートは" . round(@$rates->rates->$currency1,2). "です。");
                //shows rate today
                } else {
                    echo "ご入力お願いします";
                    //if there is no input, shows this
                    }
    }
            ?>
            </div>
            <!-- PHP CODE -->
            <!-- PHP CODE -->
            <!-- PHP CODE -->

            <div id="footer">
                <div id="container">
                    <div id="footer-left">
                        <p>制作者をフォローする</p>
                        <a href="https://twitter.com/EugeneSinamban?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-count="false" target="_blank">Follow @EugeneSinamban</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    <div id="footer-right">
                        &copy; 2019 Eugene's Money Exchange.
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>


    </body>

    </html>
