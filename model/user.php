<?php
    require_once('Model.php');

    class User extends Model 
    {
        private $table = 'user';

        public function getAccount($account)
        {
            $user_account = $this->selectSingleWithWhere($this->table, ['*'], ['account'], [$account], 's');
            return $user_account;
        }

        public function signup($account, $password, $name, $id_number)
        {
            $is_success = $this->insertInto(
                $this->table,
                ['account', 'password', 'name', 'id_number'],
                [$account, $password, $name, $id_number],
                'ssss'
            );
            return $is_success;
        }
    }