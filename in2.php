<?php
session_start();
//header("location: home.php");
class className{
	public function __construct(){
		$this->conn=mysqli_connect('localhost','mohammed','12345','inj') or die("ERR DB CONN :(");
	}
	public function runcont(){
	$user=$_POST['username'];
	$pass=$_POST['pass'];
	$qqq=mysqli_query($this->conn,"select * from sqlinj where name='$user' and password='$pass'");
	if(mysqli_num_rows($qqq) == 1){
		$_SESSION['user']=$user;
		header("location: home.php");
	}
	else{
		$_SESSION['mes']="ERR wrong user or pass";
		echo $_SESSION['mes'];
	}	

	}

}
if(!isset($_SESSION['user'])){

$obj=new className;

//$qqq=mysqli_query($obj->conn,"select * from sqlinj where name=$_POST[username] and password=$_POST[pass]");

if(isset($_POST['nano'])){
	$obj->runcont();	
}

}
else{
header("location: home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
#formdiv{
width:50%;
height: 10%;
background-color: red;
padding:15px;
margin:10px;
}
#formdiv input{
border:none;
padding:5px;
} 
</style>
</head>
<body onload="document.title='home page'">
<div id='formdiv'>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ;?>">
<input type='text' name='username' />
<input type='password' name='pass'>
<input type='submit' name='nano' value='login' />
</form>
</div>
</body>
</html>
