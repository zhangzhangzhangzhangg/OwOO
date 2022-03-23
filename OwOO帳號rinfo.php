<body bgcolor=#d8b2d1>
<center><h1>OwOO帳號資訊</h1>
<?php
$uname=$_GET["uname"];
$umail=$_GET["umail"];
$utele=$_GET["utele"];
$uadd=$_GET["uadd"];
$uid=$_GET["uid"];
$usex=$_GET["usex"];
$uacc=$_GET["uacc"];
$upw=$_GET["upw"];    

echo "<b>你的姓名: </b>".$uname."先生/小姐<br/>";
echo "<b>你的信箱: </b>".$umail."<br/>";
echo "<b>你的電話: </b>".$utele."<br/>";
echo "<b>你的地址: </b>".$uadd."<br/>";
echo "<b>你的身分證字號: </b>".$uid."<br/>";
    
if($usex=='1'){
    echo"<b>你的性別:</b>男<br/>";
}elseif($usex=='2'){
    echo"<b>你的性別:</b>女<br/>";
}else{
    echo"<b>你的性別:</b>不明</br>";
}

echo "<b>你的帳號: </b>".$uacc."<br/>";
echo "<b>你的密碼: </b>".$upw."<br/>";
    
?>
