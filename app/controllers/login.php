<?php

	/**
	 * 
	 */
	class login extends DController
	{
		public function __construct()
		{
			
			$message = array();
			$data = array();
			parent::__construct();
		}

		public function index(){
			$this->login();
		}

		public function login(){
			// $this->load->view('header');
			Session::init();
			if (Session::get("login")==true) {
				header("Location:".BASE_URL."login/dashboard");
			}
			$this->load->view('cpanel/login');
			// $this->load->view('footer');
		}
		public function dashboard(){
			Session::checkSession();
			$this->load->view('cpanel/header');
			$this->load->view('cpanel/menu');
			$this->load->view('cpanel/dashboard');
			$this->load->view('cpanel/footer');
		}
		public function authentication_login(){
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			$table_admin = 'tbl_admin';
			$loginmodel = $this->load->model('loginmodel');

			$count = $loginmodel->login($table_admin, $username, $password);
			$data['login_data'] = $loginmodel->login($table_admin, $username, $password);

				if ($count==0) {
					$message['msg'] = "không đăng nhập được";
					header("Location:".BASE_URL."login");
				} else {

					$result = $loginmodel->getLogin($table_admin, $username, $password);
					Session::init();
					Session::set('login', true);
					Session::set('username', $result[0]['username']);
					Session::set('userid', $result[0]['admin_id']);
					header("Location:".BASE_URL."login/dashboard");
				}
			
		}

		public function register(){
			$name = $_POST['customername'];
			$email = $_POST['username'];
			$phone = $_POST['customerphone'];
			$address = $_POST['customeraddress'];
			$password = $_POST['password'];

			$table_customer = "tbl_customers";
			$data = array(
				'customer_name' => $name,
				'customer_phone' => $email,
				'customer_email' => $phone,
				'customer_password' => $address,
				'customer_address' => md5($password)
			); 

			$loginmodel = $this->load->model('loginmodel');
			$result = $loginmodel->insertcustomer($table_customer,$data);

			if ($result==1) {
				$message['msg'] = "Đăng ký thành công";
				header('Location:' .BASE_URL."login/loginn?msg=".urlencode(serialize($message)));
			} else {
				$message['msg'] = "Đăng ký thất bại";
				header('Location:' .BASE_URL."login/loginn?msg=".urlencode(serialize($message)));
			}

			$this->load->view('register');
		}
		public function logout(){
			Session::init();
			// Session::destroy();
			unset($_SESSION['login']);
			header("Location:".BASE_URL."login");
		}

	}

?>