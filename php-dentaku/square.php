<?php
if (isset($_REQUEST['button_sum'])) {
    $a = $_REQUEST['a'];
    $b = $a * $a;
}

?>
<html>
<head>
<title>php で 二乗算電卓</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>
<body>
<font size="7">二乗電卓</font>
<a href="index.php">一覧に戻る</a>
<form action="square.php" method="post">
<p>
<input type="text" name="a" value="<?php echo htmlspecialchars($a); ?>"> *
<span><?php echo htmlspecialchars($b); ?></span>
<input type="submit" name="button_sum" value="計算する">
</p>
</form>
</body>
</html>
