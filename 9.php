
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0,user-scalable=0" />

</head>
<body>

   <form action="9.php" method="post">   
                           
                            
            
					 <hr>
					 聊天内容：<input type="text" name="text" style="width:80%;"/>
				<input type="submit" name="sub" value="提交"/>
                 
            </form>  

</body>








</html>





<?php



$chakan=file_get_contents("1.txt");


echo $chakan;

if($_POST["sub"]){
	
	$text=$_POST["text"];
$a=fopen("1.txt","a");
fwrite($a,"<br>");

fwrite($a,$text);



fclose($a);


}











?>