<?php

    require_once('cmd/con.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>slideroom</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.33" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">


<style>

/* Based on a Dribbble shot by Andreas Storm
   http://dribbble.com/shots/1127916-Sign-in
*/

*{
  -webkit-box-sizing:border-box;
  -moz-box-sizing:border-box;
  box-sizing:border-box;
}
body{
  background: url(https://i.imgur.com/MQB99sg.jpg) #a9b89e;
  font-family:Arial;
  font-size:12px;
  color:#C4BCB0;
}
input[type="email"],
input[type="password"]{
  background:#EAE6E1;
  border:0;
  font-weight:bold;
  padding:10px;
  border-radius:3px;
  width:100%;
  margin:5px 0;
  outline:medium none;
  color:#838383;
}
input[type="checkbox"]{
  -webkit-appearance:none;
  width:10px;
  height:10px;
  position:relative;
  outline:medium none;
  margin-right:10px;
}
input[type="checkbox"]::before{
  width:9px;
  height:9px;
  content:"";
  display:block;
  border:3px solid #C4BCB0;
  border-radius: 9px;
  position:absolute;
}
input[type="checkbox"]:checked::after{
  width:5px;
  height:5px;
  content:"";
  display:block;
  background: #C4BCB0;
  border-radius: 5px;
  position:absolute;
  left:5px;
  top:5px;
}
input[type="submit"]{
  display:block;
  padding:10px;
  background:#50BFA4;
  border:0;
  border-radius:3px;
  font-weight:bold;
  width:100%;
  color:#fff;
  cursor:pointer;
  -webkit-transition:all 0.3s;
  -moz-transition:all 0.3s;
  transition:all 0.3s;
}
input[type="submit"]:hover{
  background:#58CCB0;
}
.main-form{
  width:350px;
  margin: 100px auto;
  padding:50px;
  border: 1px solid rgba(0,0,0,0.1);
  -webkit-box-shadow:0 1px 2px rgba(0,0,0,0.2);
  background:#fff;
}
.logo{
  background:#50BFA4;
  width:40px;
  height:40px;
  display:block;
  margin:0 auto 30px;
  border-top-left-radius:20px;
  border-top-right-radius:20px;
  border-bottom-left-radius:20px;
  position:relative;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  transform: rotate(45deg);
}
.logo::before{
  width:14px;
  height:14px;
  display:block;
  border:5px solid #F7F5F2;
  content:"";
  position:absolute;
  border-radius:14px;
  top:8px;
  left:8px;
}
.main-form > label{
  display:block;
  margin:10px 0 15px;
  line-height:15px;
  cursor:pointer;
}
.main-form > div{
  margin-top:20px;
}
a{
  color:#C4BCB0;
  text-decoration:none;
}
.main-form > a{
  font-size:11px;
  display:block;
  text-align:center;
  margin:10px 0;
}
.main-form > div >a:first-child{
  font-weight:bold;
  color: gray;
  padding-top: 5px;
}
.main-form > div >a:nth-child(2){
  border:1px solid #3DA087;
  display:inline-block;
  border-radius:3px;
  color:#3DA087;
  font-weight:bold;
  padding:7px 15px;
  margin-left:28px;
  -webkit-transition:all 0.3s;
  -moz-transition:all 0.3s;
  transition:all 0.3s;
  float: right;
}
.main-form > div >a:nth-child(2):hover{
  background:#3DA087;
  color:#fff;
}	


</style>

</head>

<body>
    <form method="POST">
	<div class="main-form">
	  <!--<i class="logo"></i>-->
	  <h3 style="text-align: center; color: #50BFA4;">Login</h3>
	  <input type="email" placeholder="email" name="email" required>
	  <input type="password" placeholder="Senha" name="pass" required>
	  <input type="submit" value="Entrar" name="entrar">
	  <div>
	   <a href="#" title="">Recuperar senha?</a>
	   <a href="lib/cad.php" title="">Criar conta</a>
  	  </div>
<?php

    $email= addslashes($_POST['email']);
    $pass = addslashes($_POST['pass']);

    if(isset($_POST['entrar']))
    {


	$cmd = $con->prepare("SELECT * FROM user WHERE MAIL_USER = :mail AND PASS_USER = :pass");
	$cmd->bindValue(":mail", $email);
	$cmd->bindValue(":pass", $pass);
	$cmd->execute();

	if($cmd->rowCount() > 0)
	{
	    $user = $cmd->fetch();
	    session_start();
	    $_SESSION['PNOM_USER'] = $user['PNOM_USER'];
	    header('Location: slide.php');
	    echo "Logando...";
	    return true;
	}
	else
	{

	    echo "<h5 style='color:red; text-align:center;'>Email ou Senha incorretos!</h5>";

	}
	
    }

?>
	</div>
    </form>
</body>

</html>
