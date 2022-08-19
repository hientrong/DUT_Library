<?php

	/**
	 * 
	 */
	class customer extends DController
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function index(){
			$this->loginn();
		}

		public function register(){

			$this->load->view('register');
		}
		public function logout_customer(){
			Session::init();
			Session::destroy();
			header('Location:' .BASE_URL."index");
		}
		public function login_customer(){
			$username = $_POST['username'];
			$password = md5($_POST['password']);

			$table_customer = 'tbl_customers';
			$loginmodel = $this->load->model('loginmodel');

			$count = $loginmodel->login_customer($table_customer, $username, $password);
			$role = $loginmodel->role($table_customer, $username, $password);

			// if ($role == 1){
			// 	if ($count==0) {
			// 		$message['msg'] = "Tài khoản hoặc mật khẩu sai, xin vui lòng kiểm tra lại";
			// 		header('Location:' .BASE_URL."customer?msg=".urlencode(serialize($message)));
			// 	} else {

			// 		$result = $loginmodel->getLogincustomer($table_customer, $username, $password);
			// 		Session::init();
			// 		// Session::set('customer', true);
			// 		Session::set('customer_name', $result[0]['customer_name']);
			// 		Session::set('customer_id', $result[0]['customer_id']);
			// 		$message['msg'] = "Đăng nhập thành công";
			// 		header('Location:' .BASE_URL."login/dashboard?msg=".urlencode(serialize($message)));
			// 	}
			// 	}else{
					if ($count==0) {
					$message['msg'] = "Tài khoản hoặc mật khẩu sai, xin vui lòng kiểm tra lại";
					header('Location:' .BASE_URL."customer?msg=".urlencode(serialize($message)));
				} else {

					$result = $loginmodel->getLogincustomer($table_customer, $username, $password);
					Session::init();
					Session::set('customer', true);
					Session::set('customer_name', $result[0]['customer_name']);
					Session::set('customer_id', $result[0]['customer_id']);
					$message['msg'] = "Đăng nhập thành công";
					header('Location:' .BASE_URL."index?msg=".urlencode(serialize($message)));
				}
			// }
		}
		public function loginn(){
			Session::init();
			$this->load->view('login_customer');
		}
		public function insert_register(){
			$name = $_POST['customername'];
			$email = $_POST['username'];
			$phone = $_POST['customerphone'];
			$address = $_POST['customeraddress'];
			$password = $_POST['password'];

			$table_customer = "tbl_customers";

			$data = array(
				'customer_name' => $name,
				'customer_phone' => $phone,
				'customer_email' => $email,
				'customer_password' => md5($password),
				'customer_address' => $address
			); 

			$loginmodel = $this->load->model('loginmodel');
			$result = $loginmodel->insertcustomer($table_customer,$data);

			if ($result==1) {
				$message['msg'] = "Đăng ký thành công";
				header('Location:' .BASE_URL."customer?msg=".urlencode(serialize($message)));
			} else {
				$message['msg'] = "Đăng ký thất bại";
				header('Location:' .BASE_URL."customer/register?msg=".urlencode(serialize($message)));
			}

			
		}
	}

?>