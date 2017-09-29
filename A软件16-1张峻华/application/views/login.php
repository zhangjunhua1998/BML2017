<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<style type="text/css">
    h1 {
  	margin-top:0cm;
    border-color:black;
    border:10px solid black;
  }
  body{
    background-color:#7FFFD4 ;
  }
  #luck{
    border-color:#6495ED;
    border:10px solid #6495ED;
    height:40px;
    width:200px;
    position:absolute; left:650px; top:440px;
  }
  #lucky{
    background-color: #778899;
    color:white;
    height:60px;
    width:100px;
    border:0;
    position:absolute; left:547px; top:442px;
  }
  #good{
    border-color:#6495ED;
    border:10px solid #6495ED;
    height:40px;
    width:600px;
    position:absolute; left:650px; top:530px;
  }
  #better{
        background-color: #778899;
    color:white;
    height:60px;
    width:100px;
    border:0;
    position:absolute; left:547px; top:532px;
  }
  #itsword{
  	margin-top:-0.5cm;
    background-color:#CD853F;
    height:100px;
    width:1170px;
    padding:15px;
        text-align:center;
        position:absolute;top:100px;left:100px;
        text-decoration: underline overline;
      }
    #myword{
    margin-top:0cm;
    background-color:#CD853F;
    height:440px;
    width:300px;
    padding:15px;
        text-align:center;
        position:absolute;top:200px;left:100px;
        text-decoration: underline overline;
      }
    #change{
    	margin-left:-2cm;
    	margin-top:-0.5cm;
        background-color:transparent;
        padding:15px;
        text-align:right;
        position:absolute;top:220px;left:600px;
    }
    .error {color: #FF0000;}
      
    </style>
</head>
<body>
<div id="itsword">
    <p style="font-size:35px;margin-top:0.3cm">
    <strong>Here you can browse the blogs you want to see</strong>
    </p>
</div>
<div id="change">
<br/><br/><br/>
<h1>登录页面</h1>
<form action="<?php echo site_url('user/do_login')?>" method="post">
    用户名:<input type="text" name="username"><br />
    密码:<input type="password" name="pass"><br />
    <input type="submit" name="sub" value="登录">
</form>
</div>

<div>
<form action="a1" method="post">
  <input type="submit" value="点击进入bolg评论区"> 
</form>
</div>

</body>
</html>







