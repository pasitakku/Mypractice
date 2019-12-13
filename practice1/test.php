<!doctype html>
<html>
<head>
<title>คำนวณ</title>
<meta charset="utf-8">
</head>
<body>
<?php
if(isset($_GET['sum'])){
    $number1    = $_GET['number1'];
    $sign       = $_GET['sign'];
    $number2    = $_GET['number2'];
    $sum=0;

    if($sign==1){
        $sum = $number1 + $number2;
    }else if($sign==2){
        $sum = $number1 - $number2;
    }else if($sign==3){
        $sum = $number1 * $number2;
    }else if($sign==4){
        $sum = $number1 / $number2;
    }else{
        $sum = "ERROR";
    
}
echo $sum;
}
    ?>
<form method="get" action="">

    <label>Number1</label>
    <input type ="text" name="number1" value=""><br/>
    <select name="sign">
        <option value="1">+</option>
        <option value="2">-</option>
        <option value="3">*</option>
        <option value="4">/</option>
        </select><br>
    <label>Number2</label>
    <input type ="text" name="number2" value=""><br/>
    <input type ="submit" name="sum" value="SUM">

</body>

</html>