<?php
if (isset($_REQUEST['button_sum'])) {
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
}
 
?>
<html>
<head>
<title>php で 足し算電卓</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>
<body>
<font size="7">一次方程式</font>
<a href="index.php">一覧に戻る</a>
<form action="LE.php" method="post">
<p>
a=<input type="text" name="a" value="<?php echo htmlspecialchars($a); ?>"> 
b=<input type="text" name="b" value="<?php echo htmlspecialchars($b); ?>"> 
<a>y=<span><?php echo htmlspecialchars($a); ?></span>x
<?php if($b>0){echo'+';}elseif($b<0){echo'-';}else{echo}?>
<span><?php echo htmlspecialchars($b); ?></span></a>
<input type="submit" name="button_sum" value="計算する">
</p>
</form>
</body>
</html>
