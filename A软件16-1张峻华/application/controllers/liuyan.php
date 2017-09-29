<?php //if(!defined('BASEPATH')) OR exit('No direct script access allowed');
         class Liuyan extends CI_Controller{
         	/*public function __contruct(){
         		parent::__contruct();

         	}
         }*/

         public function index()
         {
         	//通过这个index方法自动加载我们的index.php
            $this->load->model("liuyan_model");
           
            //把数据打包成array
            $data['liuyanlist']=$this->liuyan_model->select();
            //var_dump($data);
            //die();
         	$this->load->view('index.php',$data);
         }

         public function del($id){
            //echo $id;
            //$id=$this->uri->segment(3);
            $this->load->model("liuyan_model");
            $query=$this->liuyan_model->delete($id);
            if($query){
               redirect("liuyan/index");
            }
            else{
               echo "error";
            }
         } 

         public function edit($id){
            $query=$this->liuyan_model->select_w($id);
            //var_dump($query);
            $data['editlist']=$query;
            $this->load->view("edit.php",$data);
            $this->liuyan_model->update($hid,$title,$con);
         }

         public function do_edit(){
            $hid=$this->input->post('hid');
            $title=$this->input->post('title');
            $con=$this->input->post('con');
            $query=$this->liuyan_model->update($hid,$title,$con);
            if($query){
               redirect("liuyan/index");
            }
            else{
               echo "update error";
            }
         }

         public function chazhao(){
            $chazhao=$this->input->post('chazhao');
            $this->load->view("$chazhao.php");  
         }

         public function view($id){
            $query=$this->liuyan_model->dianji($id);
            if($query){
               $query1=$this->liuyan_model->select_w($id);
            }

            $data['view']=$query1;

            $this->load->view("view.php",$data);
         }

         public function add(){
            $this->load->view("add.php");
         }
   
         public function a1(){
            $this->load->view("1.php");
         }
         
         public function a2(){
            $this->load->view("2.php");
         }

         public function a3(){
            $this->load->view("3.php");
         }

         public function a4(){
            $this->load->view("4.php");
         }

         public function a5(){
            $this->load->view("5.php");
         }
         public function do_add(){
            /*echo"1234";
            echo "<br />";
            $title=$_POST['title'];
            echo $title;*/
            //$this->input->post('name属性');
            $title=$this->input->post('title');
            $con=$this->input->post('con');

            $data=array('$titlt','$con');
            //$sql="insert into"
            //在CI框架下操作数据库全部交给model
            $this->load->model("liuyan_model");
            $query=$this->liuyan_model->insert($title,$con);
            if($query){
               //echo "插入成功";
               //header("location:/liuyan/index");
               redirect("liuyan/index");
            }
            else{
               //echo "插入失败";
               redirect("liuyan/add");
            }

         }
      }


















  ?>