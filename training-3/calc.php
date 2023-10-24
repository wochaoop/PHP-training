<!DOCTYPE html>
<html>
<head>
    <title>计算累加器</title>
</head>
<body>
<form action="" method="post">
    1+2+..+
    <input type="text" name="num" size="5">
    <input type="submit" name="submit" value="计算">
</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    $i = 1;
    $sum = 0;
    if ($num <= 2) {
        echo "<script>alert('输入的数字必须大于 2');</script>";
    } else {
        while ($i <= $num) {
            $sum += $i;
            $i++;
        }
        echo "<script>alert('1+2+..+$num = $sum');</script>";
    }
}
?>