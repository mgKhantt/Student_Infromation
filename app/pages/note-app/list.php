<?php include "../../helper/App.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="http://localhost/Team-7/vendors/sb-admin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://localhost/Team-7/vendors/sb-admin2/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .card-deck .card {
            flex: 1 0 21%;
            /* Adjust the flex basis for a better fit */
            margin: 10px;
        }

        .card .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card .btn {
            margin: 2px;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include '../template/sidebar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include '../template/topbar.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Student Information Lists</h1>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <a href="./create.php" class="btn btn-primary mb-3">Create</a>

                            <div class="row">
                                <?php
                                $app = new App();
                                $sql = "SELECT * FROM Student_Information ORDER BY `Roll_Number` ASC";
                                $result = $app->selectList($sql);

                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <div class="col-md-4 mb-4">
                                        <div class="card bg-info text-white h-100">
                                            <div class="card-body d-flex flex-column justify-content-between">
                                                <div class="mb-3 bg-success p-3 rounded">
                                                    <h3 class="card-title"><b><?php echo $row['Roll_Number'] ?></b></h3>
                                                    <h5 class="card-text"><?php echo $row['Name'] ?></h5>
                                                    <h5 class="card-text"><?php echo $row['Phone_Number'] ?></h5>
                                                    <p class="card-text"><?php echo $row['Gmail'] ?></p>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <a href="./edit.php?id=<?php echo $row['id'] ?>"
                                                        class="btn btn-warning">Edit</a>
                                                    <form action="http://localhost/Team-7/app/controllers/delete.php" id="delete-form">
                                                        <?php 
                                                            $student_id = $row['id'];
                                                        ?>
                                                        <input type="hidden" name="id" value="<?php echo $student_id ?>">
                                                        <button type="button" class="btn btn-danger btn-delete" data-toggle="modal"
                                                            data-target="#deleteBox">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteBox" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 rollNumber text-danger" id="exampleModalLabel">
                        Roll Number
                    </h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Do you want to delete
                    <span class="text-info inputName">
                        Student Name
                    </span>
                    ?
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" form="delete-form" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>                            

    <!-- Bootstrap core JavaScript-->
    <script src="http://localhost/Team-7/vendors/sb-admin2/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/Team-7/vendors/sb-admin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="http://localhost/Team-7/vendors/sb-admin2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="http://localhost/Team-7/vendors/sb-admin2/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="http://localhost/Team-7/vendors/sb-admin2/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="http://localhost/Team-7/vendors/sb-admin2/js/demo/chart-area-demo.js"></script>
    <script src="http://localhost/Team-7/vendors/sb-admin2/js/demo/chart-pie-demo.js"></script>

    <script>
        $(document).ready(()=> {
            $('.btn-delete').click((event)=> {
                // console.log(event);
                const deleteButton = $(event.currentTarget);
                // const name = deleteButton.parent().parent().parent().parent().children().first().children().first().children().first().children().html();
                const rollNumber = deleteButton.closest('.card-body').find('.card-title b').html();
                const name = deleteButton.closest('.card-body').find('.card-text:nth-child(2)').html();
                // console.log(name);
                $('.rollNumber').html(rollNumber);
                $('.inputName').html(name);
            })
        })
    </script>

</body>

</html>