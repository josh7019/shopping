<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '\shopping\model\all.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '\controller\controller.php');
    
    class UserController extends Controller
    {
        private $id;
        public function __construct($action, $id)
        {
            $this->id = $id;
            if (method_exists($this, $action)) {
                $this->$action();
            } else {
                $action = 'getout';
                $this->$action();
            }
            // parent::__construct();
        }
        
        /*
         * 檢查帳號是否重複
         */
        public function checkAccount()
        {
            $account = $_POST['account'];
            $user = new User();
            $user_account = $user->getAccount($account);
            echo json_encode($user_account);
            exit();
        }

        /*
         * 註冊
         */
        public function signup()
        {
            $account = $_POST['account'];
            $password = $_POST['password'];
            $id_number = $_POST['id_number'];
            $name = $_POST['name'];
            $check_tool = new CheckTool;
            $check_result = $check_tool->checkSignupFormat($account, $password, $name, $id_number);
            ## 判斷格式是否正確
            if (!$check_result) {
                $data = [
                    'alert' => '格式錯誤或帳號已存在',
                ];
                echo json_encode($data);
                exit();
            }

            $user = new User;
            $password = password_hash($password, PASSWORD_DEFAULT);
            $is_success = $user->signup($account, $password, $name, $id_number);
            if ($is_success) {
                $data = [
                    'alert' => '註冊成功',
                    'location' => '../controller/PageController.php?action=login',
                ];
            } else {
                $data = [
                    'alert' => '註冊失敗',
                ];
            }
            echo json_encode($data);
            exit();
        }

        /*
         * 登入
         */
        public function post_login()
        {
            $account = $_POST['account'];
            $password = $_POST['password'];
            $check_tool = new CheckTool;
            $is_format_right = $check_tool->checkLoginFormat($account, $password);
            ## 檢查格式
            if (!$is_format_right) {
                $data = [
                    'alert' => '格式錯誤',
                ];
                echo json_encode($data);
                exit();
            }
            
            $user = new User;
            $user_item = $user->getAccount($account);
            ## 搜尋帳號
            if (isset($user_item['account'])){
                if (password_verify($password, $user_item['password'])) {
                    $token = produceToken();
                    $user->addToken($account, $token);
                    setcookie('token', $token, time()+3600 ,'/');
                    $data=[
                        'alert' => '登入成功',
                        'location' => '/shopping/controller/PageController.php/index',
                    ];
                    echo json_encode($data);
                    exit();
                } else {
                    $data=[
                        'alert' => '密碼錯誤',
                    ];
                    echo json_encode($data);
                    exit();
                }
            }
        }

        /*
         * 登出
         */
        public function logout()
        {
            setcookie ("token", "test", time()-100, '/');
            $data=[
                'alert' => '登出成功',
                'location' => '/shopping/controller/PageController.php/index',
            ];
            echo json_encode($data);
            exit();
        }
    }

    $url_list = explode('/',$_SERVER['REQUEST_URI']);
    $action = (isset($url_list[4])) ? $url_list[4] : '';
    $id = (isset($url_list[5])) ? $url_list[5] : '';

    new UserController($action, $id);