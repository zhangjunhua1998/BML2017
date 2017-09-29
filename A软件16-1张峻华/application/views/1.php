<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
   #pinglun
   {
     background-color:gray;
    height:200px;
    width:350px;
    border:1px solid black;
   } 
  </style>
</head>
<body>

<?php if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h1>The first person's blog</h1>
<div>*********************<br/>
     *********************<br/>
     *********************<br/>
</div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   评论：<textarea name="comment" rows="5" cols="40"></textarea>
   
   <br><br>
   <br><br>
   <input type="submit" name="submit" value="提交评论"> 
</form>

<div id="pinglun">
<?php
    echo "你的评论:";
		echo "<br>";
        echo $comment;
        echo "<br>";
	    
?>
</div>

<div>
<form action="a2" method="post">
  <input type="submit" value="下一页"> 
</form>
</div>

<div>
<form action="chazhao" method="post">
  <input type="number" name='chazhao' min="1" max="5">
  <input type="submit" value="查找">
</form>
</div>
	</body>
</html>
