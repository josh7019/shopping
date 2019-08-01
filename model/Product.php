<?php
    require_once('Model.php');

    class Product extends Model
    {
        private $table = 'product';

        /*
         * 新增一項產品
         */
        public function addProduct($name, $price, $status, $descript)
        {
            $is_success = $this->insertInto(
                $this->table,
                ['name', 'price', 'status', 'descript'],
                [$name, $price, $status, $descript],
                'siis'
            );
            return $is_success;
        }

        /*
         * 取得最新產品id
         */
        public function getNewProductId()
        {
            $product_item = $this->selectLastOne($this->table, ['product_id'], 'product_id');
            return $product_item;
        }

        /*
         * 更新圖片
         */
        public function updateImage($product_id, $image)
        {
            $is_success = $this->update($this->table, ['image'], [$image], ['product_id'], [$product_id], 'si');
            return $is_success;
        }

        /*
         * 取得所有售賣中產品
         */
        public function getAllProductOnSale()
        {
            $product_list = $this->selectAllWithWhere($this->table, ['*'], ['status'], [1], 'i');
            return $product_list;
        }

        /*
         * 取得所有產品
         */
        public function getAllProduct()
        {
            $product_list = $this->selectAll($this->table, ['*']);
            return $product_list;
        }
    }