<?php 
    // $input1 = $_GET['input1'];
    // $input2 = $_GET['input2'];
    // $sign = $_GET['sign'];
    
        if(($sign==1)&&!empty($input1)&&(!empty($input2))){
            $result = $input1 + $input2 ;
        }else if(($sign==2)&&!empty($input1)&&(!empty($input2))){
            $result = $input1 - $input2;
        }else if(($sign==3)&&!empty($input1)&&(!empty($input2))){
            $result = $input1 * $input2;
        }else if(($sign==4)&&!empty($input1)&&(!empty($input2))){
            $result = $input1 / $input2;
        }else{
            $result = "ERROR";
    
    
}
header("location: index.php?input1=$input1&input2=$input2&sign=$sign&result=$result");
    ?>