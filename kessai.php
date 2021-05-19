<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>決済ページ</title>
</head>
<body>
  <div class="siharaigrp">
  <h2>支払い方法を選んでください</h2>
  

  <form>
  <div class="siharai">
  <div class="select">
  <label><input type="radio" name="maker" value="" onclick="Switch()"　checked="checked">現金</label>
  </div>


  <div id="pla">
  <div class="select">
  <input type="radio" name="place" style="margin-left:20px"><label>コンビニ支払い</label>
  </div>

  <div class="select">
  <input type="radio" name="place" style="margin-left:20px"><label>プリペイド番号を入力</label>
  <input type="text" placeholder="番号を入力してください" name="">
  </div>
  
  </div>

  
  <label><input type="radio" name="maker" value="" onclick="Switch()">クレジットカード</label>
  

  <div id="kureka">
  <input type="text" placeholder="番号を入力してください" name=""></div>
  </div>
  
  </form>
  
  
<!-- <button type="button" onclick="location.href='kakutei.php'">次へ</button> -->
<a href="personalinfomation.php" class="btn-next" style="margin-left: 180px">戻る</a>
<a href="kakutei.php" class="btn-next" style="margin-left: 10px;">次へ</a>
  </div>


<script type="text/javascript" src="radio.js"></script>  
</body>
</html>