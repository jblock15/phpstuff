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
  <script>
    function MYALERT() {
      alert("Thank you for your information!!!!");
    } 
    MYALERT();
  </script>
</head>
<body>
  <fieldset>
    <legend></h2>
      Submitted Information:
    </h2></legend>
    <p>Email: <?= $_POST['email'];?></p>
    <p>First Name: <?= $_POST['first_name'];?></p>
    <p>Last Name: <?= $_POST['last_name'];?></p>
    <p>Password: <?= $_POST['password'];?></p>
    <p>Confirm Password: <?= $_POST['confirm_password'];?></p>
    <p>Birthdate: <?= $_POST['birthdate'];?></p>
    <p>Profile Picture: <?= $_POST['picture'];?></p>
  </fieldset>
</body>
</html>
