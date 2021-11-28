<?php
$firstName =$_POST["firstName"];
$secondName =$_POST["secondName"];
$surname =$_POST["surname"];
$age =$_POST["age"];
$phonenumber=$_POST["phonenumber"];
$regnumber =$_POST["regnumber"];
$emailaddress =$_POST["emailaddress"];
$guardian =$_POST["guardian"];

// Database connection
                $conn=new mysqli('localhost','root','','kcamydb');

                
                if($conn->connect_error){
                    die("Connection Failed :".$conn->connect_error);
                }
                else{
                    $stmt=$conn->prepare("INSERT INTO students (firstName,secondName,surname,age,phonenumber,regnumber,emailaddress,guardian)
                    values(?,?,?,?,?,?,?,?)");
                    $stmt->bind_param("sssissss",$firstName,$secondName,$surname,$age,$phonenumber,$regnumber,$emailaddress,$guardian);
                    $stmt->execute();
                    echo"Registration Succesfull...";
                    $stmt->close();
                    $conn->close();
                }
                    
?>