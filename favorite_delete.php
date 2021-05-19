<?php session_start(); ?>
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
	$sql = "delete from wishlist where user_id = :user_id and item_id = :item_id";
	//プリペアードステートメントを作る
	$stm = $pdo->prepare($sql);
	//プリペアードステートメントに値をバインドする
	$stm->bindValue(':user_id', $_SESSION['user']['user_id'], PDO::PARAM_STR);
    $stm->bindValue(':item_id', $_REQUEST['id'], PDO::PARAM_STR);
	//SQL文を実行する
	$stm->execute();
	//結果の取得（連想配列で受け取る）
	$result = $stm->fetchAll(PDO::FETCH_ASSOC);
	?>
		お気に入りから商品を削除しました。
		<hr>
	<?php
	} else {
	?>
		お気に入りから商品を削除するには、ログインしてください。
	<?php
	}
	require 'favorite.php';
	?>
</body>

</html>