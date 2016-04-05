<?php



?>

<!DOCTYPE html>
<html>
<head>
  <title>Survey Form</title>

<style type="text/css">

fieldset{
  height: 400px;
  width: 300px;
}

input{
  display: inline-block;
  vertical-align: top;
  margin: 2px;
}

#comments{
  height: 150px;
  width: 280px;
  vertical-align: top;
}



</style>
  </head>
  <body>

    <form action='formsubmit.php' method='post'>
    <fieldset>
        <legend>Survery Form</legend>
        <p>Your Name:<input type='text' name='first_name'></P>
        <p>Coding Dojo Location:
        <select name='location'>
          <option value="Seattle">Seattle</option>
          <option value="San Diego">San Diego</option>
          <option value="Dallas">Dallas</option>
          <option value="D.C.">D.C.</option>
        </select>
        <p>Favorite Language:
        <select name='language'>
          <option value="php">php</option>
          <option value="Java">Java</option>
          <option value="Python">Python</option>
          <option value="iOS">iOS</option>
        </select>

        <p>Comments (Optional): <textarea name='comment' id="comments"></textarea></p>
        <input type='submit' value='Submit'>

      </fieldset>
</form>
