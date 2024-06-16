<?php
    include 'Connection.php';
    trait Query{
        use Connection;
        
        public function selectList($query){       

            $conn = $this->connect();

            if(!$conn->query($query)){
                echo "Error Description: " .$conn->error . "</br>.";
            } else {
                echo "Query Connected <br>";
            }

            $result = $conn->query($query);

            $this->disconnect($conn);

            return $result;
        }
    }
