<?php
    require_once('User.php');
    /*
     * 產生token
     */
    function produceToken()
    {
        $random_string = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $token_string = '';
        for ($i=0; $i<250; $i++) {
            $token_string .= substr($random_string, rand(0, strlen($random_string)-1), 1);
        }
        return $token_string;
    }
    
    /*
     * 檢查token並回傳資料
     */
    function checkToken()
    {
        if (isset($_COOKIE['token'])) {
            $token = $_COOKIE['token'];
            $user_model = new User;
            $user_item = $user_model->getUserByToken($token);
            if ($user_item['account']) {
                return true;
            } else {
                setcookie ("token", "delete", time()-100);
                return false;
            }
        } else {
            return false;
        }
    }

    /*
     * 檢查token並回傳資料
     */
    function getToken()
    {
        if (isset($_COOKIE['token'])) {
            $token = $_COOKIE['token'];
            $user_model = new User;
            $user_item = $user_model->getUserByToken($token);
            if ($user_item['user_id']) {
                return $user_item;
            }
        }
    }