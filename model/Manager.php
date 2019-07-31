<?php
    require_once('Model.php');

    class Manager extends Model 
    {
        private $table = 'manager';

        public function getAccount($account)
        {
            $manager_item = $this->selectSingleWithWhere($this->table, ['*'], ['account'], [$account], 's');
            return $manager_item;
        }

        public function addToken($account, $token)
        {
            $is_success = $this->update($this->table, ['token'], [$token], ['account'], [$account], 'ss');
            return $is_success;
        }

        public function getManagerByToken($token)
        {
            $manager_item = $this->selectSingleWithWhere(
                $this->table,
                ['manager_id', 'account'],
                ['token'],
                [$token],
                's'
            );
            return $manager_item;
        }
    }