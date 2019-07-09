<?php include "comment_handles.php" ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="comment.css">
    <link rel="stylesheet" href="common.css">
    <title>Exchange App</title>
</head>

<body>
    <div id="wrap">
        <div id="menu">
            <a href="index.php">Top</a>
            <a href="supported.php">Rates</a>
            <a href="comment.php">Comments</a>
        </div>
        <div id="header">
            <h1><a href="index.php#amount">Yogi's Money Exchange</a></h1>
        </div>
        <div id="main">
            <form action="mail.php" method="post">
                First Name: <input type="text" name="first_name"><br>
                Last Name: <input type="text" name="last_name"><br>
                Email: <input type="text" name="email"><br>
                Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
        <div id="footer">
            <div id="container">
                <div id="footer-left">
                    <p>制作者をフォローする</p>
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
