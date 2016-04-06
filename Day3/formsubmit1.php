<!DOCTYPE html>
<html>
<head>
  <title>Survey Form Submit</title>

<style type="text/css">

fieldset{
  height: 400px;
  width: 40%;
}

</style>
</head>
<body>
  <fieldset>
    <legend></h2>Submitted Information:</h2></legend>
    <p>Email: <?php echo $_POST['email'];?></p>
    <p>First Name: <?php echo $_POST['first_name'];?></p>
    <p>Last Name: <?php echo $_POST['last_name'];?></p>
    <p>Password: <?php echo $_POST['password'];?></p>
    <p>Confirm Password: <?php echo $_POST['confirm_password'];?></p>
    <p>Birthdate: <?php echo $_POST['birthdate'];?></p>
    <p>Profile Picture: <?php echo $_POST['picture'];?></p>
  </fieldset>

</body>
</html>
