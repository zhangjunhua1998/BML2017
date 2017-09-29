<?php
    class User extends CI_Controller{
    	public function __construct(){
    		parent::__construct();
    		$this->load->model("user_model");
    		//$this->load->library("session");
    	}

    	public function login(){
    		$this->load->view('login.php');
    	}

    	public function unlogin(){
    		$array_items=array('userid'=>'','name'=>'');
    		$this->session->unset_userdata($array_items);
    		redirect("liuyan/index");
    	}

    	public function do_login(){
    		$name=$this->input->post('username');
    		$pass=$this->input->post('pass');
            $this->user_model->login($name,$pass);
            //var_dump($query);
            //echo $query->userid; 
            //die();
            $data=array(
                  'userid'=>$query->id,
            	);
            //var_dump($data);
            //die();
            if($query){
                //设置cookie
                $this->session->set_userdata($data);   
            	redirect("liuyan/index");
            }
            else
            {
                redirect("user/login");
            }
    	}

    	public function zhuce(){
    		$this->load->view("zhuce.php");
    	}

    	public function do_zhuce(){
    		$name=$this->input->post('username');
    		$pass=$this->input->post('pass');
            $query=$this->user_model->select_name($name,$pass); 
            if($query){
            	//echo "<script>alert('重名')</script>";
            	redirect('user/zhuce');
            }else
            {
                $query=$this->user_model->insert($name,$pass); 
		            if($query){
		            	redirect("user/login");
		            }
		            else{
		            	redirct("user/zhuce");
		            }
            }

          
    	}
    }




?>