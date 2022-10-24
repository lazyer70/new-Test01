<!DOCTYPE html>
<html lang="zh-Hant-TW">
<?php
include 'head.php';
?>
<body>
<?php 
$age=20;
$x=8;
$x0=30;
for($i=0;$i<10;$i++){
    echo "<h1>Hello world:".$i."</h1>\n";
}
$str="I am {$x}0 years old";
$str1="I am $age years old";
//output to standard ouyptu
?>
<p><?=$str ?></p>

</body>
</html>