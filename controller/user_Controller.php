<?php
    require('../model/user.php');
    if(isset($_POST['action'])){
        $action = $_POST['action'];
    }
    $test = new UserController;
    $test->$action();
    
    class UserController
    {
        public function checkAccount()
        {
            $account = $_POST['account'];
            $user = new User();
            $user_account = $user->getAccount($account);
            echo json_encode($user_account);
        }

        public function test()
        {
            echo 'test';
        }
    }