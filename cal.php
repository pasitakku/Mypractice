<?php 
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];

    if(!empty($input1) && !empty($input2)){
        $result = $input1 + $input2;
    }

header("location: index.php?input1=$input1&input2=$input2&result=$result");
    ?>