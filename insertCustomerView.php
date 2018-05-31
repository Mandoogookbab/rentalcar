<!DOCTYPE html>
<html>
<head>
	<title>Add New Customer</title>
</head>
<body>
<form method = "post" action = "?page=insertCustomerDo">
                  <table border="1">

                     <tr>
                        <td>Name</td>
                        <td><input name = "customer_name" type = "text"></td>
                     </tr>
                      <tr>
                        <td>Address</td>
                        <td><input name = "address" type = "text"></td>
                     </tr>
                     <tr>
                        <td>Username</td>
                        <td><input name = "username" type = "text"></td>
                     </tr>
                     <tr>
                        <td>Password</td>
                        <td><input name = "password" type = "text"></td>
                     </tr>
                     <tr>
                        <td>E-mail</td>
                        <td><input name = "email" type = "text"></td>
                     </tr>
                     <tr>
                        <td>Phone Number</td>
                        <td><input name = "phone" type = "text"></td>
                     </tr>
                    
                  
                     
                  
                     <tr>
                        <td> </td>
                        <td>
                          <input type="reset" value="Reset"> <input name = "add" type = "submit" value = "Register">
                        </td>
                     </tr>
                  
                  </table>
               </form>
</body>
</html>