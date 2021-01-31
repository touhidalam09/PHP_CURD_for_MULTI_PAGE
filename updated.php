<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <meta charset="UTF-8">
        <title>PHP DATABASE</title>

        <!--BOOTSTRAP LINK--> 
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet/css" href="style.css">

    </head>

    <body>

        <h1 class="bg-light py-3 text-center">
            Update DataBase
        </h1>
        <section class="btn-section">
            <div class="container">
                <div class="d-flex justify-content-end py-3">
                    <div>
                        <button type="button" class="btn btn-success">
                            <a href="submit.php" class="text-white my-a-tag">
                                Create New
                            </a>
                        </button>
                    </div>
                    <div class="mx-2">
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary">
                            <a href="tableView.php" class="text-white my-a-tag">
                                Table View
                            </a>
                        </button>
                    </div>

                </div>
            </div>
        </section> 


        <?php
        include_once 'db.php';
        $id = $_GET['id']; //from tableview when Updated btn click; send id value;

        $sqlFindRow = "SELECT * FROM user_info WHERE id = '$id'";

        $result = $conn->query($sqlFindRow);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                ?>

                <section class="table-section">
                    <div class="container">
                        <div>
                            <table class="table text-center">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <th scope = "row"> <?php echo $row["id"] ?>
                                        <input type="hidden" id="id" name="id" value="<?php echo $row["id"] ?>" />
                                    </th>
                                    <td> 
                                        <div class="form-group">
                                            <div>
                                                <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $row["FirstName"] ?>" autocomplete="off" required="*">
                                            </div>
                                        </div>
                                    </td>
                                    <td> 
                                        <div class="form-group">
                                            <div>
                                                <input type="type" class="form-control" id="lastName" name="lastName" autocomplete="off" value="<?php echo $row["LastName"] ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <div>
                                                <input type="email" class="form-control" id="email" name="email" autocomplete="off" value="<?php echo $row["Email"] ?>" required="*">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <button type="submit" name="update" class="btn btn-warning text-white">
                                                UPDATE
                                            </button>
                                        </div>
                                    </td>

                                </form>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <?php
            }
            
        } else {
            echo "0 results";
        }
        include_once 'updatedData.php';
        ?>

        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/popper.min.js"></script>
    </body>
</html>