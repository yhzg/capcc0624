<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form action="/capcc0624/index.php/Order/index" method="post" >
    商品名：水蜜桃<input type="hidden" name="goods" value="smt"/><br />
    价格：10元<input type="hidden" name="price" value="10"/><br />
    购买数量：
    <select>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select><br />
    <input type="submit" value="buy now">
</form>
</body>
</html>