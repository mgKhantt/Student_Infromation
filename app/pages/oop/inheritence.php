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
    <link href="http://localhost/Team-7/vendors/sb-admin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://localhost/Team-7/vendors/sb-admin2/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="abstract">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include'../template/sidebar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include '../template/topbar.php'?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Inheritence</h1>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <?php 
                                class Fruit{
                                    public $name;
                                    public $color;

                                    public function getFruitInfo() {
                                        echo "The fruit name is " . $this->name . "<br>";
                                        echo "The fruit color is " . $this->color . "<br>";
                                    }

                                    protected function testProtected() {
                                        echo "This is testing protected access modifier";
                                    }
                                }

                                class Strawberry extends Fruit {
                                    public $falvor;

                                    public function __construct($name, $color, $falvor){
                                        echo "This is strawberry class Constructor";
                                        $this->name = $name;
                                        $this->color = $color;
                                        $this->falvor = $falvor;
                                    }

                                    public function getFruitInfo() {
                                        parent::getFruitInfo();
                                        echo "The fruit falvor is " . $this->falvor . "<br>";
                                        parent::testProtected();
                                    }
                                }

                                class Orange extends Fruit {
                                    public $scientificName;

                                    public function __construct($name, $color, $falvor, $scientificName) {
                                        echo "This is orange class Constructor";
                                        $this->name = $name;
                                        $this->color = $color;
                                        $this->falvor = $falvor;
                                        $this->scientificName = $scientificName;
                                    }

                                    public function getFruitInfo() {
                                        parent::getFruitInfo();
                                        echo "The fruit falvor is " . $this->falvor . "<br>";
                                        echo "The fruit saientifiName is " . $this->scientificName . "<br>";

                                    }
                                }

                                class Math {
                                    public $PI = 3.14;

                                    public static function square($x) {
                                        return $x * $x;
                                    }

                                    public static $Hello = 10;
                                }
                                echo Math::square(4);
                                echo "<br>";
                                echo Math::$Hello;
                                echo "<br>";

                                // $strawberry = new StrawBerry();
                                // $strawberry->name = "StrawBerry";
                                // $strawberry->color = "Red";
                                // $strawberry->falvor = "Sweet";
                                $strawberry = new StrawBerry("Strawbery", "Red", "Sweet");
                                $orange = new Orange("Orange", "yellow", "sour", "i dont know");

                                $strawberry->getFruitInfo();
                                // this will cause error
                                // $strawberry->testProtected(); 

                                $orange->getFruitInfo();

                                print_r($strawberry);
                                print_r($orange);
                            ?>
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

</body>

</html>