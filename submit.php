
<?php
include_once 'insertData.php';
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>PHP DATABASE</title>

        <!--BOOTSTRAP LINK--> 
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet/css" href="style.css">



        <style>
            .form-section{
                padding: 100px 0;
                font-weight: bold;
                background-color: black;
                
            }
            .mycard{
                width: 20rem;
                height: 18rem;
                -webkit-box-shadow: 7px 40px 100px -23px rgba(116,237,213,1);
                -moz-box-shadow: 7px 40px 100px -23px rgba(116,237,213,1);
                box-shadow: 7px 40px 100px -23px rgba(116,237,213,1);
                border-radius: 25px;
                color: white;
            }
            .my-btn{
                padding-left: 40px;
                padding-right: 40px;

            }
            .my-btn:hover{
                padding-left: 60px;
                padding-right: 60px;
                -webkit-box-shadow: 5px 12px 46px 0px rgba(57,173,80,1);
                -moz-box-shadow: 5px 12px 46px 0px rgba(57,173,80,1);
                box-shadow: 5px 12px 46px 0px rgba(57,173,80,1);
                border-radius: 25px;
                transition: padding 1s;
            }

        </style>
    </head>

    <body>
        <h1 class="bg-secondary py-3 text-center text-white">
            Insert New User
        </h1>


        <section class="btn-section">
            <div class="container">
                <div class="d-flex justify-content-end py-3">
                    <div>
                        <button type="button" class="btn btn-success">
                            <a href="tableView.php" class="text-white my-a-tag">
                                Table View
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </section>    

        <section class="form-section">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="d-flex justify-content-center mycard">
                        <div class="d-flex align-items-center">
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="form-group row">
                                    <label for="firstName" class="col-lg-3 col-form-label">FirstName</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="firstName" autocomplete="off" required="*">
                                    </div>
                                </div>
                                <div class="form-group row pt-3">
                                    <label for="lastName" class="col-lg-3 col-form-label">LastName</label>
                                    <div class="col-lg-9">
                                        <input type="type" class="form-control" id="lastName" name="lastName" autocomplete="off" placeholder="lastName">
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label for="email" class="col-lg-3 col-form-label">Email</label>
                                    <div class="col-lg-9">
                                        <input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="email" required="*">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-success ml-1 my-btn">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/popper.min.js"></script>
    </body>
</html> 

