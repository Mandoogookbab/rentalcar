<!DOCTYPE html>
<html>
<head>
	<title>Add Car</title>
</head>
<body>
<form method = "post" action = "?page=insertCar_typeDo" enctype="multipart/form-data">
                  <table border="1">
                   
                     <tr>
                        <td>Car Type</td>
                        <td><input name = "car_type" type = "text"></td>
                     </tr>
                  
                     
                      <tr>
                        <td>Car Price</td>
                        <td><input name = "car_price" type = "text"></td>
                     </tr>
                     <tr>
                        <td>Max Capacity</td>
                        <td><input name = "capacity" type = "text"></td>
                     </tr>
                     <tr>
                        <td>Image</td>
                        <td><input type="file" name="image" value="Browse"></td>
                     </tr>
                      <tr>
                        <td>Bluetooth</td>
                        <td>
                          <select name = "bluetooth">
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                          </select>
                        </td>
                     </tr>
                    <tr>
                        <td>Navigation</td>
                        <td>
                          <select name = "navigation">
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                          </select>
                        </td>
                     </tr>
                     <tr>
                        <td> </td>
                        <td>
                          <input type="reset" value="Reset"> <input name = "add" type = "submit" value = "Add Car Type">
                        </td>
                     </tr>
                  
                  </table>
               </form>
</body>
</html>