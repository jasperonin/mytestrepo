<?php
    include_once 'employee.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Employee</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar navbar-light">
        <a href="#" class="navbar-brand">Employee Details   s</a>
    </nav>
    <div class="container bg-light" id="container">
        <div class="row mt-5">
            <div class="col-4">
            <form action="" method="post">
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" id="FullName" placeholder="John Doe" required></input>
                </div>
                <div class="form-group col-md-7">
                    <label for="civil_status">Civil Status</label>
                    <select id="civil_status" name="civil_status" class="form-control">
                        <option value="" disabled selected>Select Civil Status</option>
                        <option value="Married">Married</option>
                        <option value="Single">Single</option>
                    </select>
                </div>
                <div class="form-group col-md-5">
                    <label for="position">Position</label>
                    <select id="position" name="position" class="form-control">
                        <option value="" disabled selected>Position</option>
                        <option value="Admin">Admin</option>
                        <option value="Staff">Staff</option>
                    </select>
                </div>
                <div class="form-group col-md-7">
                    <label for="employment_status">Employment Status</label>
                    <select id="employment_status" name="employment_status" class="form-control">
                        <option value="" disabled selected>Employment Status</option>
                        <option value="Contractual">Contractual</option>
                        <option value="Probationary">Probationary</option>
                        <option value="Regular">Regular</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="regular_hours_rendered">Regular Hours Rendered</label>
                    <input type="number" name="regular_hours_rendered" min="0" id="regular_hours_rendered" class="form-control" required></input>
                </div>
                <div class="form-group col-md-12">
                    <label for="ot_hours">Over Time Hours</label>
                    <input type="number" name="ot_hours" id="ot_hours" class="form-control" min="0"></input>
                </div>
                <button type="submit" value="submit" name="submit" class="btn btn-outline-success mx-auto col-md-4">Submit</button>
            </div>
        </form>
            </div>
            <div class="col-7 ml-5 mt-3" id="table-container">
                <?php
                    if( isset($_POST["submit"]))
                    {
                        //INPUT
                        $name = $_POST["name"];
                        $civil_status = $_POST["civil_status"];
                        $position = $_POST["position"];
                        $employment_status = $_POST["employment_status"];
                        $regular_hours_rendered = $_POST["regular_hours_rendered"];
                        $ot_hours = $_POST["ot_hours"];
                        
                        $employee = new Employee($name, $civil_status,$position,$employment_status, $regular_hours_rendered,$ot_hours);
                ?>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="bg-dark text-white w-25">Full Name</th>
                            <td><?php echo $employee->getName();?></td>
                        </tr>
                        <tr>
                            <th class="bg-dark text-white">Civil Status</th>
                            <td><?php echo $employee->getCivilStatus();?></td>
                        </tr>
                        <tr>
                            <th class="bg-dark text-white">Position</th>
                            <td><?php echo $employee->getPosition();?></td>
                        </tr>
                        <tr>
                            <th class="bg-dark text-white">Employment Status</th>
                            <td><?php echo $employee->getEmploymentStatus();?></td>
                        </tr>
                        <tr>
                            <th class="bg-dark text-white">Gross Income</th>
                            <td>
                                <?php echo number_format($employee->computeGrossIncome(),2);?>
                                <br>
                                <small class="text-muted fst-italic">Regular Pay: (<?php echo $employee->getRegularHours()."hrs";?> x <?php echo $employee->getRegularRate();?>) + OT Pay: (<?php echo $employee->getOTHours()."hrs";?> x <?php echo $employee->getOTRate();?>)</small>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-dark text-white">Net Income</th>
                            <td>
                                <?php echo number_format($employee->computeNetIncome(),2);?>
                                <br>
                                <small class="text-muted fst-italic">
                                    Gross Income: (<?php echo number_format($employee->computeGrossIncome(),2);?>) - ( Tax: <?php echo number_format($employee->computeTax(),2);?> + Health Care: <?php echo number_format($employee->getHealthCare(),2);?>)
                                </small>
                            </td>
                        </tr>
                    </table>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>