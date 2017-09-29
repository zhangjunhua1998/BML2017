<?php
    $id=$this->session->userdata('userid');
    $name=$this->session->userdata('name');
    /*if($id){
    	//echo "<script>alert('session ok')</script>";
    }
    else
    {
    	//echo "<script>alert('session error')</script>";
    	redirect("user/login");
    }*/
?>



<a href="<?php echo site_url('liuyan/add')?>">添加留言</a>&nbsp;
<?php if($name)
    {
	     echo $name."已登录";
	     echo "&nbsp;";
	     $url=site_url('user/unlogin');
	     //$echo $url;
	     //die();
	     echo "<a href='$url'>注销</a>";
	}
	else
    {
		 echo "未登录";
	}
?>

<?php

     foreach($liuyanlist as $k=>$v){
         //var_dump($liuyanlist);
         //die(); 



?>
<h1><a href="<?php echo site_url('liuyan/view/'.$v->id)?>"><?php echo $v->title?></a> |<a href="<?php echo site_url('liuyan/edit/'.$v->id)?>">编辑</a>|<a href="<?php site_url('liuyan/del/'.$v->id)?>">删除</a></h1>
<li><?php echo $v->dates?></li>
<p><?php echo $v->contents?></p>
<li>2017-09-28</li>
<p>************</p>
<hr />
<?php
   }
?>
    <div>
    <form action="1.php" method="post">
    <input id="name" type="submit" value="下一页">
    </form>
    </div>

    <div>
    <form action="1.php" method="post">
    <input type="number" name='name1' min="1" max="7">
    <input type="submit" value="查找">
    </form>
    </div>

