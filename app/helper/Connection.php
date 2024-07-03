<?php 
    trait Connection {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "Computer Science";

        public function connect() {
            $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
            if(!$conn) {
                die("<br>" . mysqli_connect_error());
            }

            return $conn;
        }

        public function disconnect($conn) {
            $conn->close();
        }
    }
