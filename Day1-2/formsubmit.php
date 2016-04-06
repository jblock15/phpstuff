<!DOCTYPE html>
<html>
<head>
  <title>Survey Form</title>

<style type="text/css">

fieldset{
  height: 400px;
  width: 300px
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
  </fieldset>

</body>
</html>
