<!doctype html>
<html lang="en">
<?php include "../Components/HeadContent.php" ?>
<link rel="stylesheet" href="service.css">

<body>

    <?php include '../Components/NavBar.php' ?>

    <main id="main" class="main" >

            <!-- Button trigger modal 
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
        </button>

         Modal 
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Submission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Add New Employee with the following Details:</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div> -->



        <form method="POST">
           <!-- Content Here  -->
           <div class="card">
                <div class="card-body">
                    <h1 class="card-title">New Employee</h1> 

                    <?php 
                        if (isset($_POST['submit'])){
                        $firstname = $_POST['FirstName'];
                        $middlename = $_POST['MiddleName'];
                        $lastname = $_POST['LastName'];
                        $district = $_POST['District'];
                        $sex = $_POST['Sex'];
                        $usertype = $_POST['UserType'];
                        $tel = $_POST['Tel'];
                        $magacamasuulka = $_POST['MagacaMasuulka'];
                        $telmasuulka = $_POST['TelMasuulka'];
                        

                        include_once "../Components/connection.php";
                        $sql = "INSERT INTO `employee`(`FirstName`, `MiddleName`, `LastName`, `sex`, `Number`, `District`, `magcaMasuulka`, `NumberkaMassulka`, `EmployeeType`)  
                                VALUES ('$firstname','$middlename','$lastname','$sex','$tel','$district','$magacamasuulka','$telmasuulka','$usertype')";
                        
                        $result = $conn->query($sql);
                        if ($result) {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    New record created successfully
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
                        }}
                    ?>
            
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3 ">
                                <input type="text" name="FirstName" class="form-control" id="floatingInput" placeholder="" required>
                                <label for="floatingInput">FirstName</label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-floating mb-3 ">
                                <input type="text" name="MiddleName" class="form-control" id="floatingInput" placeholder="" required>
                                <label for="floatingInput">MiddleName</label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-floating mb-3 ">
                                <input type="text" name="LastName" class="form-control" id="floatingInput" placeholder="" required>
                                <label for="floatingInput">LastName</label>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                    <!-- Wadajir, Dharkenley, Daynile, Wardigley, H/Wadaag, Waberi, H/Jijab, H/Weyne, Bondere, Karaan,
                     Yaqshid, Huriwaa, Kahda, Hodan, Shibis, Abdiaziz, Shangani. -->
                        <div class="col">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="District" id="floatingSelect" aria-label="Floating label select example" required>
                                    <option value="" selected disabled>Select District</option>
                                    <option value="Wadajir">Wadajir</option>
                                    <option value="Dharkenley">Dharkenley</option>
                                    <option value="Daynile">Daynile</option>
                                    <option value="Kahda">Kahda</option>
                                    <option value="Karaan">Karaan</option>
                                    <option value="Hodan">Hodan</option>
                                </select>
                                <label for="floatingSelect">District</label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="Sex" id="floatingSelect" aria-label="Floating label select example" required>
                                    <option value="" selected disabled>Select sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <label for="floatingSelect">Sex</label>
                            </div>
                        </div>

                        
                        <div class="col">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="UserType" id="floatingSelect" aria-label="Floating label select example" required>
                                    <option value="" selected disabled>Select User Type</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                    <option value="Worker">Worker</option>
                                </select>
                                <label for="floatingSelect">User Type</label>
                            </div>
                        </div>

                    </div>



                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3 ">
                                <input type="tel" name="Tel" class="form-control" id="floatingInput" placeholder="" maxlength="10" minlength="10" required>
                                <label for="floatingInput">Tel</label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-floating mb-3 ">
                                <input type="text" name="MagacaMasuulka" class="form-control" id="floatingInput" placeholder="" required>
                                <label for="floatingInput">Magaca Masuulka</label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-floating mb-3 ">
                                <input type="tel" name="TelMasuulka" class="form-control" id="floatingInput" placeholder="" maxlength="10" minlength="10" required>
                                <label for="floatingInput">Tel Masuulka</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <input type="submit" name="submit" class="JazzeraBtn col" value="Submit">
                    </div>

                </div>
            </div>
        </form>


        
        <div class="card">
          <div class="card-body">
          <h1 class="card-title">All Employees</h1>
        
            <table  class=" customTable" >
                  <thead>
                    <tr>
                      <th scope="col">FullName</th>
                      <th scope="col">Tel</th>
                      <th scope="col">Sex</th>
                      <th scope="col">District</th>
                      <th scope="col">Masuulka</th>
                      <th scope="col">Tel Masuulka</th>
                      <th scope="col">User Type</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    include_once "../Components/connection.php";
                    $sql = "SELECT id, CONCAT(emp.FirstName,' ', emp.MiddleName,' ', emp.LastName) as FullName, `Number`,
                     sex, `District`, `magcaMasuulka`, `NumberkaMassulka`, `EmployeeType` FROM employee as emp";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <tr>
                        <td>$row[FullName]</td>
                        <td>$row[Number]</td>
                        <td>$row[sex]</td>
                        <td>$row[District]</td>
                        <td>$row[magcaMasuulka]</td>
                        <td>$row[NumberkaMassulka]</td>
                        <td>$row[EmployeeType]</td>
                        <td class='d-flex gap-4'><a style='color: black;' href='../Employee/UpdateEmp.php?id=$row[id]'><i class='bi bi-pencil-fill'></i></a>
                        <a style='color: black;' href='../Employee/DeleteEmp.php?id=$row[id]'><i class='bi bi-trash-fill'></i></a> </td>
                        </tr>
                        ";
                    }
                    ?>
                  </tbody>
                </table>
                <!-- Table Ends  -->
      </div>
    </div>



    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>