<?php 
		if(isset($_POST['ok']) ){
			if($_POST['txtuser'] == NULL){
				echo "ban chua nhap ten dang nhap";
			}else{
				$n = $_POST['txtuser'];
			}
			if($_POST['txtpass'] == NULL){
				echo "ban chua nhap mat khau";
			}else{
				$p = $_POST['txtpass'];
			}
			if($n && $p){
				if($n == "admin" && $p == "123456"){
					setcookie("user","admin",time()+3600);
					//echo "wellcome back, admin";
					//echo "<a href='admin.php'> Admin page</a>";
					header("location:admin.php") ;
					exit();
				}else{
					echo "wrong ussername or password" ;
				}
			}
		}		
?>
    <form action="login.php" method="post">
    	Username: <input name="txtuser" type="text" size="25" /> <br/>
        Pass: <input name="txtpass" type="password" size="25" /> <br/>
        <input name="ok" type="submit" value="Login" />
    </form>

