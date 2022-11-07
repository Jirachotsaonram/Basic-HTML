<?php
        require_once("database.php");
        $sql = "select * from studen";
        $r = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_row($r)){
            echo $row[0]."<br>";
            echo $row[1]."<br>";
            echo $row[2]."<br>";
        }
        ?>