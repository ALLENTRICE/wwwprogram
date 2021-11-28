<?php
$FIRSTNAME =filter_input(input_post,"FIRST NAME");
$SECONDNAME =filter_input(input_post,"SECOND NAME");
$SURNAME =filter_input(input_post,"SURNAME");
$AGE =filter_input(input_post,"AGE");
$TELNUMBER =filter_input(input_post,"TEL.NUMBER");
$REGNUMBER =filter_input(input_post,"REG.NUMBER");
$EMAILADDRESS =filter_input(input_post,"EMAIL ADDRESS");
$GUARDIANSFULLNAME =filter_input(input_post,"GUARDIAN'S FULLNAME");
if(!empty($FIRSTNAME)){
    if(!empty($FIRSTNAME)){
        if(!empty($FIRSTNAME)){
            if(!empty($FIRSTNAME)){
                $host ="localhost";
                $dbusername="root";
                $dbpassword="";
                $dbname="kcamydb";
                $conn=new mysql($host,$dbusername,$dbpassword,$dbname);
                if(mysql_connect_error()){
                    die("Connect Error(".mysql_connect_errno().")".mysql_connect_error());
                }
                else{
                    $sql="INSERT INTO students (username, password)
                    values("$root,""")
                    if($conn->query($sql)){
                        echo"New record is inserted successfully";
                    }
                    else{
                        echo"Error:".$sql."<br>".$conn->error;
                    }
                   $conn->close(); 

                }
            }
            else{
                echo"Reg.number should not be empty";
                die();
            }
        }
        else{
            echo "Surname should not be empty";
            die();
        }
    }
    else{
        echo"Second name should not be empty";
        die();
    }
}
else{
    echo "Firstname should not be empty";
    die();
}
?>