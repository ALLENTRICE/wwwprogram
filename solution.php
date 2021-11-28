<?php
require_once "connect.php"
?>
<div class="row">
    <table class="table"style="margin:5px;">
    <thead>
        <tr>
            <th scope="colspan">#</th>
            <th scope="colspan">FIRST NAME</th>
            <th scope="colspan">SECOND NAME</th>
            <th scope="colspan">SURNAME</th>
            <th scope="colspan">AGE</th>
            <th scope="colspan">TEL.NUMBER</th>
            <th scope="colspan">REG.NUMBER</th>
            <th scope="colspan">GUARDIAN'S FULLNAME</th>
</tr>
<thead>
    <?php
    $stmt="SELECT* FROM students";
    $result=mysql_query($conn,$stmt);
    $resultcheck=mysql_num_rows($result);
    if($resultcheck>0){
        while($row=mysql_fetch_asssoc($result)){
            echo"
            <tr>
            <td>",$row["FIRST NAME"],"</td>
            <td>",$row["SECOND NAME"],"</td>
            <td>",$row["SURNAME"],"</td>
            <td>",$row["AGE"],"</td>
            <td>",$row["TEL.NUMBER"],"</td>
            <td>",$row["REG.NUMBER"],"</td>
            <td>",$row["EMAIL ADDRESS"],"</td>
            <td>",$row["GUARDIAN'S FULLNAME"],"</td>
</tr>";
        };
    };
    ?>
</table>
</div>