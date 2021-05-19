<?php session_start(); ?>

<!-- <?php
$item_id = isset($_GET['item_id']);
?> -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>お気に入り画面</title>
	<link rel="stylesheet" href="style.css">
</head>

<body style="color:black">
	
	<?php
	if (isset($_SESSION['user'])) {
		//MySQLデータベースに接続する
		require 'db_connect.php';
    

		//SQL文を作る（プレースホルダを使った式）
		$sql = 'insert into wishlist values(:user_id,:item_id)';
		//プリペアードステートメントを作る
		$stm = $pdo->prepare($sql);
		//プリペアードステートメントに値をバインドする
		$stm->bindValue(':user_id', $_SESSION['user']['user_id'], PDO::PARAM_STR);
	    $stm->bindValue(':item_id', $_REQUEST['id'], PDO::PARAM_STR);
		//SQL文を実行する
		$stm->execute();
	?>
		お気に入りに商品を追加しました。
		<hr>
	<?php require 'favorite.php';
	} else {
	?>
		お気に入りに商品を追加するには、ログインしてください。
	<?php
	}
	?>
</body>

</html>