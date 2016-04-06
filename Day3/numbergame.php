<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>number game</title>
  <style type="text/css">

  #wrapper{
    width: 970px;
    border: 1px solid black;
    padding: 120px;
  }

  h2 ,p {
    margin: 5px;
    padding: 1px;
}
.box {
      width: 200px;
      height: 200px;
      margin: 3% auto;
    }
    .box.green {
      background-color: green
    }

    .box.red {
      background-color: red;
    }
</style>
</head>
<body>



  <div id="wrapper">

    <center><h2> Welcome to the great number game!</h2></center>
      <center><p> I am thinking of a number between 1 and 100...</p></center>
      <center><p> Take a guess!</p></center>

    <?php
    if(isset($_SESSION['low']))
        {
          echo $_SESSION['low'];
          unset($_SESSION['low']);
        }

        if(isset($_SESSION['high']))
        {
          echo $_SESSION['high'];
          unset($_SESSION['high']);
        }

        if(!isset($_SESSION['correct']))
        {

        }
        else
        {
          echo $_SESSION['correct'];
          unset($_SESSION['correct']);
        }
    ?>
      <div>
        <form action="process.php" method="post">
          <center><input type="text" name="guess"></center>
          <center><input type="submit" value="submit"></center>
        </form>
      </div>

  </div>
 </body>
</html>
