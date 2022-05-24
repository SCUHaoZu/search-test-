<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title></title>
</head>
<body>
<form name="detail" method="post" action="search.php">
    房屋類型:<input type="checkbox" name="雅房" value="private">雅房
    <input type="checkbox" name="套房(含獨立套房及分租套房)" value="suite">套房(含獨立套房及分租套房) 
    <input type="checkbox" name="家庭套房" value="family">家庭套房<br>
    其他需求(可複選):<input type="checkbox" name="冷氣" value="con">冷氣
    <input type="checkbox" name="陽台" value="balcony">陽台
    <input type="checkbox" name="冰箱" value="refrigerator">冰箱
    <input type="checkbox" name="單人床" value="single">單人床
    <input type="checkbox" name="雙人床" value="double">雙人床
    <input type="checkbox" name="可養寵" value="pet">可養寵
    <input type="checkbox" name="限男性" value="male">限男性
    <input type="checkbox" name="限女性" value="female">限女性
    <input type="checkbox" name="wifi提供" value="wifi">wifi提供<br>
    租金:<input type="checkbox" name="9999元以下" value="9">9999元以下
    <input type="checkbox" name="10000-14000元" value="1014">10000-14000元
    <input type="checkbox" name="15000-19999元" value="1519">15000-19999元
    <input type="checkbox" name="20000-24999元" value="2024">20000-24999元
    <input type="checkbox" name="25000-29999元" value="2529">25000-29999元
    <input type="checkbox" name="30000元以上" value="30000">30000元以上<br>
    <input type="submit" value="送出">
    <a href="region.php">返回上一頁</a>
</form>
<?php//校區判斷?>
</body>
</html>