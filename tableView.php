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

        <style>
            .btn-section{
                padding: 20px 0;
            }
            .my-a-tag{
                text-decoration: none;
            }
            .my-a-tag:hover{
                text-decoration: underline;
            }

        </style>

    </head>

    <body>
        <h1 class="bg-light py-3 text-center">
            Table View
        </h1>

        <section class="btn-section">
            <div class="container">
                <div class="d-flex justify-content-end">
                    <div>
                        <button type="button" class="btn btn-success">
                            <a href="submit.php" class="text-white my-a-tag">
                                Create New
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </section>            

        <section class="table-section">
            <div class="container">
                <div>
                    <table class="table table-hover table-striped text-center">
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

                            <?php
                            include_once 'db.php';

                            $sqlShowData = "SELECT * FROM user_info";
                            $result = $conn->query($sqlShowData);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <th scope = "row"> <?php echo $row["id"] ?></th>
                                        <td> <?php echo $row["FirstName"] ?> </td>
                                        <td> <?php echo $row["LastName"] ?> </td>
                                        <td> <?php echo $row["Email"] ?> </td>
                                        <td>
                                            <div>
                                                <button type = "button" class = "btn bg-danger">
                                                    <a href = "deleteData.php ? id=<?php echo $row["id"]; ?>" class = "text-white my-a-tag">DELETE</a>
                                                </button>
                                                <button type = "button" class = " btn bg-info">
                                                    <a href = "updated.php ? id=<?php echo $row["id"]; ?>" class = "text-white my-a-tag">UPDATE</a>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php
                                }
                            } else {
                                //no data message show
                            }
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>




        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/popper.min.js"></script>
    </body>
</html>
