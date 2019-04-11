<?php 
		session_start();
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
							
					if(!empty($_POST['remember'])){
						setcookie("user", $n, time()+(90*24*60*60));
						setcookie("pass", $p, time()+(90*24*60*60));
					}
					else{
						// huy cookie nê´u ko tick va`o dâ´u remmberme
							setcookie("user","", time()-(90*24*60*60));
						 // huy cookie nê´u ko tick va`o dâ´u remmberme
							setcookie("pass","", time()-(90*24*60*60));						
						$_SESSION['user'] = "admin";
						header("location:vd6_admin.php") ;
						exit();
					}
				}else{
					echo "wrong ussername or password" ;
				}
			}
		}		
?>
    <form action="vd5_login.php" method="post">
    	Username: <input name="txtuser" type="text" size="25" value="<?php if(isset($_COOKIE['user'])){ echo $_COOKIE['user'];}?>" /> <br/>
        Pass: <input name="txtpass" type="password" size="25" value="<?php if(isset($_COOKIE['pass'])){ echo $_COOKIE['pass'];}?>" /> <br/>
        Remember me: <input type="checkbox" name="remember" <?php if(isset($_COOKIE['user'])){ ?> checked  <?php  } ?> > <br/>
        <input name="ok" type="submit" value="Login" />
    </form>

