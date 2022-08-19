<?php

	class loginmodel extends DModel
	{
	public function __construct(){

		parent::__construct();

		}
	public function login($table_admin, $username, $password){
		$sql = "SELECT * FROM $table_admin WHERE username=? AND password=?";
		return $this->db->affectedRows($sql, $username, $password);
		}
	public function getLogin($table_admin, $username, $password){
		$sql = "SELECT * FROM $table_admin WHERE username=? AND password=?";
		return $this->db->selectUser($sql, $username, $password);
	}
	public function insertcustomer($table_customer,$data){
		return $this->db->insert($table_customer,$data);
	}	
	public function login_customer($table_customer, $username, $password){
		$sql = "SELECT * FROM $table_customer WHERE customer_email=? AND customer_password=?";
		return $this->db->affectedRows($sql, $username, $password);
	}
	public function role($table_customer, $username, $password){
		$sql = "SELECT * FROM $table_customer WHERE customer_email=? AND customer_password=? AND role = 1";
		return $this->db->affectedRows($sql, $username, $password);
	}
	public function getLogincustomer($table_customer, $username, $password){
		$sql = "SELECT * FROM $table_customer WHERE customer_email=? AND customer_password=?";
		return $this->db->selectUser($sql, $username, $password);
	}
	public function get_data_customer($table_customer){
		$sql = "SELECT * FROM $table_customer";
		return $this->db->selectUser($sql);
	}
	public function login_data($table_customer){
		$sql = "SELECT * FROM $table_customer";
		return $this->db->select($sql);
	}
	}

?>