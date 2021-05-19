<?php

    session_start();

?>    
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>購入履歴</title>
</head>
<body>

<p class="midasi">購入履歴</p>

<?php



try
{


$dsn='mysql:dbname=teamec;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT item_brand,item_name,item_price,item_image,item_register FROM history WHERE 1';
$stmt=$dbh->query($sql);
$history=$stmt->fetch(PDO::FETCH_ASSOC);

$stmt->execute();



$dbh=null;



    print '<table border="1" style="margin-left:auto; margin-right:auto">';

    print "<thead>";
    print "<tr><th>メーカー</th><th>商品名</th><th>価格</th><th>イメージ</th><th>日時</th>";
    print "</thead>";


    while(true){
    $history=$stmt->fetch(PDO::FETCH_ASSOC);
    
    
	if($history==false)
	{
		break;
    }
    
    print "<tbody>";
    // foreach((array)$historys as $history){

    
    print "<tr><td>{$history['item_brand']}</td>";
    print "<td>{$history['item_name']}</td>";
    print "<td>{$history['item_price']}</td>";
    // echo '<TD><img src="img/', $history['item_image'], '"></TD>';
    // print "<td>{$history['item_image']}</td>";

    $file = $history['item_image'];
    $imgType = "image/png";
    $img = '<img src="data:'.$imgType.';base64,'.base64_encode($file).'" width="80" height="80" />';
    echo "<td>$img</td>";
    
    print "<td>{$history['item_register']}</td><tr>";
    }

    print '</table>';
	print '<br />';
 

}
catch (Exception $ex) {
    print 'もう一度やり直してください';
} 


?>

<a href="mypage.php" class="btn-next" style="margin-left: 180px">戻る<jpe/a>







    
</body>
</html>




<!-- while(true)
{
	$history=$stmt->fetch(PDO::FETCH_ASSOC);
	if($history==false)
	{
		break;
	}
    print '<table>';


    print "<thead>";
    print "<tr><th>メーカー</th><th>商品名</th><th>価格</th><th>イメージ</th><th>日時</th>";
    print "</thead>";
    
    print "<tr><th>メーカー</th><td>{$history['item_brand']}</td><tr>";
    print "<tr><th>商品名</th><td>{$history['item_name']}</td><tr>";
    print "<tr><th>価格</th><td>{$history['item_price']}</td><tr>";
    print "<tr><th>イメージ</th><td>{$history['item_image']}</td><tr>";
    print "<tr><th>日時</th><td>{$history['item_register']}</td><tr>";
    print '</table>';

	print '<br />';
 } -->
