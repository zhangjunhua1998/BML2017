<?php
    class Liuyan_model extends CI_Model{
    	//写你所有和数据库进行操作的代码
        public function insert($title,$con){
        	//$query=$this->db->query("insert into liuyan(id,title,dates,contents) values(null,'$title',now(),'$con')");
        	$data=array(
                  'title'=>$title,
                  'contents'=>$con
        		);
            //mysql_query($query)
            $query=$this->db->insert("liuyan",$data);
            return $query;
        } 

        public function select(){
        	//$query=$this->db->query("select * from liuyan");
        	$query=$this->db->get("liuyan");
        	return $query->result();
        }

        public function select_w($id){
        	$query=$this->db->query("select * from liuyan");
        	return $query->row();
        }

        public function dianji(){
        	$query=$this->db->query("update liuyan set hits=hits+1 where id='$id'");
        	return $query;
        }

        public function update($hid,$title,$con){
        	$query=$this->db->query("update liuyan set title='$title',contents='$con' where id='$hid'");
            return $query;
        }


        public function delete($id){
        	$query=$this->db->query("delete from liuyan where id='$id' ");
        	return $query;
        }

    }




?>