<?php
    include 'Connection.php';
    trait Query{
        use Connection;
        
        public function selectList($query){       

            $conn = $this->connect();

            if(!$conn->query($query)){
                echo "Error Description: " .$conn->error . "</br>.";
            }

            $result = $conn->query($query);

            $this->disconnect($conn);

            return $result;
        }

        public function selectOne($query){       

            $conn = $this->connect();

            if(!$conn->query($query)){
                echo "Error Description: " .$conn->error . "</br>.";
            }

            $result = $conn->query($query);

            if($result->num_rows > 0 ) {
                while($row = $result->fetch_assoc()) {
                    return $row;
                }
            }
            
            $this->disconnect($conn);
        }

        public function insert($table, $keyValueArray) {
            $conn = $this->connect();

            $fieldNames = array_keys($keyValueArray);
            $fieldNamesString = "(";
            foreach ($fieldNames as $fn) {
                $fieldNamesString .= $fn . ",";
            }
            $fieldNamesString = rtrim($fieldNamesString, ",");
            $fieldNamesString .= ")";


            $values = array_values($keyValueArray);
            $valuesString = "(";
            foreach ($values as $v) {
                $valuesString .= "'" . $v . "',";
            }
            $valuesString = rtrim($valuesString, ",");
            $valuesString .= ")";

            $sql = "insert into {$table} {$fieldNamesString} values {$valuesString}";

            if(!$conn->query($sql)) {
                echo "Error Description: " . $conn->error . "<br>";
            }

            $this->disconnect($conn);
            
        }

        public function updateData($table, $setKeyValueArray, $condition) {
            $conn = $this->connect();

            $fieldNamesString = "";
            foreach ($setKeyValueArray as $key => $value) {
                $fieldNamesString .= "{$key} = '{$value}',";
            }

            $fieldNamesString = rtrim( $fieldNamesString, ',');

            print_r($fieldNamesString);


            $sql = "update {$table} set {$fieldNamesString} where {$condition}";

            if(!$conn->query($sql)) {
                echo "Error Description: " . $conn->error . "<br>";
            } else {
                echo "Connected";
            }

            $this->disconnect($conn);
        }

        public function delete($table, $condition) {

            $conn = $this->connect();

            $sql = "delete from {$table} {$condition}";

            if(!$conn->query($sql)) {
                echo "Error Description: " . $conn->error . "<br>";
            }

            $this->disconnect($conn);
        }
    }