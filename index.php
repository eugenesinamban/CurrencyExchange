<!DOCTYPE html>
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
                            <input type="number" step="0.01" name="amount" id="amount">
                        </td>
                        <td>
                            <select name="currency1">
                                <option value="jpy">円</option>
                                <option value="usd">米ドル</option>
                                <option value="php">フィリピンペソ</option>
                                <option value="cad">カナダドル</option>
                                <option value="krw">韓国ウォン</option>
                                <option value="eur">ユーロ</option>
                                <option value="gbp">ポンド</option>
                            </select>
                            を
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="currency2">
                                <option value="jpy">円</option>
                                <option value="usd">米ドル</option>
                                <option value="php">フィリピンペソ</option>
                                <option value="cad">カナダドル</option>
                                <option value="krw">韓国ウォン</option>
                                <option value="eur">ユーロ</option>
                                <option value="gbp">ポンド</option>
                            </select>

                        </td>
                        <td>に両替します</td>
                    </tr>
                </table>
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
                include "rates.php";
                include "formula.php";
   /*             $usdamount = @$amount * @${"from_$currency1"};
                if (isset($_POST['amount'])) {
                    echo @$usdamount * @${"$currency2"} .@${"c_$currency2"}. "です。";
                    echo @$amount . @${"c_$currency1"}. "から" .@${"c_$currency2"}. "までのレートは" . @${"from_$currency1"} * @${"$currency2"} . "です。";
                } else {
                    echo "ご入力お願いします";
                }*/
                
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
