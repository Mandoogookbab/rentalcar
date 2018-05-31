<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
<form method = "post" action = "?page=loginDo">
          <table border=1>
                   <tr>
                        <td>username</td>
                        <td><input name = "username" type = "text"></td>
                     </tr>
                     <tr>
                        <td>password</td>
                        <td><input name = "password" type = "password"></td>
                     </tr>
                     <tr>
                        <td>Status</td>
                        <td>    
                          <select name = "status">
                              <option value="customer">customer</option>
                              <option value="admin">admin</option>
                          </select>
                        </td>
                     </tr>
                     <tr>
                        <td> </td>
                        <td>
                          <input type="reset" value="Reset"> <input name = "add" type = "submit" value = "Login">
                        </td>
                     </tr>
                  
                  </table>
               </form>
               <p><p>
        If you do not have account, please click register button below. <p><p>
        <a href=?page=insertCustomerView><button type=button>Register</button></a>
</body>
</html>