<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="reg.php" method="post">
<table width="80%" border="1" cellspacing="5" cellpadding="3" summary="Detail of user">
  <caption>
    Registration Form
  </caption>
  <tr>
    <td>First Name</td>
    <td><input name="Fname" type="text" id="fname" size="40" maxlength="60" placeholder="enter first name"></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input name="lname" type="text" id="lname" size="40" maxlength="60" placeholder="enter last name"></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td><p>
      <label>
        <input type="radio" name="Gender" value="m" id="Gender_0">
        Male</label>
      <br>
      <label>
        <input type="radio" name="Gender" value="f" id="Gender_1">
        Female</label>
      <br>
      <label>
        <input type="radio" name="Gender" value="x" id="Gender_2">
        other</label>
      <br>
    </p></td>
  </tr>
  <tr>
    <td>Hobbies
    </td>
    <td><p>
      <label>
        <input type="checkbox" name="Hobbies" value="c" id="Hobbies_0">
        cricket</label>
      <br>
      <label>
        <input type="checkbox" name="Hobbies" value="o" id="Hobbies_1">
        cooking</label>
      <br>
    </p></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><textarea name="address" cols="104" rows="4">
    </textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="submit" value="Submit"></td>
  </tr>
</table>




</form>
</body>
</html>