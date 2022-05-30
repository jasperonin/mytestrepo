<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Form sample</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container ml-5 mt-5 bg-light">
        <form action="" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" id="FullName" placeholder="John Doe" required></input>
                </div>
                <div class="form-group col-md-6">
                    <label for="civil_status">Civil Status</label>
                    <select id="civil_status" name="civil_status" class="form-control">
                        <option value="" disabled selected>Select Civil Status</option>
                        <option value="Married">Married</option>
                        <option value="Single">Single</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="position">Position</label>
                    <select id="position" name="position" class="form-control">
                        <option value="" disabled selected>Position</option>
                        <option value="Admin">Admin</option>
                        <option value="Staff">Staff</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="employment_status">Employment Status</label>
                    <select id="employment_status" name="employment_status" class="form-control">
                        <option value="" disabled selected>Employment Status</option>
                        <option value="Contractual">Contractual</option>
                        <option value="Probationary">Probationary</option>
                        <option value="Regular">Regular</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="regular_hours_rendered">Regular Hours Rendered</label>
                    <input type="number" name="regular_hours_rendered" min="0" id="regular_hours_rendered" class="form-control" required></input>
                </div>
                <div class="form-group col-md-6">
                    <label for="ot_hours">Over Time Hours</label>
                    <input type="number" name="ot_hours" id="ot_hours" class="form-control" min="0"></input>
                </div>
                <button type="submit" value="submit" name="submit" class="btn btn-outline-success mx-auto col-md-4">Submit</button>
            </div>
        </form>
    </div>
    <div class="col-8">
    <?php
        
        if(isset($_POST["submit"])){
            echo "this is my php scirpt";
        }
    ?>
    </div>
</body>
</html>