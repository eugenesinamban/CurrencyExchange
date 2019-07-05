<?php 
    include "handles.php";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="common.css">
    <title>Exchange App</title>
</head>

<body>
    <div id="wrap">
        <div id="menu">
            <a href="index.php">Top</a>
            <a href="supported.php">Rates</a>
        </div>
        <div id="header">
            <h1><a href="#amount">Yogi's Money Exchange</a></h1>
        </div>
        <div id="main">
            <div class="php">updated as of: <?php 
                date_default_timezone_set('Asia/Tokyo');
                echo date("F d Y",filemtime("$file")). " " .date("H:i",filemtime("$file")) ?></div>
            <form action="index.php" method="post">
                <table border="0">
                    <tr>
                        <td>
                            <label for="amount">手元にある通貨:</label>
                        </td>
                        <td>
                            <input type="number" step="0.01" name="amount" id="amount" value="<?php echo htmlentities(isset($_POST['amount'])) ? $_POST['amount'] : '' ?>">
                        </td>
                        <td>
                            <select name="currency1">
                                <?php  
                                    //for each rate code, it shows the name
                                    foreach ($ratearray as $key => $name){
                                        //checks if cookies are set
                                            if ($cookie1 !== null){
                                            //sets cookie for rate 1, then turns it into a variable
                                            //$selected variable will only show if the rate in the cookie is equal to one of the rates
                                            $selected = ($cookie1 == $key) ? 'selected="selected"' : '';
                                            //shows that rate as selected
                                            echo '<option value="'.$key .'"'.$selected.'>' . $name . '</option>';
                                            } else {
                                            //shows the unselected rate options                                            
                                            echo '<option value="'.$key .'">' . $name . '</option>';
                                        }
                                    }
                                    ?>
                            </select>
                            を
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="currency2">
                                <?php 
                                    //for each rate code, it shows the name
                                    foreach ($ratearray as $key => $name){
                                            //checks if cookies are set
                                            if ($cookie2 !== null){
                                            //$selected variable will only show if the rate in the cookie is equal to one of the rates
                                            $selected = ($cookie2 == $key) ? 'selected="selected"' : '';
                                            //shows that rate as selected
                                            echo '<option value="'.$key .'"'.$selected.'>' . $name . '</option>';
                                        } else {
                                            //shows the unselected rate options                                            
                                            echo '<option value="'.$key .'">' . $name . '</option>';
                                        }
                                    }
                                    ?>
                            </select>
                        </td>
                        <td>に両替します</td>
                    </tr>
                </table>
                <br>
                <div id="submit">
                    <input type="checkbox" name="cookie" <?php echo isset($_POST["cookie"]) ? "checked" : ""; ?>> 選択を保存します。<br>
                    <input type="submit" value="交換します">
                </div>
            </form>
        </div>
        <div id="phpresult">
            <?php 
        include "formula.php";
            
            ?>
        </div>
        <div id="footer">
            <div id="container">
                <div id="footer-left">
                    <p>制作者をフォローする</p>
                    <!-- Place this tag where you want the button to render. -->
                    <a class="github-button" href="https://github.com/eugenesinamban" aria-label="Follow @eugenesinamban on GitHub">Follow @eugenesinamban</a><br>
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
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>
