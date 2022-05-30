<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rows and Columns</title>
</head>
<body>
    <h1>Rows and Columns</h1>
    <form action="" method="post">
        <input type="text" name="row" id="" placeholder="Enter Size Of Row"> <br><br>
        <input type="text" name="col" id="" placeholder="Enter Size Of Column"> <br> <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
    $row=$_POST["row"];
    $col=$_POST["col"];
    $table ='';
    $table.='<table border="1" height="200px">';
     for($i=0;$i<$row;$i++){
            $table.='<tr>';
                for($j=0;$j<$col;$j++){
                    $table.='<td width="50px"></td>';
                }
            $table.='</tr>';
        }
    $table.='</table>';

    echo "<br>",$table;
}
  
?>