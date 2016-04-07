<?php



?>

<!DOCTYPE html>
<html>
<head>
  <title>Survey Form</title>

<style type="text/css">

fieldset {
  height: 400px;
  width: 40%;
}

input, p {
  display: inline-block;
  width: 48%
  }

  p {
    text-align: left;
  }





</style>
  </head>
  <body>

    <form action='formsubmit1.php' method='post'>
    <fieldset>
        <legend>Registration Form</legend>
        <p>Email:</p><input type='text' placeholder="Email" name='email'>
        <p>First Name:</p><input type='text' placeholder="First_Name" name='first_name'>
        <p>Last Name:</p><input type='text' placeholder="Last_Name" name='last_name'>
        <p>Password:</p><input type='password' placeholder="Password" name='password'>
        <p>Confirm Password:</p><input type='password' placeholder="Confirm_Password" name='confirm_password'>
        <p>Birthdate:</p><input type='date' placeholder="XX/XX/XXXX" name='birthdate'>
        <p>Profile Picture:</p><input type="file" id="picture"name="picture">
        <br>
        <center><input type='submit' value='Submit' id="subbutton"></center>
     </fieldset>
</form>
