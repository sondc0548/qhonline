<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="xuliuploadform.php" method="post" enctype="multipart/form-data">
    <table width="294" border="1">
          <tr>
                <td>ID</td>
                <td><input type="text" size="25" name="txtid" /></td>
          </tr>
          <tr>
                <td width="93">Full Name</td>
                <td width="173"><input type="text" size="25" name="txtname" /></td>
          </tr>
          <tr>
                <td>Address</td>
                <td><input type="text" size="25" name="txtadd" /></td>
          </tr>
          <tr>
                <td>Email</td>
                <td><input type="text" size="25" name="txtemail" /></td>
          </tr>
          <tr>
                <td>Phone</td>
                <td><input type="text" size="25" name="txtphone" /></td>
          </tr>
          <tr>
                <td>Gender</td>
                <td>
                	<input type="radio" name="gender" value="1" checked="checked" /> Male
                	<input  type="radio" name="gender" value="2" /> Female                    
                </td>
          </tr>  
           <tr>
                <td>Country</td>
                <td>
                	<select name="country">
                    	<option value="1">Viet Nam</option>
                        <option value="2">Laos</option>
                        <option value="3">Cambodia</option>
                        <option value="4">Malaysia</option>
                    </select>
                </td>
          </tr>            
          <tr>
                <td>Note</td>
                <td><textarea name="txtnote" cols="25" rows="5">&nbsp;</textarea></td>
          </tr>
          <tr>
                <td>Image</td>
                <td><input type="file" size="25" name="img" /></td>
          </tr>
          <tr>               
                <td colspan="2" align="center"><input name="submit" type="submit" value="Register" /></td>
          </tr>
    </table>
</form>
</body>
</html>
