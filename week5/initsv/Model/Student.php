<?php 
    class Student{
        public $tensv;
        public $masv;
        public $lop;
        public function getInfoStudent($name)
        {
            $conn = new mysqli('localhost', 'root', '', 'student');
            $sql = "SELECT * FROM user WHERE tensv= '$name'";
            $result = $conn->query($sql);
            if ($result->num_rows == 0) {
                echo("failed");
               } else {
                 echo "login";
               }
        }
    }
?>
