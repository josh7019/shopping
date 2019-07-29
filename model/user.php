<?php
    require_once('Model.php');

    class User extends Model 
    {
        private $table = 'user';

        public function getAccount($account)
        {
            $user_account=$this->selectSingleWithWhere($this->table,['account'],['account'],[$account],'s');
            return $user_account;
        }
    }