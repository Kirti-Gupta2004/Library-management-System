<?php

$conn=new mysqli("localhost","root","","library",3308);

$query="select *from student where std_name = '$_POST[std_name]' and Password='$_POST[Password]' ";

echo $query;
$sql_result=mysqli_query($conn,$query);

echo  "<br>";
print_r($sql_result);

if($sql_result->num_rows){
    echo "Login successful";

    $dbrow=mysqli_fetch_assoc($sql_result);
    echo "<br>";


    print_r($dbrow);
}
else{
    echo "Login Failed";
}

?>