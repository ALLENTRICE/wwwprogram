<?php
require_once "connect.php"
?>
<div class="row">
    <table class="table"style="margin:5px;">
    <thead>
        <tr>
            <th scope="colspan">#</th>
            <th scope="colspan">firstName</th>
            <th scope="colspan">secondName</th>
            <th scope="colspan">surname</th>
            <th scope="colspan">age</th>
            <th scope="colspan">phonenumber</th>
            <th scope="colspan">regnumber</th>
            <th scope="colspan">guardian</th>
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
            <td>",$row["firstName"],"</td>
            <td>",$row["secondName"],"</td>
            <td>",$row["surname"],"</td>
            <td>",$row["age"],"</td>
            <td>",$row["phonenumber"],"</td>
            <td>",$row["regnumber"],"</td>
            <td>",$row["emailaddress"],"</td>
            <td>",$row["guardian"],"</td>
</tr>";
        };
    };
    ?>
</table>
</div>