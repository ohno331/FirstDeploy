<?php
session_start();
session_regenerate_id(true);
if(isset($_SESSION['user'])==false)
{
	print '<h2 id="midasi">ようこそゲスト様</h2>';
	print '<h3 id="kanin"><a href="login.php">会員ログイン</a></h3><br />';
	print '<br />';
}
else
{
	print '<h3>ようこそ</h3>';
	print $_SESSION['user']['first_name'];
	print ' 様 ';
	print '<br />';
}
?>





<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Mypage</title>
</head>
<body>
<p class="midasi">マイページ</p>




<div id="menu">    
<ul>
    <li><a href="favorite_show.php">お気に入り一覧</a></li>
    <li><a href="history.php">購入履歴</a></li>
    <li><a href="logout_input.php">ログアウト</a></li>
    <li><a href="index.php">ホームへ</a></li>
    </ul>
</div>    
</body>
</html>