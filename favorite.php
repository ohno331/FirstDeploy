<?php
if (isset($_SESSION['user'])){


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>お気に入り一覧</title>
</head>

<body>

    <p class="midasi">お気に入り一覧</p>

    <?php

try {


    $dsn = 'mysql:dbname=teamec;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT user_id,item_id FROM wishlist WHERE 1';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    $dbh = null;



    print '<table border="1" style="margin-left:auto; margin-right:auto">';

    print "<thead>";
    print "<tr><th>ユーザー</th><th>商品</th><th>削除</th>";
    print "</thead>";


    while (true) {
        $wishlist = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($wishlist == false) {
            break;
        }

        print "<tbody>";



        print "<td>{$wishlist['user_id']}</td>";
        print "<td>{$wishlist['item_id']}</td>";
        print "<td><a href=favorite_delete.php?id=" . $wishlist['item_id'] . ">削除</a></td>";
    }

    print '</table>';
    print '<br />';
} catch (Exception $ex) {
    print 'もう一度やり直してください';
}


    ?>

    <a href="mypage.php" class="btn-next" style="margin-left: 180px">戻る</a>

    <?php
    }
    ?>







</body>

</html>