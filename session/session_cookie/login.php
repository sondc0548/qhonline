<?php 
	session_start();
  	if(isset($_POST['ok'])){
		if($_POST['txtuser']==""){
			echo "invalid username";
		}else{
			$n = $_POST['txtuser'];
		}
		if($_POST['txtpass']==""){
			echo "invalid password";
		}else{
			$p = $_POST['txtpass'];
		}
		if(isset($_POST['remember'])){
			$remember = $_POST['remember'];
		}		
		if($n && $p){
			if($n == "admin" && $p == "123456"){	
				$log = TRUE;
			}else{
				$log = false;							
			}
			if($log == TRUE){
				if($remember == "on"){
					setcookie("user", $n, time()+(90*24*60*60),"/");
					setcookie("pass", $p, time()+(90*24*60*60),"/");
				}else if($remember==""){
					// huy cookie
					setcookie("user", "", time()-(91*24*60*60),"/" );
					setcookie("pass", "", time()-(90*24*60*60),"/");
					$_SESSION['user'] = $n;	
					header("location:admin.php");
				    exit();
				}
			}
		}else{
				echo "invalig login";
		}
	}
?>    
<form action="login.php" method="post">
            <table width="268" border="1">
                  <tr>
                    <td>User</td>
                    <td><input type="text" name="txtuser" size="25" value="<?php if(isset($_COOKIE['user'])){ echo $_COOKIE['user']; } ?>" ></td>
                  </tr>
                  <tr>
                    <td>Pass</td>
                    <td><input type="password" name="txtpass" size="25" value="<?php if(isset($_COOKIE['pass'])){ echo $_COOKIE['pass'];} ?>" ></td>
                  </tr>
                  <tr>
                    <td>Remember me</td>
                    <td><input type="checkbox" name="remember" <?php if(isset($_COOKIE['user'])) { ?>  checked <?php }?> ></td>
                  </tr>
                  <tr>                    
                    <td><input type="submit" name="ok" value="Login"></td>
                  </tr>
           </table>
</form>