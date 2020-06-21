<?php
if (isset($_REQUEST['button_sum'])) {
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $c = $a / $b;
}

?>
<html>
<head>
<title>php で 割り算電卓</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>
<body>
<font size="7">割り算電卓</font>
<a href="index.php">一覧に戻る</a>
<form action="divide.php" method="post">
<p>
<input type="text" name="a" value="<?php echo htmlspecialchars($a); ?>"> ÷
<input type="text" name="b" value="<?php echo htmlspecialchars($b); ?>"> =
<span><?php echo htmlspecialchars($c); ?></span>
<input type="submit" name="button_sum" value="計算する">
</p>
</form>
</body>
</html>
