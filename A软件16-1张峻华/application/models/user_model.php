<?php
    class User_model extends CI_Model{
    	public function insert($name,$pass){
    		$data=array(
                 'name'=>$name,
                 'pass'=>$pass     
    			);
    		$query=$this->db->insert("user",$data);
            return $query;
    	}

    	public function select_name($name,$pass){
            $query=$this->db->get_where("user",array('name'=>$name));
            return $query->row();
    	}

    	public function login($name,$pass){
    		$query=$this->db->query("select * from user where name='$name' and pass='pass'");
    		return $query->row();
    	}
    }






?>