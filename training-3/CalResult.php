<?php
// 接收用户从 Calculator.php（对应静态页面浏览器）提交的数据
// 1、接收 number1 和 number2；REQUEST方法可以接收用户的 post 或者 get 请求数据
$number1 = $_REQUEST['number1'];
$number2 = $_REQUEST['number2'];
// 接收运算符
$oper = $_REQUEST['oper'];
$res = 0;

switch ($oper) {
    case '+':
        $res = $number1 + $number2;
        break;
    case '-':
        $res = $number1 - $number2;
        break;
    case '*':
        $res = $number1 * $number2;
        break;
    case '/':
        $res = $number1 / $number2;
        break;
    default:
        echo "运算符不正确";
        break;
}

echo "运算结果是: $res";
?>

<br>
<a href="Calculator.php">返回计算器</a>