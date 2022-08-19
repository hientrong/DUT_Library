<?php

	class postmodel extends DModel
	{
	public function __construct(){

		parent::__construct();

		}

	//product category
	public function category_post($table_category_product){
		$sql = "SELECT * FROM $table_category_product ORDER BY id_category_post DESC";
		return $this->db->select($sql);

	}
	public function insertpost($table_category_product, $data){

		return $this->db->insert($table_category_product, $data);
	}
	public function post($table_product, $table_category){
		$sql = "SELECT * FROM $table_product, $table_category WHERE $table_product.id_category_post = $table_category.id_category_post ORDER BY $table_product.id_post DESC";
		return $this->db->select($sql);
	}
	public function postbyid($table, $cond){
		$sql = "SELECT * FROM $table WHERE $cond";
		return $this->db->select($sql);
		
	}
	public function updatepost($table, $data, $cond){

		return $this->db->update($table, $data, $cond);
	}	
	public function deletepost($table_category_product, $cond){

		return $this->db->delete($table_category_product, $cond);
	}
}

?>