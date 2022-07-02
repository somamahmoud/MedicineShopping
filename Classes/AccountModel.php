<?php
    include_once "classes/DatabaseModification.php";
    class AccountModel extends DatabaseModification{

        protected function getOneAccount($username, $password) {
            $sql = "select * from accounts where username = '$username' and password = '$password'";
            return $this->executeSelectStatementt($sql);
        }
    
        protected function getOneAccountForValidation($username, $password) {
            $sql = "select username, password from accounts where username = '$username' and password = '$password'";
            return $this->executeSelectStatementt($sql);
        }
    
        protected function getAccountTypeById() {
            $sql = "select type from accounts where id = " . $_COOKIE['id'];
            return $this->executeSelectStatementt($sql);
        }
    
        protected function getAccountProfilePicture() {
            $sql = "select picture from accounts where id = " . $_COOKIE['id'];
            return $this->executeSelectStatementt($sql);
        }
        
    }