<!DOCTYPE html>
<html>
<head>
    <title>我的计算器</title>
    <meta http-equiv="content-type" content="text/html; charset=gb2312">
</head>
<body>
<form action="CalResult.php" method="post">
    <table width="300px" border="0">
        <tr>
            <td>第一个数</td>
            <td><input type="text" name="number1"></td>
        </tr>
        <tr>
            <td>第二个数</td>
            <td><input type="text" name="number2"></td>
        </tr>
        <tr>
            <td>运算符</td>
            <td>
                <select name="oper">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="计算结果">
            </td>
        </tr>
    </table>
</form>
</body>
</html>