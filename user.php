<?php

class User {
        Public $name;
        Public $lastname;
        Public $age;
        Public function save_to_session() {
             $_SESSION['name'] = $this -> name;
             $_SESSION['lastname'] = $this -> lastname;
             $_SESSION['age'] =$this -> age;
        }
        public function load_from_form() {
            $this -> name = $_POST['name'];
            $this -> lastname = $_POST['lastname'];
            $this -> age = $_POST['age'];
        }
        public function get_name() {
            if (isset($this->name)) {
                return $this->name;
            }
            return '';
        }
        public function get_lastname() {
            if (isset($this->lastname)) {
                return $this->lastname;
            }
            return '';
        }
        public function get_age() {
            if (isset($this->age)) {
                return $this->age;
            }
            return '';
        }
}

?>