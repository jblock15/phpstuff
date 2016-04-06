<!DOCTYPE html>
<html>
<head>
<title>Survey Form</title>
<style type="text/css">

fieldset{
  height: 300px;
  width: 300px
}

#return {
  height: 25px;
  width: 70px;
  border-radius: 5px;
  margin-left: 200px;
  background-color: rgba(48, 79, 172, 0.6);
}
#return a {
  text-decoration: none;
  color: #fff;
  padding: 5px;
}

</style>

</head>
<body>
  <fieldset>
    <legend></h2>Submitted Information:</h2></legend>
    <p>Full Name: <?php echo $_POST['first_name'];?></p>
    <p>Coding Dojo Location: <?php echo $_POST['location'];?></p>
    <p>Favorite Language: <?php echo $_POST['language'];?></p>
    <p>Comments: <?php echo $_POST['comment'];?></p>
    <div id="return"><a href="surveyform.php">Go back!</a></div>
  </fieldset>

</body>
</html>
