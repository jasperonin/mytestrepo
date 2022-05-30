<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link Bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Foo bar acitivity</title>
    <!--external CSS in PHP-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-4">
        <div class="card" style="width: 40%">
            <div class="card-header">
                Foo bar activity
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-row">
                        <div class="form-group">
                        <input type="text" name="first_number" id="first_number" placeholder="Enter First number" class="form-control" id="first_number"></input>
                        </div>
                        <div class="form-group mt-3">
                        <input type="text" name="second_number" id="second_number" placeholder="Enter Second number" class="form-control" id="second_number"></input>
                        </div>
                    </div>
                    <button type="submit" value="submit" name="submit" class="btn btn-outline-success mt-3 col-md-12">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-8" id="card">
            <div class="card" style="width: 40%">
                <div class="card-header">
                    Result
                </div>
                <div class="card-text">
                    <?php
                        if(isset($_POST["submit"])){
                            $first_number = $_POST["first_number"];
                            $second_number = $_POST["second_number"];
                        
                            echo"<div class='card-text'>";
                            for(;$first_number<=$second_number;$first_number++){
                                if($first_number%3==0 && $first_number%5==0){
                                    echo "FOOBAR";
                                }
                                else if($first_number%3==0){
                                    echo " "."FOO";
                                }
                                else if($first_number%5==0){
                                    echo "BAR";
                                }
                                else{
                                    echo " "."$first_number"." ";
                                }
                            }
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>
    </div>
</body>
</html>