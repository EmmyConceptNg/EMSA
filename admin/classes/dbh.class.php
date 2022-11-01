<?php

    class Dbh {
        private $db_host ="localhost";
        private $db_user ="root";
        private $db_pass ="";
        private $db_name ="emsa";

        protected function connect(){
            $conn = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            return $conn;
        }
    }