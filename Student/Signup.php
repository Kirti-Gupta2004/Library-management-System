<?php

$conn=new mysqli("localhost","root","","library",3308);

mysqli_query($conn,"Insert into student(std_name,BookName,Bookcode,IssueDate,ReturnDate,Password)values('$_POST[std_name]','$_POST[BookName]','$_POST[Bookcode]',
'$_POST[IssueDate]','$_POST[ReturnDate]','$_POST[Password]')");

?>